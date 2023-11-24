<?php
/**
 * 作り方を学ぶ_受講ページ
 */

	if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	if ( maintenance_mode_enable() ) {
		echo callback_maintenance_html();
		get_footer();
		return;
	}
?>
<section class="container">
	<header class="section-header" style="background-color: #FFDD2D; text-align: center;">
		<h1><span>作り方を学ぶ</span>受講ページ</h1>
		<div>
			<p class="balloon">気になる講師・ジャンル・<br class="pc-only">テーマを<br class="mobile-only">ポチるだけ！</p>
			<div class="illust knit-bag pc-only" style="top: 90px; width: 139px; height: 126px; transform: translateX( -340px )">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/knit-bag_pc.png" width="139" height="126" style="animation-delay: -250ms">
			</div>
			<div class="illust bag pc-only" style="bottom: 60px; width: 230px; height: 243px; transform: translateX( -450px );">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/bag.png" width="230" height="243"  style="animation-delay: -500ms">
			</div>
			<div class="illust roll-ribbon pc-only" style="bottom: 40px; width: 269px; height: 180px; transform: translateX( 440px );">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/ribbon.png" width="269" height="180">
			</div>
		</div>
		<p class="description">掲載されているドリーム先生の無料レッスンをお選びいただき、<br>LINEへご登録ください。<br>LINE登録後は素敵な先生からのご案内が届きます。<br>コツや秘訣を習得してあなたのスキルアップにお役立て下さいね。<br>また気になるジャンルや先生がいたら、検索窓から検索いただけます。<br>知らなかったハンドメイドや知らなかった技術にたどり着けるチャンスです♪</p>
	</header>
	<div class="main-contents">
		<div class="inner">
	<?php if( !post_password_required( $post->ID ) ) : ?>
		<p class="description">こちらはドリーム先生のお名前が<br class="mobile-only">「あいうえお順」で掲載されています。<br><span class="mobile-only">左へスライドしてご覧ください。</span><span class="pc-only">(例)「あ行」をクリックしていただくと、あ行から始まるお名前の先生の項目にジャンプします。</span></p>
		<div class="button_wrapper">
			<input type="search" id="search-box" placeholder="キーワードでさがす">
		</div>
		<?php
			// 50音順判定用
			$furigana = 'furigana';
			$nav_id = 'name_';
			$jp_agyo = "アイウエオ";
			$jp_kagyo = "カキクケコ";
			$jp_sagyo = "サシスセソ";
			$jp_tagyo = "タチツテト";
			$jp_nagyo = "ナニヌネノ";
			$jp_hagyo = "ハヒフヘホ";
			$jp_magyo = "マミムメモ";
			$jp_yagyo = "ヤユヨ";
			$jp_ragyo = "ラリルレロ";
			$jp_wagyo = "ワヲン";
			$mojilist = array( $jp_agyo, $jp_kagyo, $jp_sagyo, $jp_tagyo, $jp_nagyo, $jp_hagyo, $jp_magyo, $jp_yagyo, $jp_ragyo, $jp_wagyo );
			$mojilabel = array( "あ行", "か行" ,"さ行", "た行", "な行", "は行", "ま行", "や行", "ら行", "わ行" );
	
			// WordPressクエリを作成
			$args = Array(
				'post_type' => 'handmade-artists',
				'posts_per_page' => '-1',
				'meta_key' => $furigana,
				'orderby' => 'meta_value',
				'order' => 'ASC',
			);
			$query = new WP_Query($args);
	
			// グローバル初期値
			$isFirst = true;
			$display = [];
			$nav_list = [];
	
			// クエリループ開始 ----->
			if ( $query -> have_posts() ): while ( $query -> have_posts() ):
				$query -> the_post();
	
				// フリガナを全角から半角、半角から全角へ変換し最初の1文字だけ取得
				$field_furigana = post_custom( $furigana );
				$furigana_conv = mb_convert_kana( $field_furigana, 'k', 'UTF-8' );
				$furigana_conv = mb_convert_kana( $furigana_conv,  'K', 'UTF-8' );
				$first_char = mb_substr( $furigana_conv, 0, 1 );
	
				// $mojilistとフリガナの最初の1文字目でマッチングを行い、合致した場合HTMLを変数に代入
				foreach ( $mojilist as $index => $value ) {
					$position = strpos( $value, $first_char );
	
					// 出力するHTMLを準備
					if ( $position !== false ) {
						// 目次, ナビゲージョン
						if ( $isFirst ) {
							$heading = '<h2 id="'.$nav_id.$index.'" class="row-title">'.str_replace( '行', '', $mojilabel[$index] ).'</h2><div class="cards-container"><div class="inner"><ul class="cards">';
							array_push( $display, $heading );
							$nav = '<li><a href="#'.$nav_id.$index.'">'.$mojilabel[$index].'</a></li>';
							array_push( $nav_list, $nav );
							$count = $index;
							$isFirst = false;
						} else {
							if ( $count != $index ) {
								$heading = '</ul></div><div class="arrow preview disabled"></div><div class="arrow next"></div></div><h2 id="'.$nav_id.$index.'" class="row-title">'.str_replace( '行', '', $mojilabel[$index] ).'</h2><div class="cards-container"><div class="inner"><ul class="cards">';
								array_push( $display, $heading );
	
								$nav = '<li><a href="#'.$nav_id.$index.'">'.$mojilabel[$index].'</a></li>';
								array_push( $nav_list, $nav );
								$count = $index;
							}
						}
	
						// 作家情報
						$group_data = SCF::get( "handmade-artists", get_the_ID() );
						$list = "";
						$now = new DateTime();
						$post_date = new DateTime( get_post_field( 'post_date', get_the_ID() ) );
						$post_one_month_ahead = $post_date->add( new DateInterval('P1M'));
	
						if ( $group_data ) {
							foreach ( $group_data as $field ) {
								$name = get_the_title();
								$list = '<li>';
								$list .= $now < $post_one_month_ahead ? '<span class="new">New</span>' : "";
								$list .= $field['face'] ? wp_get_attachment_image( $field['face'], array( 116, 116 ), false, array( 'alt' => $name, 'class' => "face", 'loading' => 'lazy' ) ) : "";
								$list .= $field['job-title'] ? '<hgroup><p>'. $field['job-title'] .'</p>' : "";
								$list .= '<h3>'. $name .'</h3>';
								$list .= '</hgroup>';

								if ( $field['home'] | $field['twitter'] | $field['instagram'] | $field['youtube'] ) {
									$list .= '<ul class="links">';
									$list .= $field['home'] ? '<li><a class="home" href="'. $field['home'] .'">ホームページ</a></li>' : '<li><a class="home" tabindex="-1">ホームページ</a></li>';
									$list .= $field['twitter'] ? '<li><a class="twitter" href="'. $field['twitter'] .'">X</a></li>' : '<li><a class="twitter" tabindex="-1">X</a></li>';
									$list .= $field['youtube'] ? '<li><a class="youtube" href="'. $field['youtube'] .'">YouTube</a></li>' : '<li><a class="youtube" tabindex="-1">YouTube</a></li>';
									$list .= $field['instagram'] ? '<li><a class="instagram" href="'. $field['instagram'] .'">Instagram</a></li>' : '<li><a class="instagram" tabindex="-1">Instagram</a></li>';
									$list .= '</ul>';
								}

								$list .= $field['banner'] ? wp_get_attachment_image( $field['banner'], array( 200, 200 ), false, array( 'alt' => $field['job-title'], 'loading' => 'lazy' ) ) : "";
								$list .= $field['heading'] ? '<h4>'. $field['heading'] .'</h4>' : "";
								$list .= $field['description'] ? '<p>'. $field['description'] .'</p>' : "";
								$list .= $field['line'] ? '<a href="'. $field['line'] .'" role="button">詳細を見る</a>' : "";
								$list .= $field['keyword'] ? '<span class="keywords">'. $field['keyword'] .'</span>' : "";
								$list .= '</li>';
							}
						}
						array_push( $display, $list );
					}
				}
		?>
		<?php endwhile; else :
			// 記事がない場合の処理
		?>
		<?php endif; 
			// -----> クエリループ終了
		?>
		<?php
			if ( $nav_list ) {
				echo '<nav id="toc" class="pc-only"><ul>';
				foreach ( $nav_list as $value ) {
					echo $value;
				}
				echo '</ul></nav>';
			}
	
			if ( $display ) {
				foreach ( $display as $value ) {
					echo $value;
				}
				echo '</ul></div><div class="arrow preview disabled"></div><div class="arrow next"></div></div>';
			}
		?>
		<p class="nothing is-hidden"></p>
		<script>
			$(document).ready(function() {
				function updateSlider(slider) {
					if ( window.matchMedia("(min-width: 768px)").matches ) {
						return;
					}

					const sliderList = slider.find('.cards');
					const prevButton = slider.find('div.arrow.preview');
					const nextButton = slider.find('div.arrow.next');
					let slides = sliderList.children('li:not(.is-hidden)');
					let slideWidth = slides.outerWidth();
					let currentSlideIndex = 0;
					let direction;
					let position;
					let startX = 0
					let startY = 0
					let endX = 0
					let endY = 0

					function performSlideUpdate() {
						sliderList.css('transform', `translateX(-${(slideWidth * currentSlideIndex) + (currentSlideIndex * 10)}px)`);
						prevButton.toggleClass('disabled', currentSlideIndex <= 0);
						nextButton.toggleClass('disabled', currentSlideIndex === slides.length - 1);
					}

					function getPosition(event) {
						return event.originalEvent.touches[0].pageX;
					}

					prevButton.on('click', () => {
						if (currentSlideIndex > 0) {
							currentSlideIndex--;
							performSlideUpdate();
						}
					});
						
					nextButton.off('click');
					nextButton.on('click', () => {
						if (currentSlideIndex < slides.length - 1) {
							currentSlideIndex++;
							performSlideUpdate();
						}
					});

					sliderList.off('touchstart');
					sliderList.on('touchstart', (event) => {
						position = getPosition(event);
						direction = '';
						startX = event.touches[0].pageX;
						startY = event.touches[0].pageY;
					});

					sliderList.off('touchmove');
					sliderList.on('touchmove', (event) => {
						endX = event.changedTouches[0].pageX;
						endY = event.changedTouches[0].pageY;

						if (position - getPosition(event) > 30) {
							direction = 'left';
						} else if (position - getPosition(event) < -30){
							direction = 'right';
						}
					});

					sliderList.off('touchend');
					sliderList.on('touchend', (event) => {
						const distanceX = Math.abs(endX - startX);
						const distanceY = Math.abs(endY - startY);
						if (distanceX > distanceY && distanceX > 30) {
							if ( direction == 'right' && currentSlideIndex > 0 ) {
								currentSlideIndex--;
								performSlideUpdate();
							} else if ( direction == 'left' && currentSlideIndex < slides.length - 1) {
								currentSlideIndex++;
								performSlideUpdate();
							}
						}
					});

					performSlideUpdate();
				}

				function initSlider() {
					$('.cards-container').each(function() {
						updateSlider($(this));
					});
				}

				function liveSearch() {
					const cards = $('.cards > li');
					let search_query = $('#search-box').val().toLowerCase();

					cards.each(function () {
						if ($(this).text().toLowerCase().includes(search_query)) {
							$(this).removeClass('is-hidden');
							$('h2.row-title').removeClass('is-hidden');
							$('div.arrow').removeClass('is-hidden');
						} else {
							$(this).addClass('is-hidden');

							if ( $('.cards > li:not(.is-hidden)').length === 0 ) {
								$('p.nothing').removeClass('is-hidden');
							} else {
								$('p.nothing').addClass('is-hidden');
							}
						}

						$('.cards-container').each(function() {
							const ul = $(this).find('ul.cards');
							const hiddenItems = ul.find('li.is-hidden');

							if (hiddenItems.length === ul.children('li').length) {
								const hiddenH2 = $(this).prev('h2.row-title').first();
								if (hiddenH2.length) {
									hiddenH2.addClass('is-hidden');
								}
								$(this).children('div.arrow').addClass('is-hidden');
							}
							updateSlider($(this));
						});
					});
				}
	
				let typingTimer;
				let typeInterval = 500;
				const main = $('#main');
				const searchInput = $('#search-box');
	
				searchInput.on('input', () => {
					clearTimeout(typingTimer);
					main.toggleClass('search-mode', searchInput.val().length > 0);
					typingTimer = setTimeout(liveSearch, typeInterval);
				});

				initSlider();
				
				$('#main').resize(function() {
					initSlider();
				});

			});
		</script>
	<?php else: ?>
			<div class="custom_password_aria" style="padding: 0 1.25em;">
				<?php echo get_the_password_form(); ?>
			</div>
	<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer( 'nosidebar' ); ?>
