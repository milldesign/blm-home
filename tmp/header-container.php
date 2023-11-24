<?php //ヘッダーエリア
/**
* Cocoon WordPress Theme
* @author: yhira
* @link: https://wp-cocoon.com/
* @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
*/
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div id="header-container" class="header-container">
	<div id="header-container-in" class="header-container-in<?php echo get_additional_header_container_classes(); ?>">
		<header id="header" class="header<?php echo get_additional_header_classes(); ?>" itemscope itemtype="https://schema.org/WPHeader">
			<div id="header-in" class="header-in" itemscope itemtype="https://schema.org/WebSite">
<?php
	if (is_tagline_position_header_top()) {
		get_template_part('tmp/header-tagline');
	}

	do_action( 'wp_header_logo_before_open' );
	generate_the_site_logo_tag();
	do_action( 'wp_header_logo_after_open' );

	if (is_tagline_position_header_bottom()) {
		get_template_part('tmp/header-tagline');
	}
?>
				<?php get_template_part('tmp/navi'); ?>
				<button id="menu-toggle" aria-label="Menu" aria-controls="menu-container" aria-expanded="false">
					<span></span>
				</button>
				<section id="menu-container" aria-hidden="true">
					<div class="inner">
						<div class="heading">
							<a href="<?php echo( home_url() ) ?>">
								<picture style="display: block; text-align: center;">
									<source media="(max-width:768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white_text.svg 298w" sizes="76vw">
									<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white.svg 215w" sizes="215px">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white.svg" width="215" height="206" alt="ハンドメイドの仕事塾®">
								</picture>
							</a>
							<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/text_menu.png" width="270" height="100" alt="Menu"></h2>
						</div>
						<ul class="drawer-links">
							<li><a href="<?php echo( home_url() ) ?>/archives/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/balloon.svg" width="24" height="17">お知らせ</a></li>
							<li><a href="<?php echo( home_url() ) ?>/#about"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/home.svg" width="24" height="17">ハンドメイドの仕事塾®︎について</a></li>
							<li class="course">
								<div class="inner">
									<h3><a href="<?php echo( home_url() ) ?>/handmade-tutorials/" role="button" style="background: #FFDD2D">
										<span class="icon">
											<svg width="23" height="13" viewBox="0 0 23 13">
												<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/ribbon.svg#icon_ribbon" fill="none" stroke="#C98500"/>
											</svg>
										</span>作り方を学ぶ</a>
									</h3>
									<ul>
										<li><a href="<?php echo( home_url() ) ?>/handmade-tutorials/join">無料レッスン</a></li>
									</ul>
									<h3><a href="<?php echo( home_url() ) ?>/learn-to-sell/" role="button" style="background: #34D2DC">
										<span class="icon">
											<svg width="17" height="20" viewBox="0 0 17 20">
												<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/present.svg#icon_present" fill="none" stroke="#00748D"/>
											</svg>
										</span>売り方を学ぶ</a>
									</h3>
									<ul>
										<li><a href="<?php echo( home_url() ) ?>/learn-to-sell/#start-course">初心者さん向け講座</a></li>
										<li><a href="<?php echo( home_url() ) ?>/learn-to-sell/#level-up-course">販売経験者さん向け講座</a></li>
										<li><a href="<?php echo( home_url() ) ?>/learn-to-sell/#instructors">認定講師一覧</a></li>
									</ul>
									<h3><a href="<?php echo( home_url() ) ?>/learn-start-business/" role="button" style="background: #FF9EC7">
										<span class="icon">
											<svg width="21" height="16" viewBox="0 0 21 16">
												<use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/school.svg#icon_school" fill="none" stroke="#EA4086"/>
											</svg>
										</span>お教室開業を学ぶ</a>
									</h3>
									<ul>
										<li><a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=1">動画の作り方</a></li>
										<li><a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=2">講座の自動配信</a></li>
										<li><a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=3">動画&LIVE集客</a></li>
										<li><a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=4">「売り方」を教える</a></li>
									</ul>
								</div>
							</li>
							<li><a href="<?php echo( home_url() ) ?>/#voice"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/megaphone.svg" width="24" height="17">受講生の声</a></li>
							<li><a href="<?php echo( home_url() ) ?>/#profile"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/person.svg" width="24" height="17">代表マツドアケミについて</a></li>
							<li><a href="<?php echo( home_url() ) ?>/#contact"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/mail.svg" width="24" height="17">お問い合わせ</a></li>
							<li class="terms">
								<?php wp_nav_menu(
									array (
										'theme_location' => 'hamburger_menu',
										'menu_id' => '',
										'menu_class' => '',
										'container' => false,
										'fallback_cb' => false,
										'depth' => 1,
										)
									); ?>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</header>
	</div><!-- /.header-container-in -->
</div><!-- /.header-container -->
