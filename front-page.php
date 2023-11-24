<?php
/**
 * トップページ
 */

	if ( !defined( 'ABSPATH' ) ) exit;
	$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
	$new_query = new WP_Query($args);

	get_header();
?>
<div class="key-visual">
	<div class="container follow-rules">
		<div class="ladies" style="position: relative; z-index: 10;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_1_l@2x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_1_l.png 804w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_1_l@2x.png 1608w" width="804" height="687" style="-webkit-animation-delay: 0s, 750ms; animation-delay: 0s, 750ms; z-index: 40;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_2_l@2x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_2_l.png 804w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_2_l@2x.png 1608w" width="804" height="687" style="-webkit-animation-delay: 500ms, 1.5s; animation-delay: 500ms, 1.5s; z-index: 30;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_3_l@2x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_3_l.png 804w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/firstview/fv_lady_3_l@2x.png 1608w" width="804" height="687" style="-webkit-animation-delay: 1s, 2.25s; animation-delay: 1s, 2.25s; z-index: 20;">
		</div>
		<div class="button-container">
			<span class="tagline">日本一ハンドメイドの夢が叶う場所</span>
			<span class="description">ハンドメイドに特化したビジネススクール</span>
			<a href="https://krfaw.hp.peraichi.com" target="_blank" class="has-arrow" role="button" style="position: relative; margin: 0.375em auto 0; padding: 1em; background: #ea4086; box-shadow: 5px 5px 0 #ffe2ee; color: #fff; line-height: 1.5;">無料の動画レッスンを視聴する</a>
		</div>
	</div>
</div>
<nav id="bottom-navigation" class="mobile-only">
	<ul>
		<li style="background: #FFDD2D">
			<a href="<?php echo( home_url() ) ?>/handmade-tutorials">
				<svg xmlns="http://www.w3.org/2000/svg" width="23" height="13" viewBox="0 0 23 13" fill="none">
					<g clip-path="url(#clip0_1822_4018)">
						<path d="M12.54 8.5L21.69 11.87L21.68 0.5L12.54 3.83" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M9.65 8.5L0.5 11.87V0.5L9.65 3.83" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12.57 3.69H9.60999V8.69H12.57V3.69Z" stroke="white" stroke-miterlimit="10"/>
						<path d="M9.27004 6.19H5.67004" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M16.51 6.17999L12.92 6.18999" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<defs>
						<clipPath id="clip0_1822_4018">
							<rect width="22.19" height="12.37" fill="white"/>
						</clipPath>
					</defs>
				</svg>
				<span>作り方を学ぶ</span>
			</a>
		</li>
		<li style="background: #34D2DC">
			<a href="<?php echo( home_url() ) ?>/learn-to-sell">
				<svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
					<g clip-path="url(#clip0_1822_4040)">
						<path d="M16.36 6.15997H0.5V18.55H16.36V6.15997Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M0.599976 12.36H16.26" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M8.43005 6.15997V18.56" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.48996 1.18C7.39996 2.09 8.22996 6.21 8.22996 6.21C8.22996 6.21 4.10996 5.38 3.19996 4.47C2.28996 3.56 2.28996 2.09 3.19996 1.18C4.10996 0.269998 5.57996 0.269998 6.48996 1.18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10.26 1.18C9.35002 2.09 8.52002 6.21 8.52002 6.21C8.52002 6.21 12.64 5.38 13.55 4.47C14.46 3.56 14.46 2.09 13.55 1.18C12.64 0.269998 11.17 0.269998 10.26 1.18Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<defs>
						<clipPath id="clip0_1822_4040">
							<rect width="16.86" height="19.06" fill="white"/>
						</clipPath>
					</defs>
				</svg>
				<span>売り方を学ぶ</span>
			</a>
		</li>
		<li style="background: #FF9EC7">
			<a href="<?php echo( home_url() ) ?>/learn-start-business">
				<svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
					<g clip-path="url(#clip0_1822_4064)">
						<path d="M19.6 14.75V5.69H14.94V0.5H5.16V5.69H0.5V14.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M10.05 7.30002C10.9723 7.30002 11.72 6.55234 11.72 5.63002C11.72 4.70771 10.9723 3.96002 10.05 3.96002C9.12769 3.96002 8.38 4.70771 8.38 5.63002C8.38 6.55234 9.12769 7.30002 10.05 7.30002Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12.51 14.75V11.36C12.51 10 11.41 8.90002 10.05 8.90002C8.68997 8.90002 7.58997 10 7.58997 11.36V14.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<defs>
						<clipPath id="clip0_1822_4064">
							<rect width="20.1" height="15.25" fill="white"/>
						</clipPath>
					</defs>
				</svg>
				<span>お教室開業を学ぶ</span>
			</a>
		</li>
	</ul>
	<button>
		<span>コース一覧を隠す</span>
		<svg xmlns="http://www.w3.org/2000/svg" width="19" height="11" viewBox="0 0 19 11" fill="none">
			<g opacity="0.5">
				<path d="M17.9091 1.00003L10.2291 8.99994L1.90924 1.00003" stroke="#9A7A74" stroke-width="2" stroke-linecap="round"/>
			</g>
		</svg>
	</button>
	<script>
		$(document).ready(function() {
			$("#bottom-navigation button").on("click", function(e) {
				if($(this).hasClass('close')) {
					$(this).prev('ul').css('transform', 'translateY(0)');
					$(this).removeClass('close');
					$(this).children('span').text('コース一覧を隠す');
				} else {
					$(this).prev('ul').css('transform', 'translateY(calc(100% + 1rem))');
					$(this).addClass('close');
					$(this).children('span').text('コース一覧を開く');
				}
			});

			const nav = $( '#bottom-navigation' );
			const navPosition = nav.offset().top + nav.outerHeight();
			const windowHeight = $( window ).height();
			$(window).scroll(function() {
				let scroll = $( window ).scrollTop();
				
				if ( scroll >= navPosition - windowHeight ) {
					nav.show();
					nav.css('position', 'fixed');
				} else {
					nav.hide();
					nav.css('position', 'relative');
				}
			});
		});
	</script>
</nav>
<section class="news" style="display: flex; flex-direction: row; flex-wrap: nowrap; align-items: center; grid-gap: 2em; width: 1000px; margin: 0 auto; font-size: 0.875rem;">
	<div style="display: flex; flex-direction: column; justify-content: space-between; height: 123px;">
		<h2 class="dual-heading" data-english="News" style="color: #9A7A74; font-family: inherit; font-size: 1rem; letter-spacing: -0.03em;">お知らせ</h2>
		<a href="<?php echo( home_url() ) ?>/archives/" class="has-arrow" role="button" style="margin: 0.5em 0; padding: 0.5em 0.7em;">一覧を見る</a>
	</div>
	<?php if ($new_query->have_posts()) : ?>
		<ul class="list" style="display: inline-flex; flex-wrap: nowrap; grid-gap: 2em; height: 123px;">
		<?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
			<li>
				<?php
					if ( has_post_thumbnail() ) {
						echo ''.get_the_post_thumbnail( get_the_ID(), 'post-thumbnail' ). '';
					} else {
						echo '<span class="no_image">No images</span>';
					}
				?>
				<div>
					<?php the_category(); ?>
					<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
				</div>
			</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
	<?php else : ?>
		<p>記事がありません。</p>
	<?php endif; ?>
</section>
<hr>
<div style="max-width: 100vw; overflow: hidden;">
	<section class="greeting container follow-rules" style="z-index: 20;">
		<div class="inner" style="position: relative">
			<h2>夢への一歩、<br class="mobile-only">はじめてみませんか？</h2>
			<div class="content">
				<p>「子どもの頃、お母さんが手作りしたお洋服が好きでした」<br class="pc-only">「大人になってお仕事のストレスを癒してくれたのがハンドメイドでした」<br class="pc-only">「好きなデザインでアクセサリーが作りたかった」</p>
				<p>あなたがハンドメイドを好きになったきっかけにはどんなストーリーがありますか？<br>懐かしさ、あたたかさ、ほっこりとやわらかい癒し、楽しさ！ワクワク！<br>ハンドメイドにはいつでも一人一人のストーリーがあります。</p>
				<p>自分や家族のためだったハンドメイドを、今度は喜んでくれる誰かのために！<br>そんな気持ちで一歩踏み出したいと思った時に<br class="pc-only">やってくる現実に寄り添ってあなたの夢を実現したい！</p>
				<p>ハンドメイドの仕事塾<span class="r-mark">&reg;</span>は世界中のハンドメイドが大好きなみなさんが、<br class="pc-only">次のステージへ向かう第一歩を応援するために立ち上がりました。</p>
				<p>もっと上手に作れるようになりたい！<br>誰かの笑顔につながる作品作りで喜ばれたい！<br>「私にもできた！」という自信につなげてあげたい！ 夢は世界進出！<br>本を出版したい！<br>ハンドメイドから広がったあなたの夢が<br class="pc-only">実現に向けて一歩歩き始める後押しとなれれば、こんなに幸せなことはありません。</p>
			</div>
		</div>
		<div class="executive" style="max-width: 100%; width: fit-content; overflow: hidden;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/greeting-portrait.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/greeting-portrait.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/greeting-portrait@2x.png 2x" width="569" height="416" onmousedown="return false" onselectstart="return false" oncontextmenu="return false" alt="ハンドメイドの仕事塾 代表 マツドアケミ" style="display: block;" loading="lazy">
			<a href="#profile" class="has-arrow" role="button">プロフィールを見る</a>
			<a href="/terms/" class="has-arrow" role="button">代表挨拶</a>
		</div>
	</section>
</div>
<div class="has-background beige" style="background-color: #F6F3EE; z-index: 10;">
	<div class="inner has-background white" style="background-color: #fff; border-radius: 999px 999px 0 0;">
		<section id="about" style="position: relative;">
			<div class="animation fade-in"><img class="illust a" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/present.png" width="561" height="544" loading="lazy"></div>
			<div class="animation fade-in" style="animation-delay: 0.5s;"><img class="illust b" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/ribbon.png" width="537" height="360" loading="lazy" style="animation-delay: -1s;"></div>
			<div class="animation fade-in" style="animation-delay: 1s;"><img class="illust c" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/bag.png" width="522" height="540" loading="lazy" style="animation-delay: -1.5s;"></div>
			<div class="animation fade-in" style="animation-delay: 1.5s;"><img class="illust d" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/hat.png" width="415" height="415" loading="lazy" style="animation-delay: -500ms;"></div>
			<div class="animation fade-in" style="animation-delay: 2s;"><img class="illust e" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/poach.png" width="363" height="338" loading="lazy"></div>
			<h2 class="dual-heading" data-english="About">ハンドメイドの仕事塾<span class="sup"><span class="r-mark">&reg;</span></span><br class="mobile-only">について</h2>
			<div class="content" style="line-height: 2;">
				<p style="color: #EA4086; font-weight: 600;">ハンドメイドを仕事にするために必要な<br class="pc-only">「作り方」「売り方」「お教室開業」のスキルが学べる、<br class="pc-only">ハンドメイドに特化した大人の女性のための総合スクールです。</p>
				<p style="margin-top: 1.5em">技術を習得しただけ、作れるだけでは<br><b>仕事としての収入を得るところまで繋がらない</b>というお悩みを解決するために<br>ハンドメイドという小さなビジネスのための<b>ブランディングからSNSマーケティングまでを網羅。</b></p>
				<ul class="point" style="position: relative; padding: 0; text-align: center; font-size: 0.875rem; font-weight: 600; line-height: 1.75; z-index: 30;">
					<li>ハンドメイド<br>ならではの販路</li>
					<li>利益につながる<br>価格設定</li>
					<li>売上を<br>上げるために<br>必要な商品構成</li>
					<li><span style="margin: 0.5em -0.5em 0 0">お教室の集客、<br>収益の上げ方、<br>広げ方</span></li>
				</ul>
				<p>今現在のあなたのスキルに合わせて必要な情報・ノウハウを<br class="pc-only"><b>日本国内だけでなく海外在住の方まで、オンラインで習得していただけます。</b></p>
			</div>
			<hr>
			<h2 class="dual-heading" data-english="Course">組み合わせも可能な３つのコース<br>あなたはどこから<br class="mobile-only">スタートしますか？</h2>
			<ul class="course">
				<li class="animation flipRight" style="background-color: #FFDD2D;">
					<h3>
						<span class="icon mobile-only">
						<svg width="23" height="13" viewBox="0 0 23 13">
							<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/ribbon.svg#icon_ribbon" fill="none" stroke="#9A7A74"></use>
						</svg>
					</span>作り方を学ぶ</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/handmade.png" width="260" height="241">
					<p>刺繍、編み物、カルトナージュetc...<br>さまざまなジャンルからお好きなハンドメイドをいくつでもお選びいただき、上手に作れるようになるヒントやコツを動画・オンラインで無料で学んでいただけます。ご利用の際にはご登録(無料)が必要です。</p>
					<a href="<?php echo( home_url() ) ?>/handmade-tutorials/" class="has-arrow" role="button">詳しく知る</a>
				</li>
				<li class="animation flipRight" style="background-color: #34D2DC; animation-delay: 500ms">
					<h3>
						<span class="icon mobile-only">
							<svg width="17" height="20" viewBox="0 0 17 20">
								<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/present.svg#icon_present" fill="none" stroke="#9A7A74"></use>
							</svg>
						</span>売り方を学ぶ</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/present-for-you.png" width="260" height="241">
					<p>ハンドメイド販売未経験者さんから販売しているけれど「売れない…」のお悩みをお持ちのあなたに、今の状態に合わせて必要なスキルをハンドメイドの仕事塾<span class="r-mark">&reg;</span>︎認定のハンドメイドコンサルタントから習得していただけます。</p>
					<a href="<?php echo( home_url() ) ?>/learn-to-sell/" class="has-arrow" role="button">詳しく知る</a>
				</li>
				<li class="animation flipRight" style="background-color: #FF9EC7; animation-delay: 1s">
					<h3>
						<span class="icon mobile-only">
							<svg width="21" height="16" viewBox="0 0 21 16">
								<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/school.svg#icon_school" fill="none" stroke="#9A7A74"></use>
							</svg>
						</span>お教室開業を学ぶ</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/about/talk.png" width="260" height="241">
					<p>「できた！」の喜びを伝えたい！<br>そんなあなたにオススメなのがハンドメイドのお教室・サロン開業です。オリジナル講座の作り方、お教室の集客から運営、またオンライン化・自動化する方法を学んでいただけます。</p>
					<a href="<?php echo( home_url() ) ?>/learn-start-business/" class="has-arrow" role="button">詳しく知る</a>
				</li>
			</ul>
		</section>
	</div>
	<section id="voice" class="voice" style="position: relative">
		<h2 class="dual-heading" data-english="Voice" style="position: relative; color: #EA4086; font-size: 1.5rem; z-index: 30;">受講者の声</h2>
		<div id="leaners-slider" class="content splide" aria-label="受講者の声一覧">
			<div class="splide__track">
				<div class="learners splide__list">
					<div class="learner splide__slide">
						<a href="https://youtu.be/nKhd6CHyzb8" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuki-hirota.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuki-hirota.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuki-hirota@2x.jpg 2x" width="190" height="190" alt="廣田友紀さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/nKhd6CHyzb8" role="button" data-lity>動画を視聴する</a>
						<span>ドール服講師</span>
						<h3>廣田友紀さん</h3>
						<p>ドールドレスに特化したオンライン講座を作り、現在は自動化し、平均月商100万円越えを達成。</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/6LbxPD4Yiq0" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/kyoko-hashimoto.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/kyoko-hashimoto.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/kyoko-hashimoto@2x.jpg 2x" width="190" height="190" alt="橋本今日子さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/6LbxPD4Yiq0" role="button" data-lity>動画を視聴する</a>
						<span>パーチメントクラフト<br>作家・講師</span>
						<h3>橋本今日子さん</h3>
						<p>オンライン講座で最高月商100万円越え。作品作りの時間ができ、さらに10万円越えで作品販売も！</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/O-xgOfRLP3M" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/mayumi-tanimoto.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/mayumi-tanimoto.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/mayumi-tanimoto@2x.jpg 2x" width="190" height="190" alt="谷本真由美さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/O-xgOfRLP3M" role="button" data-lity>動画を視聴する</a>
						<span>カルトナージュ講師</span>
						<h3>谷本真由美さん</h3>
						<p>単発講座ばかり開催していましたが、現在は認定講師も育成。カルトナージュの可能性が広がっています。</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/BUjU2GM-B0Y" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuri-maeda.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuri-maeda.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/yuri-maeda@2x.jpg 2x" width="190" height="190" alt="前田ユリさん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/BUjU2GM-B0Y" role="button" data-lity>動画を視聴する</a>
						<span>作家・講師・<br>ショップオーナー</span>
						<h3>前田ユリさん</h3>
						<p>ハンドメイドのお仕事を一生のお仕事にしたいと思い、DREAMへ。作家と講師、お店も経営。</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/NFUqujQGIrs" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/teruyo-kanesaka.jpg?ver=2.0" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/teruyo-kanesaka.jpg?ver=2.0 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/teruyo-kanesaka@2x.jpg?ver=2.0 2x" width="190" height="190" alt="金坂てるよさん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/NFUqujQGIrs" role="button" data-lity>動画を視聴する</a>
						<span>がま口愛好家・講師</span>
						<h3>金坂てるよさん</h3>
						<p>世界にがま口を広げたい！生徒さんの作品も海外販売できるように積極的に海外での活動も。</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/RnkP9VEZcNY" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chigusa-inoue.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chigusa-inoue.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chigusa-inoue@2x.jpg 2x" width="190" height="190" alt="井上ちぐささん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/RnkP9VEZcNY" role="button" data-lity>動画を視聴する</a>
						<span>日本リボン刺しゅう協会代表理事</span>
						<h3>井上ちぐささん</h3>
						<p>キャンセル待ちの生徒さんにも参加してもらいたい！とオンライン化。最高月商2700万円に！</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/0aptMlGlEt8" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/hiroko-moriyama.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/hiroko-moriyama.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/hiroko-moriyama@2x.jpg 2x" width="190" height="190" alt="森山ひろ子さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/0aptMlGlEt8" role="button" data-lity>動画を視聴する</a>
						<span>つまみ細工アーティスト＆講師</span>
						<h3>森山ひろ子さん</h3>
						<p>講師経験ゼロからの講師デビュー。動画を使った集客と講座の配信で月商100万円を達成。</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/xygzC2zC5W4" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/michiko-yoshizawa.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/michiko-yoshizawa.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/michiko-yoshizawa@2x.jpg 2x" width="190" height="190" alt="吉澤美智子さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/xygzC2zC5W4" role="button" data-lity>動画を視聴する</a>
						<span>フラワーデザイナー</span>
						<h3>吉澤美智子さん</h3>
						<p>お花とフレームを合わせたオリジナル講座を作り、8万円の講座でも生徒さんに喜んで参加頂けるように！</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://youtu.be/6BN4yhnhGeI" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/miyuki-kato.jpg?ver=2.0" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/miyuki-kato.jpg?ver=2.0 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/miyuki-kato@2x.jpg?ver=2.0 2x" width="190" height="190" alt="加藤みゆきさん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://youtu.be/6BN4yhnhGeI" role="button" data-lity>動画を視聴する</a>
						<span>クレイフラワー講師</span>
						<h3>加藤みゆきさん</h3>
						<p>協会の枠にとらわれない自由で個性あるクレイフラワーがどんどん広がっています！</p>
					</div>
					<div class="learner splide__slide">
						<a href="https://www.youtube.com/watch?v=5hXglnVhOg8" class="icon" data-lity>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chikako-aoyama.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chikako-aoyama.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/voice/chikako-aoyama@2x.jpg 2x" width="190" height="190" alt="青山智香子さん" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
						</a>
						<a href="https://www.youtube.com/watch?v=5hXglnVhOg8" role="button" data-lity>動画を視聴する</a>
						<span>アクセサリー作家・認定講師</span>
						<h3>青山智香子さん</h3>
						<p>作ることも楽しみながら、同じ作家活動をしている人を応援したいと認定コンサルタントに。</p>
					</div>
				</div>
			</div>
		</div>
		<script>
			const larnerSplideTarget = '#leaners-slider';
			const larnerSplideOptions = {
				mediaQuery: 'max',
				type: 'loop',
				fixedWidth: '238px',
				padding: 'calc((100% - (100% / 238)) / 2)',
				autoHeight: true,
				arrows: true,
				pagination: false,
				breakpoints: {
					767: {
						fixedWidth: '202px',
						padding: 'calc((100% - 202px) / 2)',
						focus  : 'center',
					},
				}
			};

			window.addEventListener('load', function() {
				const larnerSplide = new Splide( larnerSplideTarget, larnerSplideOptions ).mount();
			});
		</script>
	</section>
</div>
<section class="features container" style="position: relative; background-color: #FFECF4; overflow: hidden; z-index: 10;">
	<h2 class="ribbon-title pink">ハンドメイドの仕事塾<span class="sup"><span class="r-mark">&reg;</span></span>︎の<br class="mobile-only">３つの特徴</h2>
	<ul class="inner">
		<li class="animation flipRight">
			<span class="number">1</span>
			<div class="thumbnail">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/accessory.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/accessory.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/accessory.jpg 2x" width="308" height="241" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
			</div>
			<h3>幅広いハンドメイドに対応</h3>
			<p>「作り方」コースにはニッチなジャンルのハンドメイドのコースも多数あります。もうすでにハンドメイドはし尽くした方にも新しい出会いがあることでしょう。お教室開業、販売方法についてもさまざまなハンドメイドのジャンルに対応しています。</p>
		</li>
		<li class="animation flipRight" style="animation-delay: 500ms">
			<span class="number">2</span>
			<div class="thumbnail">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/data.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/data.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/data.jpg 2x" width="308" height="241" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
			</div>
			<h3>技術だけでなく<br>マーケティングも学べます！</h3>
			<p>作れるだけ、資格だけでは利益を生むことができません。ハンドメイドの仕事塾<span class="r-mark">&reg;</span>︎ではお客様の手に届けられるスキルもしっかりと習得することができます。</p>
		</li>
		<li class="animation flipRight" style="animation-delay: 1s">
			<span class="number">3</span>
			<div class="thumbnail">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/coaching.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/coaching.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/features/coaching.jpg 2x" width="308" height="241" onmousedown="return false" onselectstart="return false" oncontextmenu="return false">
			</div>
			<h3>雑貨・ハンドメイドビジネスの著書10万部の著者が代表です</h3>
			<p>雑貨・ハンドメイド業界で長年活躍する著者で経営者のマツドアケミが代表を務めています。実はハンドメイドをしない代表ですがハンドメイドに特化させたマーケティングでたくさんの作家・講師の夢の実現をサポートしてきました！</p>
		</li>
	</ul>
</section>
<section class="recommend">
	<div class="animation">
		<h2>
			<picture>
				<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/title.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/title@2x.png 2x" width="337" height="206">
				<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/title_pc.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/title_pc@2x.png 2x"  width="420" height="206">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/title_pc@2x.png" alt="このような方におすすめです" loading="lazy">
			</picture>
		</h2>
	</div>
	<div class="card"  data-course="handmade-tutorials" style="background: #FFF7CD">
		<ul style="background: #FFDD2D;">
			<li>いろんなハンドメイドを楽しみたい</li>
			<li>作り方のコツやヒントが知りたい</li>
			<li>もっと技術を高めたい</li>
			<li>新しいハンドメイドに出会いたい</li>
			<li>「わーかわいい！」と<br class="pc-only">褒められるような作品作りがしたい</li>
			<li>気軽にハンドメイドを始めてみたい</li>
		</ul>
		<div class="img-container animation">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_1.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_1.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_1@2x.png 2x" alt="" width="189" height="248" style="-webkit-animation-delay: 500ms; animation-delay: 500ms;">
		</div>
		<h3><div>作り方を学ぶ</div>がおすすめ</h3>
		<a href="<?php echo( home_url() ) ?>/handmade-tutorials/" class="has-arrow" role="button" style="background: #FFDD2D;">詳しく知る</a>
	</div>
	<div class="card" data-course="learn-to-sell" style="background: #D6EFEE">
		<ul style="background: #34D2DC;">
			<li>ハンドメイド作家になったけれど売上に繋がらない</li>
			<li>自信を持って販売できるブランド作りがしたい</li>
			<li>売り方を学びたい</li>
			<li>minne、Creemaなどの<br class="pc-only">ハンドメイドマーケットで販売したい</li>
			<li>Instagramを活用して売れる作家になりたい</li>
			<li>写真のスキルを高めたい</li>
		</ul>
		<div class="img-container animation">
			<img data-img="lady" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_2.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_2.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_2@2x.png 2x" alt="" width="310" height="204">
			<img data-img="balloon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/balloon.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/balloon.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/balloon@2x.png 2x" alt="" width="154" height="152">
		</div>
		<div class="pc-only img-container animation" style="-webkit-animation-delay: 1s; animation-delay: 1s;">
			<div></div>
		</div>
		<h3><div>売り方を学ぶ</div>がおすすめ</h3>
		<a href="<?php echo( home_url() ) ?>/learn-to-sell/" class="has-arrow" role="button" style="background: #34D2DC">詳しく知る</a>
	</div>
	<div class="card" data-course="learn-start-business" style="background: #FFECF4">
		<ul style="background: #FF9EC7;">
			<li>安価な講座を売り続けていて、<br class="pc-only">いつまでも収益があげられない</li>
			<li>お教室をオンライン化したい</li>
			<li>時間もお金も豊かになれるお教室を作りたい</li>
			<li>動画やライブを使った集客を覚えたい</li>
			<li>自分らしいお教室を作って世界に広げていきたい</li>
			<li>自分と同じように頑張っている<br class="pc-only">ハンドメイド作家さんを応援したい！</li>
		</ul>
		<div class="img-container animation" style="-webkit-animation-delay: 1s; animation-delay: 1s;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_3.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_3.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/recommend/lady_3@2x.png 2x" alt="" width="311" height="264" style="-webkit-animation-delay: 750ms; animation-delay: 750ms;">
		</div>
		<div class="pc-only img-container animation">
			<div style="-webkit-animation-delay: 1.5s; animation-delay: 1.5s;"></div>
		</div>
		<h3><div>お教室開業を学ぶ</div>がおすすめ</h3>
		<a href="<?php echo( home_url() ) ?>/learn-start-business/" class="has-arrow" role="button" style="background: #FF9EC7">詳しく知る</a>
	</div>
</section>
<section id="profile">
	<div class="inner">
		<div class="content-header">
			<h2 class="dual-heading" data-english="Profile" style="line-height: 1">ハンドメイドの仕事塾&reg;</span> 代表<br><span class="is-pink">マツドアケミ</span></h2>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/profile.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/profile.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/profile@2x.png 2x" width="210" height="253" onmousedown="return false" onselectstart="return false" oncontextmenu="return false" style="display: block; margin: 0 auto;">
			<ul class="sns">
				<li><a href="https://www.youtube.com/@tokyohuit">YOUTUBE</a></li>
				<li><a href="https://www.instagram.com/matsudoakemi">Instagram</a></li>
				<li><a href="https://twitter.com/zakkanow">X</a></li>
				<li><a href="https://www.facebook.com/akemi.matsudo">facebook</a></li>
				<li><a href="https://ameblo.jp/zakkawork/">アメブロ</a></li>
				<li><a href="https://stand.fm/channels/61f4b159299c4d5005a29469">ラジオ</a></li>
			</ul>
		</div>
		<div class="content">
			<p>外資系企業秘書から将来雑貨屋さん開業を目指し<br class="pc-only">キッチン用品メーカーの雑貨屋さんに転身。<br>販売スタッフ、店長、バイヤー、雑貨屋さん開業支援業務を経て<br class="pc-only">1999年12月OL時代に著書「雑貨屋さんになりたいですか」(主婦の友社)を出版。<br class="pc-only">出版を期にフリーランスとして起業。</p>
			<p>2003年1月21日有限会社Blooming設立。<br>ショップのプロデュース、TV番組の準レギュラー、<br class="pc-only">雑誌・新聞の連載を複数持つも、やりたいことが見えず苦しい40代を過ごす。</p>
			<p>お店のプロデュースで出会ったハンドメイド作家さんの活動を見て、<br class="pc-only">「これからは大好きなハンドメイドを仕事として自立する女性が増えるだろう」と思い、<br class="pc-only">2008年ハンドメイドの仕事塾<span class="r-mark">&reg;</span>の前身、雑貨の仕事塾<span class="r-mark">&reg;</span>を立ち上げる。</p>
			<p>現在はハンドメイド販売の認定講師育成、<br class="pc-only">お教室に特化した動画を使ったマーケティング塾THE DREAMを主宰。</p>
			<p>また起業し壁にぶつかっている女性社長、起業家さんを対象とした<br class="pc-only">ビジネススクールで女性の自己実現を応援しています。</p>
			<div class="description">
				<p>有限会社Blooming代表取締役<br>千葉県八千代市出身<br>AB型・水瓶座・辰年・動物占いトラ<br>月に１度は旅をしながらYouTube動画を配信。<br>ジンベイザメと泳ぐのが夢</p>
			</div>
		</div>
	</div>
	<div id="books-slider" class="splide" aria-label="著書一覧">
		<div class="splide__track">
			<div class="splide__list">
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/1.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/1.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/1@2x.jpg 2x" width="88" height="128" alt="経験ゼロから長く続ける 起業のステージアップ術" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/2.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/2.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/2@2x.jpg 2x" width="116" height="164" alt="高くても売れる！ハンドメイド作家ブランド作りの教科書" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/3.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/3.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/3@2x.jpg 2x" width="124" height="136" alt="ハンドメイド雑貨のお仕事BOOK「好き」を「仕事」にする！" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/4.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/4.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/4@2x.jpg 2x" width="117" height="128" alt="手作りお菓子とパンの売り方BOOK" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/5.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/5.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/5@2x.jpg 2x" width="115" height="165" alt="雑貨屋さんになりたい ― 小資金で始める＆続けるショップ経営のABC" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/6.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/6.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/6@2x.jpg 2x" width="115" height="165" alt="成功する雑貨屋さん ショップ経営に欠かせないこと―27歳で始めた雑貨ビジネスを4年で年商1億円にしたネットショップ&小さな店の経営術" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/7.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/7.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/7@2x.jpg 2x" width="116" height="165" alt="雑貨屋さんで ホームページで 個展で 「わたしの手作り雑貨」を売るためのポイント80" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/8.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/8.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/8@2x.jpg 2x" width="110" height="165" alt="可愛いモノ" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/9.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/9.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/9@2x.jpg 2x" width="91" height="128" alt="高くても売れる! ハンドメイド作家 ブランド作りの教科書" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
				<div class="splide__slide"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/10.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/10.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/books/10@2x.jpg 2x" width="90" height="128" alt="オンラインで稼ぐ! ハンドメイド教室の作り方" onmousedown="return false" onselectstart="return false" oncontextmenu="return false"></div>
			</div>
		</div>
	</div>
	<script>
		const booksSplideTarget = '#books-slider';
		const booksSplideOptions = {
			mediaQuery: 'min',
			type: 'loop',
			autoWidth: true,
			autoHeight: true,
			gap: '2rem',
			arrows: false,
			drag: 'free',
			flickPower: 300,
			pagination: false,
			autoScroll: {
				speed: 0.5,
				pauseOnHover: false,
				pauseOnFocus: false,
			},
		};
		
		window.addEventListener('load', function() {
			const booksSplide = new Splide( booksSplideTarget, booksSplideOptions ).mount( window.splide.Extensions );
		});
	</script>
</section>
<section id="contact" class="container" style="background-color: #FFECF4;">
	<div class="inner" style="background-color: #fff; border-radius: 15px">
		<h2 class="dual-heading" data-english="Contact">お問い合わせ</h2>
		<p>お問い合わせは、以下のフォームよりお願い致します。<br>内容を確認後、追って事務局より３営業日以内にご返信させていただきます。<br>なお、弊社の営業時間は月～金(10時～17時)で対応しております。</p>
		<?php echo do_shortcode('[contact-form-7 id="57" title="お問い合わせ"]'); ?>
		<?php //echo do_shortcode('[contact-form-7 id="106" title="お問い合わせ"]'); ?>
	</div>
</section>
<?php get_footer( 'nosidebar' ); ?>
