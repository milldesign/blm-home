<?php

$group_key = 'instructors';

//通常ページとAMPページの切り分け
if ( !defined( 'ABSPATH' ) ) exit;

if (!is_amp()) {
   get_header();
 } else {
   get_template_part('tmp/amp-header');
 }

///////////////////////////////////////
// 投稿ページのコンテンツ
///////////////////////////////////////
?>

<?php //パンくずリストがメイントップの場合
if (is_single_breadcrumbs_position_main_top()){
  get_template_part('tmp/breadcrumbs');
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article') ?> itemscope="itemscope" itemprop="blogPost" itemtype="https://schema.org/BlogPosting" data-clarity-region="article">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); ?>

      <?php //タイトル上の広告表示
      if (is_ad_pos_above_title_visible() && is_all_adsenses_visible()){
        get_template_part_with_ad_format(get_ad_pos_above_title_format(), 'ad-above-title', is_ad_pos_above_title_label_visible());
      }; ?>

      <?php //投稿タイトル上ウイジェット
      if ( is_single() && is_active_sidebar( 'above-single-content-title' ) ): ?>
        <?php dynamic_sidebar( 'above-single-content-title' ); ?>
      <?php endif; ?>

      <?php //固定ページタイトル上ウイジェット
      if ( is_page() && is_active_sidebar( 'above-page-content-title' ) ): ?>
        <?php dynamic_sidebar( 'above-page-content-title' ); ?>
      <?php endif; ?>

      <?php //タイトル上のカテゴリー・タグ
      if (is_category_tag_display_position_title_top() && is_single()) {
        get_template_part('tmp/categories-tags');
      } ?>

      <header class="article-header entry-header">
        <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

        <?php //レビュー表示
        if (is_the_page_review_enable()) {
          echo '<div class="review-rating">';
          echo get_rating_star_tag(get_the_review_rate(), 5, true);
          echo '</div>';
        }
        ?>

        <?php //タイトル下の広告表示
        if (is_ad_pos_below_title_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_below_title_format(), 'ad-below-title', is_ad_pos_below_title_label_visible());
        }; ?>

        <?php //投稿タイトル下ウイジェット
        if ( is_single() && is_active_sidebar( 'below-single-content-title' ) ): ?>
          <?php dynamic_sidebar( 'below-single-content-title' ); ?>
        <?php endif; ?>

        <?php //固定ページタイトル下ウイジェット
        if ( is_page() && is_active_sidebar( 'below-page-content-title' ) ): ?>
          <?php dynamic_sidebar( 'below-page-content-title' ); ?>
        <?php endif; ?>

        <?php //アイキャッチ挿入
        get_template_part('tmp/eye-catch');

        do_action('singular_eye_catch_after');
        ?>

        <?php //SNSトップシェアボタンの表示
        if (is_sns_top_share_buttons_visible() &&
          (
            //投稿ページトップシェアボタンの表示
            (is_single() && is_sns_single_top_share_buttons_visible()) ||
            //固定するページトップシェアボタンの表示
            (is_page() && is_sns_page_top_share_buttons_visible())
          )
        ){
          get_template_part_with_option('tmp/sns-share-buttons', SS_TOP);
        } ?>


        <?php //投稿日と更新日テンプレート
        get_template_part('tmp/date-tags'); ?>

        <?php //本文上のカテゴリー・タグ
        if (is_category_tag_display_position_content_top() && is_single()) {
          get_template_part('tmp/categories-tags');
        } ?>

        <?php if (is_content_read_time_visible() && is_the_page_read_time_visible() && !is_plugin_fourm_page()): ?>
          <div class="read-time"><?php echo '<span class="fa fa-hourglass-half" aria-hidden="true"></span>
'.sprintf(__( 'この記事は<span class="bold">約%s分</span>で読めます。', THEME_NAME ), get_time_to_content_read(get_the_content())); ?></div>
        <?php endif; ?>

         <?php //本文上の広告表示
        if (is_ad_pos_content_top_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_content_top_format(), 'ad-content-top', is_ad_pos_content_top_label_visible());
        }; ?>

        <?php //投稿本文上ウイジェット
        if ( is_single() && is_active_sidebar( 'single-content-top' ) ): ?>
          <?php dynamic_sidebar( 'single-content-top' ); ?>
        <?php endif; ?>

        <?php //固定ページ本文上ウイジェット
        if ( is_page() && is_active_sidebar( 'page-content-top' ) ): ?>
          <?php dynamic_sidebar( 'page-content-top' ); ?>
        <?php endif; ?>

      </header>

      <?php //投稿・固定ページ本文前のアクションフック
      do_action('singular_entry_content_before'); ?>

      <div class="entry-content cf<?php echo get_additional_entry_content_classes(); ?>" itemprop="mainEntityOfPage">
				<?php the_content(); //記事本文の表示 ?>

				<?php 
						// カスタムフィールドグループを取得
					$group_data = SCF::get( $group_key, get_the_ID() );
					if ( $group_data ) {
						foreach ( $group_data as $field ) {
				?>
				<h2><?php the_title(); ?></h2>
				<?php
					if( $field['banner'] ) {
						echo wp_get_attachment_image( $field['banner'], array( 116, 116 ), false, array( 'alt' => $field['job-title'], 'loading' => 'lazy' ) );
					}
				?>
				<p><?php echo $field['job-title']; ?></p>
				<p><?php echo( $field['description'] ); ?></p>
				<?php
						}
					}
				?>
      </div>

      <?php ////投稿・固定ページ本文後のアクションフック
      do_action('singular_entry_content_after'); ?>

      <?php //マルチページ用のページャーリンク
      get_template_part('tmp/pager-page-links'); ?>

      <footer class="article-footer entry-footer">

        <?php //投稿本文下ウイジェット
        if ( is_single() && is_active_sidebar( 'single-content-bottom' ) ): ?>
          <?php dynamic_sidebar( 'single-content-bottom' ); ?>
        <?php endif; ?>

        <?php //固定ページ本文下ウイジェット
        if ( is_page() && is_active_sidebar( 'page-content-bottom' ) ): ?>
          <?php dynamic_sidebar( 'page-content-bottom' ); ?>
        <?php endif; ?>

        <?php //本文下ページ送りナビ
        if (is_post_navi_position_under_content() && is_single()) {
          get_template_part('tmp/pager-post-navi');
        } ?>

        <?php //本文下のカテゴリー・タグ
        if (is_category_tag_display_position_content_bottom() && is_single()) {
          get_template_part('tmp/categories-tags');
        } ?>

        <?php //本文下の広告表示
        if (is_ad_pos_content_bottom_visible() && is_all_adsenses_visible()){
          //レスポンシブ広告のフォーマットにrectangleを指定する
          get_template_part_with_ad_format(get_ad_pos_content_bottom_format(), 'ad-content-bottom', is_ad_pos_content_bottom_label_visible());
        }; ?>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_above_sns_buttons_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_above_sns_buttons_format(), 'ad-above-sns-buttons', is_ad_pos_above_sns_buttons_label_visible());
        }; ?>

        <?php //投稿SNSボタン上ウイジェット
        if ( is_single() && is_active_sidebar( 'above-single-sns-buttons' ) ): ?>
          <?php dynamic_sidebar( 'above-single-sns-buttons' ); ?>
        <?php endif; ?>

        <?php //固定ページSNSボタン上ウイジェット
        if ( is_page() && is_active_sidebar( 'above-page-sns-buttons' ) ): ?>
          <?php dynamic_sidebar( 'above-page-sns-buttons' ); ?>
        <?php endif; ?>

        <?php //SNSボトムシェアボタンの表示
        if (is_sns_bottom_share_buttons_visible() &&
          (
            //投稿ページボトムシェアボタンの表示
            (is_single() && is_sns_single_bottom_share_buttons_visible()) ||
            //固定するページボトムシェアボタンの表示
            (is_page() && is_sns_page_bottom_share_buttons_visible())
          )
        ){
          get_template_part_with_option('tmp/sns-share-buttons', SS_BOTTOM);
        } ?>

        <?php //SNSフォローボタン
        if (
          is_sns_follow_buttons_visible() &&
          (
            //投稿ページフォローボタンの表示
            (is_single() && is_sns_single_follow_buttons_visible()) ||
            //固定するページフォローボタンの表示
            (is_page() && is_sns_page_follow_buttons_visible())
          )
        ){
          get_template_part_with_option('tmp/sns-follow-buttons', SF_BOTTOM);
        } ?>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_below_sns_buttons_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_below_sns_buttons_format(), 'ad-below-sns-buttons', is_ad_pos_below_sns_buttons_label_visible());
        }; ?>

        <?php //投稿SNSボタン下ウイジェット
        if ( is_single() && is_active_sidebar( 'below-single-sns-buttons' ) ): ?>
          <?php dynamic_sidebar( 'below-single-sns-buttons' ); ?>
        <?php endif; ?>

        <?php //固定ページSNSボタン下ウイジェット
        if ( is_page() && is_active_sidebar( 'below-page-sns-buttons' ) ): ?>
          <?php dynamic_sidebar( 'below-page-sns-buttons' ); ?>
        <?php endif; ?>

        <?php //投稿者等表示用のテンプレート
        get_template_part('tmp/footer-meta'); ?>

        <!-- publisher設定 -->
        <?php
        $home_image_url = get_amp_logo_image_url();
        $size = get_image_width_and_height($home_image_url);
        $width = isset($size['width']) ? $size['width'] : 600;
        $height = isset($size['height']) ? $size['height'] : 60;

        $sizes = calc_publisher_image_sizes($width, $height);
        $width = $sizes ? $sizes['width'] : 600;
        $height = $sizes ? $sizes['height'] : 60;
         ?>
        <div class="publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
              <img src="<?php echo $home_image_url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="">
              <meta itemprop="url" content="<?php echo $home_image_url; ?>">
              <meta itemprop="width" content="<?php echo $width; ?>">
              <meta itemprop="height" content="<?php echo $height; ?>">
            </div>
            <div itemprop="name"><?php bloginfo('name'); ?></div>
        </div>
      </footer>

    <?php
    } // end while
  } //have_posts end if ?>
</article>

<div class="under-entry-content">

  <?php //関連記事上ページ送りナビ
  if (is_post_navi_position_over_related()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

  <?php //投稿関連記事上ウイジェット
  if ( is_active_sidebar( 'above-single-related-entries' ) ): ?>
    <?php dynamic_sidebar( 'above-single-related-entries' ); ?>
  <?php endif; ?>

  <?php get_template_part('tmp/related-entries'); //関連記事 ?>

  <?php //関連記事下の広告表示
  if (is_ad_pos_below_related_posts_visible() && is_all_adsenses_visible()){
    get_template_part_with_ad_format(get_ad_pos_below_related_posts_format(), 'ad-below-related-posts', is_ad_pos_below_related_posts_label_visible());
  }; ?>

  <?php //投稿関連記事下ウイジェット
  if ( is_active_sidebar( 'below-single-related-entries' ) ): ?>
    <?php dynamic_sidebar( 'below-single-related-entries' ); ?>
  <?php endif; ?>

  <?php //ページ送りナビ
  if (is_post_navi_position_under_related()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

  <?php //コメント上ウイジェット
  if ( is_active_sidebar( 'above-single-comment-aria' ) ): ?>
    <?php dynamic_sidebar( 'above-single-comment-aria' ); ?>
  <?php endif; ?>

  <?php //コメントを表示する場合
  if (is_single_comment_visible() && !post_password_required( $post )) {
    comments_template(); //コメントテンプレート
  } ?>

  <?php //コメントフォーム下ウイジェット
  if ( is_active_sidebar( 'below-single-comment-form' ) ): ?>
    <?php dynamic_sidebar( 'below-single-comment-form' ); ?>
  <?php endif; ?>

  <?php //コメント下ページ送りナビ
  if (is_post_navi_position_under_comment()) {
    get_template_part('tmp/pager-post-navi');
  } ?>

</div>

<?php //パンくずリストがメインボトムの場合
if (is_single_breadcrumbs_position_main_bottom()){
  get_template_part('tmp/breadcrumbs');
} ?>

<?php //メインカラム追従領域
get_template_part('tmp/main-scroll'); ?>

<?php get_footer(); ?>
