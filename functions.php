<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

/**********************************************************
* CSS/JS 読み込み関連
***********************************************************/
if ( ! function_exists( 'child_theme_enqueue_styles' ) ) {
	function child_theme_enqueue_styles() {
		wp_register_style( 'pages-common-style', get_stylesheet_directory_uri() . '/assets/css/pages-common-style.css' );
		wp_register_style( 'front-page-style', get_stylesheet_directory_uri() . '/assets/css/front-page-style.css' );
		wp_register_style( 'join', get_stylesheet_directory_uri() . '/assets/css/page-join.css' );
		wp_register_style( 'handmade-tutorials', get_stylesheet_directory_uri() . '/assets/css/page-handmade-tutorials.css' );
		wp_register_style( 'learn-to-sell', get_stylesheet_directory_uri() . '/assets/css/page-learn-to-sell.css' );
		wp_register_style( 'learn-start-business', get_stylesheet_directory_uri() . '/assets/css/page-learn-start-business.css' );
		wp_register_style( 'terms', get_stylesheet_directory_uri() . '/assets/css/page-terms.css' );
		wp_register_style( 'bxslider', get_stylesheet_directory_uri() . '/assets/css/jquery.bxslider.min.css' );
		wp_register_script( 'bxslider', get_stylesheet_directory_uri() . '/assets/js/jquery.bxslider.min.js', array( 'jquery' ), '1.0.0', true );
		wp_register_style( 'splide', get_stylesheet_directory_uri() . '/assets/css/splide-core.min.css' );
		wp_register_script( 'splide', get_stylesheet_directory_uri() . '/assets/js/splide.min.js', array(), '1.0.0', true );
		wp_register_script( 'splide-extension-auto-scroll', get_stylesheet_directory_uri() . '/assets/js/splide-extension-auto-scroll.min.js', array( 'splide' ), '1.0.0', true );
		wp_register_style( 'lity', get_stylesheet_directory_uri() . '/assets/css/lity.min.css' );
		wp_register_script( 'lity', get_stylesheet_directory_uri() . '/assets/js/lity.min.js', array( 'jquery' ) );

		if ( is_front_page() || ( ! maintenance_mode_enable() && is_page( array( 'join', 'handmade-tutorials', 'learn-to-sell', 'learn-start-business', 'terms' ) ) ) ) {
			wp_enqueue_style( 'pages-common-style' );
		}

		if ( is_front_page() ) {
			wp_enqueue_style( 'front-page-style' );
			wp_enqueue_style( 'splide' );
			wp_enqueue_script( 'splide' );
			wp_enqueue_script( 'splide-extension-auto-scroll' );
			wp_enqueue_style( 'lity' );
			wp_enqueue_script( 'lity' );
		}
		
		if ( is_page( 'join' ) ) {
			wp_enqueue_style( 'join' );
			wp_enqueue_style( 'splide' );
			wp_enqueue_script( 'splide' );
		}
		
		if ( is_page( 'handmade-tutorials' ) ) {
			wp_enqueue_style( 'handmade-tutorials' );
		}
		
		if ( is_page( 'learn-to-sell' ) ) {
			wp_enqueue_style( 'learn-to-sell' );
		}

		if ( is_page( 'learn-start-business' ) ) {
			wp_enqueue_style( 'learn-start-business' );
		}

		if ( is_page( 'terms' ) ) {
			wp_enqueue_style( 'terms' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 100 );

/**********************************************************
* WordPressのリンク機能を削除
***********************************************************/
if ( ! function_exists( 'remove_menus' ) ) {
	function remove_menus() {
		remove_menu_page( 'link-manager.php' );
	}
	add_action( 'admin_menu', 'remove_menus', 999 );
}

/**********************************************************
* ナビゲーションメニューの追加
***********************************************************/
if ( ! function_exists( 'child_theme_register_navgation' ) ) {
	function child_theme_register_navgations() {
		$locations = array(
			'hamburger_menu' => 'ハンバーガーメニュー',
			'footer_sns_container' => 'フッターSNSコンテナ'
		);
		register_nav_menus( $locations );
	}
	add_action( 'after_setup_theme', 'child_theme_register_navgations' );
}

/**********************************************************
* メンテナンス中のHTMLをコールバック
***********************************************************/
if ( ! function_exists( 'callback_maintenance_html' ) ) {
	function callback_maintenance_html() {
		$_ = function ($v) { return $v; };
		$html  = '<h1>'. get_the_title() .'</h1>';
		$html .= '<p>'. get_the_modified_time('Y年n月j日') .'～<br>現在システムメンテナンス中のため、こちらのページはご利用いただけません。<br>ご不便をおかけいたしますが、ご理解いただきますようお願い申し上げます。</p>';
		return $html;
	}
}

/**********************************************************
* ページネーション付き記事一覧のショートコード
***********************************************************/
if ( ! function_exists( 'create_add_post_list' ) ) {
	function create_add_post_list( $atts ) {
		$atts = shortcode_atts([
			// ショートコード初期値
			'count' => 5,
			'category' => -1,
			'pagenation_display' => 'true'
		], $atts, 'add_post_list');
		
		$out = '';
		
		// 記事取得
		$args =  array(
			'post_type'        => 'post', //投稿タイプ名
			'posts_per_page'   => $atts['count'], //表示件数
			'cat'     => $atts['category'], //表示カテゴリ
			'orderby'          => 'date', //ソートの基準
			'order'            => 'DESC', //DESC降順　ASC昇順
			'post_status'      => 'publish', //公開状態
			'caller_get_posts' => 1, //取得した記事の何番目から表示するか
			'paged'            =>  get_query_var( 'paged', 1 ), //ページネーション
		);
		
		$the_query = new WP_Query($args);
		
		// ループ
		if ($the_query->have_posts()) {
			$out = '<div class="post_news">';
			$out .= '<div class="new-entry-cards widget-entry-cards no-icon cf">';
			
			while ($the_query->have_posts()) {
				$the_query->the_post();
				$post_id = get_the_ID(); // 記事のID取得
				$title = esc_html(get_the_title()); // タイトル取得
				$content = get_the_content(); // コンテンツ取得
				$excerpt = get_the_excerpt(); // 抜粋取得取得
				$link = get_permalink(); // リンク取得
				
				// サムネイル
				if ( has_post_thumbnail() ) {
					$thumb = get_the_post_thumbnail($post_id, array(320,120));
				} else {
					$theme_uri = get_template_directory_uri();
					$thumb = '<img src="'. $theme_uri .'/images/no-image-320.png" alt="" class="no-image entry-card-thumb-image list-no-image" width="320" height="180">';
				}
				
				//更新日
				$time = get_the_time(get_option('date_format'));
				if (get_the_time('U') !== get_the_modified_time('U')) {
					$time = get_the_time(get_option('date_format'));
				}
				
				// カテゴリを表示
				$categories = get_the_category();
				$cat_name = $categories[0] ->name;
				
				$out .= <<< EOD
				<a href="${link}" class="entry-card-wrap a-wrap border-element cf custom-entry-card-wrap" title="${title}">
				<article class="entry-card e-card cf">
				<figure class="entry-card-thumb card-thumb e-card-thumb">
				${thumb}
				<span class="cat-label cat-label-3">${cat_name}</span>
				</figure>
				<div class="entry-card-content card-content e-card-content">
				<h2 class="entry-card-title card-title e-card-title" itemprop="headline">${title}</h2>
				<div class="entry-card-snippet card-snippet e-card-snippet">
				${excerpt}
				</div>
				<div class="entry-card-meta card-meta e-card-meta">
				<div class="entry-card-info e-card-info">
				<span class="post-date"><span class="far fa-clock" aria-hidden="true"></span>${time}</span>
				</div>
				</div>
				</div>
				</article>
				</a>
				EOD;
			}
			wp_reset_postdata();
			$out .= '</div>'; //post_news;
			$out .= '</div>'; //new-entry-cards
		} else {
			$out = "<p>記事は見つかりませんでした。</p>";
		}
		
		// ページネーション
		if($atts['pagenation_display'] == 'true') {
			//現在のページ数
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			//全ページ数
			$pages = $the_query->max_num_pages;
			
			// ▼▼▼cocoon-master/tmp/pagination.phpより引用
			//ページが1ページしかない場合は出力しない
			if($pages != 1) {
				//次のページ番号
				if ( $pages == $paged ) {
					$next_page_num = $paged;
				} else {
					$next_page_num = $paged + 1;
				}
				
				//現在のページ番号が全ページ数よりも少ないときは「次のページ」タグを出力
				if ( $paged < $pages ) {
					$url = get_pagenum_link($next_page_num);
					//$url = get_query_removed_url($url);
					// var_dump($url);
					$out .= '<div class="pagination-next cumstom_pagination"><a href="'.esc_url($url).'" class="pagination-next-link key-btn">'.__( '次のページ', THEME_NAME ).'</a></div>';
				}
			}
			
			$out .= '<div class="pagination cumstom_pagination">';
			global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);
			if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
				$paginate_format = '';
				$paginate_base = add_query_arg('paged','%#%');
			}
			else{
				$pagenum_link = html_entity_decode( get_pagenum_link() );
				$url = get_pagenum_link(2);
				$string = str_replace(trailingslashit($pagenum_link), '', $url);
				$string = str_replace(user_trailingslashit('/2'), '/%#%/', $string);
				$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
				user_trailingslashit($string, 'paged');
				$paginate_base .= '%_%';
			}
			
			$out .= paginate_links(array(
				'base' => $paginate_base,
				'format' => $paginate_format,
				'total' => $the_query->max_num_pages,
				'mid_size' => 2,
				'current' => ($paged ? $paged : 1),
				'prev_text' => '<span class="fa fa-angle-left" aria-hidden="true"></span>',
				'next_text' => '<span class="fa fa-angle-right" aria-hidden="true"></span>',
			));
			$out .= '</div>';
			// ▲▲▲cocoon-master/tmp/pagination.phpより引用
		}
		
		return $out;
		
	}
	add_shortcode('add_post_list', 'create_add_post_list');
}
