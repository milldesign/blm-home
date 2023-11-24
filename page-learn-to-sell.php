<?php
/**
 * 売り方を学ぶ
 */

	if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	if ( maintenance_mode_enable() ) {
		echo callback_maintenance_html();
		get_footer();
		return;
	}

	$post_type = 'instructors';
	$group_key = 'instructors';

	// カスタム投稿タイプ「認定講師」のクエリ作成
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => -1,
		'post_status' => 'ID',
		'order' => 'ASC',
	);
	$query = new WP_Query( $args );
?>
<section class="container">
	<header class="container section-header rounded" style="background-color: #D6EFEE;">
		<h1 class="page-title_ribbon" style="background: #34D2DC;">売り方を学ぶ</h1>
		<div class="illust-container">
			<div class="balloon-container">
				<p class="balloon" style="color: #00748D; -webkit-animation-delay: 0s, 750ms; animation-delay: 0s, 750ms;">マツドアケミ認定講師から<br>「マーケティングスキル」を<br>学びましょう！</p>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/lady_l.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/lady_s.png 213w, <?php echo get_stylesheet_directory_uri(); ?>assets/img/learn-to-sell/lady_m.png 528w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/lady_l.png 1056w" data-filename="lady" style="-webkit-animation-delay: 500ms, 1.5s; animation-delay: 500ms, 1.5s;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/present_l.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/present_s.png 106w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/present_m.png 242w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-to-sell/present_l.png 484w" data-filename="present" style="-webkit-animation-delay: 500ms, 1.5s; animation-delay: 500ms, 1.5s;">
		</div>
		<div class="description">
			<p>心を込めて一生懸命作ったハンドメイド作品。<br>可愛く出来上がったら嬉しいですよね。<br><br>期待を込めて可愛い作品を販売したら<br class="mobile-only">売れなかった…。<br>そんな悲しい経験をした<br class="mobile-only">ハンドメイド作家さんに<br class="mobile-only">足りないのは<br class="pc-only">技術でも作品力でもありません。<br>「売り方」がわからないだけなのです。<br><br>お客様が笑顔で購入してくれる。<br>ファンになって何度もリピートしてくれる。<br>そんな人気ハンドメイド作家さんになるための<br>マーケティングスキルを学んでみませんか？</p>
		</div>
	</header>
	<section class="about" style="padding-bottom: 1.25em">
		<h2>あなたの「今」に合わせて<br>必要な<span style="color: #00748D">マーケティングスキル</span>が学べます。</h2>
		<p class="mobile-align-left">販売経験０の人と販売経験があるけれど売れない人では<br class="pc-only">必要なマーケティングスキル、マインドセットが違います。<br class="pc-only">そこでハンドメイドの仕事塾®︎では、あなたの「今」の状態に合わせて<br class="pc-only">必要なマーケティングスキルを習得するために２つの講座をご用意しました。</p>
		<div class="container courses">
			<div class="start">
				<p class="for-you" style="color: #34D2DC">ハンドメイド販売未経験の<br>あなたへ</p>
				<div class="card">
					<h3 style="background-color: #34D2DC;">ハンドメイドの仕事塾®︎<span>スタート講座</span></h3>
					<div class="inner">
						<h4><span style="color: #34D2DC">★</span>このような方にオススメです！</h4>
						<ul class="check-list">
							<li>いつかはハンドメイド作家を自分の仕事にしたい</li>
							<li>お友達に「売ってみたら」と言われたことがある</li>
							<li>販売してみたいけれど何から始めたらいいのかわからない</li>
							<li>準備物も価格の付け方もわからない</li>
							<li>まずはハンドメイドのマーケットサイトで販売してみたい</li>
						</ul>
						<a href="#start-course" class="has-arrow" role="button">詳細を見る</a>
					</div>
				</div>
			</div>
			<div class="level-up">
				<p class="for-you" style="color: #FF9EC7">ハンドメイド販売経験者で<br>作品作り・活動に<br>ブレを感じるあなたへ</p>
				<div class="card">
					<h3 style="background-color: #FF9EC7;">ハンドメイドの仕事塾®︎<span>レベルアップ講座</span></h3>
					<div class="inner">
						<h4><span style="color: #FF9EC7">★</span>このような方にオススメです！</h4>
						<ul class="check-list">
							<li>好きなものだけ作っているけれど売れない</li>
							<li>自分自身、作品作りやコンセプトにブレがある</li>
							<li>購入してくれるお客様が想像できない</li>
							<li>自分の売り方が合っているのか不安を感じている</li>
							<li>ファンができない</li>
						</ul>
						<a href="#level-up-course" class="has-arrow" role="button">詳細を見る</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="start-course" class="course">
		<header class="container section-header" style="background-color: #c1f1f5;">
			<h2>ハンドメイドの仕事塾®︎<span>スタート講座</span></h2>
			<p class="description">この講座は「ハンドメイド作品がある」「販売未経験」の方向けに、<br class="pc-only">まずはハンドメイドのマーケットサイトで販売するために<br class="pc-only">必要なスキルを習得する講座になります。</p>
			<div class="balloon" style="color: #00748D">
				<span>ハンドメイド販売<br>未経験のあなたへ</span>
			</div>
		</header>
		<div class="container inner">
			<h3 class="capsule-title">この講座で学べること</h3>
			<ul class="course-menu">
				<li>ハンドメイド品を販売する前に必要な準備物（ブランド名・タグ・値段の付け方など）</li>
				<li>ハンドメイドマーケットサイトの選び方</li>
				<li>ハンドメイドマーケットサイトの登録方法</li>
				<li>ハンドメイドマーケットサイトで<br>販売するための写真の撮り方</li>
				<li>いきなり「売れちゃった！」でも慌てない！<br>発送時に必要なもの</li>
				<li>ハンドメイドマーケットサイトで次の作品が<br>売れるためにするべきマーケットサイト攻略法</li>
			</ul>
			<h3 class="capsule-title">この講座の特徴</h3>
			<p style="letter-spacing: -0.04em">「まずは売ってみる！」を目標として、SNSをやっていなくても<br class="pc-only">販売が経験できるハンドメイドマーケットでの販売スキルを習得します。<br class="pc-only">やるべきことに集中するため、SNSの活用方法などは講座には含まれていません。<br><small style="color: #00748D; font-size: 1em; font-weight: normal;">＊次のステップのためにインスタグラムの基礎的な使い方について講座があります。</small></p>
			<h3 class="capsule-title">講師について</h3>
			<p>スタート講座を担当するのはハンドメイドの仕事塾®︎代表<br class="pc-only">マツドアケミが認定したハンドメイド販売の講師たちです。<br class="pc-only">認定講師の中からあなたに合った講師をお選びください。<br class="pc-only">ハンドメイドの仕事塾®があなたの作家活動を応援します！</p>
			<a href="#instructors" class="has-arrow instructors" role="button">認定講師一覧を見る</a>
			<h3 class="capsule-title">お申し込みの流れ</h3>
			<ol class="flow">
				<li>
					<h4>講師を選択</h4>
					<p>個別の面談を受付中の<mark>ハンドメイドの仕事塾®︎認定講師</mark>の中から<br class="pc-only">あなたの活動にあった講師を選択。</p>
				</li>
				<li>
					<h4>講師に連絡</h4>
					<p>講師の個別ページから講師のLINEに登録。<br class="pc-only">個別相談、もしくは体験セミナーのお申し込みをお願いします。<br><mark>＊講師によって、時期や初回のやり取り方法が違います。<br class="pc-only">まずは興味のある講師のLINEにご登録をお願いします。</mark></p>
				</li>
				<li>
					<h4>講座の内容を確認</h4>
					<p>あなたのお悩み解決に講師がお役に立てると<br class="pc-only">思った場合にのみ講座のご案内をさせていただきます。<br><mark>＊無理矢理の営業は致しませんのでご安心ください。</mark></p>
				</li>
				<li>
					<h4>入金のお手続き</h4>
					<p>お申し込みフォームにご記入いただき<br>その後、ご入金の手続きをお願いします。</p>
				</li>
				<li>
					<h4>ご受講開始</h4>
					<p>ご入金確認後、弊社事務局から会員サイトの視聴権限をお渡しします。<br>会員サイトに登録後、講座のご受講スタート！</p>
				</li>
			</ol>
		</div>
	</section>
	<section id="level-up-course" class="course">
		<header class="container section-header" style="background-color: #FFECF4;">
			<h2>ハンドメイドの仕事塾®︎<span>レベルアップ講座</span></h2>
			<p class="description">この講座はハンドメイド経験者だけれど思うように売上が立たない、<br class="pc-only">作品作りやSNSの発信に自信が持てないという方のために<br class="pc-only">迷わず活動ができるようになるために必要なあなたのブランドのガイドラインを作ります。<br class="pc-only">ハンドメイド作家として自信を持って、ブランド力を上げ、ファンを作り、売上を<br class="pc-only">上げていくために必要な土台を作る講座です。</p>
			<div class="balloon" style="color: #EA4086;"><span>ハンドメイド販売経験者で<br>作品作り・活動に<br>ブレを感じるあなたへ</span></div>
		</header>
		<div class="container inner">
			<p style="letter-spacing: -0.04em">まずはあなたの現状を見直しし、ブレないブランドのガイドラインを作り、<br class="pc-only">それに反映された作品作り、売上の上がる商品構成を決め、<br class="pc-only">インスタ発信で現状の倍の売り上げを目指していきましょう。</p>
			<h3 class="capsule-title">この講座で学べること</h3>
			<ul class="course-menu">
				<li>お客様が共感するブランドコンセプト作り</li>
				<li>理想のお客様を設定し売れる価格帯、<br>商品構成を計画</li>
				<li>お客様があなたを応援したくなる<br>ストーリーメイキング</li>
				<li>インスタグラムの基礎的な使い方を覚え、<br>インスタグラムからの販売へ<br>繋げられるような動線づくり</li>
				<li>インスタグラムで思わず「欲しい！」と<br>心が動く写真の撮り方を習得</li>
			</ul>
			<h3 class="capsule-title">この講座の特徴</h3>
			<p>売るためのテクニックを実践する前に、「あなた」といえば「あの作家さん！」と<br class="pc-only">覚えてもらうためのブレない土台作りをしていきます。<br>ブランディングの基礎となるコンセプト作りからインスタ販売までを習得していただけます。</p>
			<h3 class="capsule-title">講師について</h3>
			<p>レベルアップ講座を担当するのはハンドメイドの仕事塾®︎代表<br class="pc-only">マツドアケミが認定したハンドメイド販売の講師たちです。<br class="pc-only">認定講師の中からあなたに合った講師をお選びください。<br class="pc-only">ハンドメイドの仕事塾®︎があなたの作家活動を応援します！</p>
			<a href="#instructors" class="has-arrow instructors" role="button">認定講師一覧を見る</a>
			<h3 class="capsule-title">お申し込みの流れ</h3>
			<ol class="flow">
				<li>
					<h4>講師を選択</h4>
					個別の面談を受付中の<span style="color: #EA4086">ハンドメイドの仕事塾®︎認定講師</span>の中から<br>あなたの活動にあった講師を選択。
				</li>
				<li>
					<h4>講師に連絡</h4>
					<p>講師の個別ページから講師のLINEに登録。<br class="pc-only">個別相談、もしくは体験セミナーのお申し込みをお願いします。<br><mark>＊講師によって、時期や初回のやり取り方法が違います。<br class="pc-only">まずは興味のある講師のLINEにご登録をお願いします。</mark></p>
				</li>
				<li>
					<h4>講座の内容を確認</h4>
					<p>あなたのお悩み解決に講師がお役に立てると<br class="pc-only">思った場合にのみ講座のご案内をさせていただきます。<br><mark>＊無理矢理の営業は致しませんのでご安心ください。</mark></p>
				</li>
				<li>
					<h4>入金のお手続き</h4>
					<p>お申し込みフォームにご記入いただき<br>その後、ご入金の手続きをお願いします。</p>
				</li>
				<li>
					<h4>ご受講開始</h4>
					ご入金確認後、弊社事務局から会員サイトの視聴権限をお渡しします。<br>会員サイトに登録後、講座のご受講スタート！
				</li>
			</ol>
		</div>
	</section>
	<section id="instructors" style="position: relative; background-color: #F6F3EE; z-index: 10;">
		<h2 class="ribbon-title brown">認定講師一覧</h2>
		<p class="pc-only" style="margin-top: 1.5em; text-align: center; font-weight: 700; letter-spacing: -0.03em; line-height: 1">＊認定講師になりたい！という方は<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=4">こちら</a></p>
		<ul class="container">
		<?php if ( $query -> have_posts() ): ?>
			<?php
				while ( $query -> have_posts() ) {
					$query->the_post();
		
					// カスタムフィールドグループを取得
					$group_data = SCF::get( $group_key, get_the_ID() );
					if ( $group_data ) {
						foreach ( $group_data as $field ) {
			?>
			<li>
				<?php 
					if( $field['banner'] ) {
						echo wp_get_attachment_image( $field['banner'], array( 200, 200 ), false, array( 'alt' => $field['job-title'], 'loading' => 'lazy' ) );
					}
				?>
				<hgroup>
					<p><?php echo $field['job-title']; ?></p>
					<h3><?php echo $field['name']; ?></h3>
				</hgroup>
				<div class="course"><?php if ( $field['start-up'] ): ?><span class="start">スタート講座</span><?php endif; ?><?php if ( $field['level-up'] ): ?><span class="level-up">レベルアップ講座</span><?php endif; ?></div>
				<p><?php echo( $field['description'] ); ?></p>
				<?php if ( $field['recruit'] ): ?>
					<span class="recruit"></span>
				<?php endif; ?>
				<a class="has-arrow" href="<?php the_permalink() ?>" role="button">詳細を見る</a>
			</li>
		<?php
						}
					}
				}
				wp_reset_postdata();
		?>
		<?php else: ?>
			<?php // 認定講師の登録が1件も登録されていない場合の処理 ?>
		<?php endif; ?>
		</ul>
	</section>
	<section class="qa" style="background-color: #D6EFEE">
		<hgroup>
			<p>売り方を学ぶコース</p>
			<h2>Q&A</h2>
		</hgroup>
		<dl>
			<dt>スタート講座もレベルアップ講座も受講することは可能ですか？<span></span></dt>
			<dd>はい、可能です。<br>両方の講座を提供している認定講師をお選びいただき、お勉強をスタートさせてください。</dd>
		</dl>
		<dl>
			<dt>スマホもパソコンも苦手ですが、スタート講座でスマホやパソコンの使い方を教えてくれますか？<span></span></dt>
			<dd>いいえ。<br>本講座はスマホやパソコンの使い方をお伝えする講座ではございません。<br>ただし、認定講師によってはスマホやパソコンが得意な方がいますので、わからないところは<br class="pc-only">聞いていただきながら学びを進めることができます。</dd>
		</dl>
		<dl>
			<dt>どの先生を選んでいいかわかりません。<span></span></dt>
			<dd>迷われる場合にはご自身の作品ジャンルに近い先生などをおすすめ致します。<br>例)アクセサリー、布小物、クレイなど</dd>
		</dl>
		<dl>
			<dt>講座を受講後、自分の講座で「売り方」のスキルを販売してもいいですか？<span></span></dt>
			<dd><p>いいえ。<br>もしも本講座の内容を自分の講座に取り入れたいという方は必ず<br><a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=4">認定講師養成講座</a>をご受講ください。</p></dd>
		</dl>
		<?php include( STYLESHEETPATH . '/include/qa.php'); ?>
	</section>
</section>
<?php get_footer( 'nosidebar' ); ?>
