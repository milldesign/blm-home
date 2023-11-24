<?php
/**
 * 作り方を学ぶ
 */

	if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	if ( maintenance_mode_enable() ) {
		echo callback_maintenance_html();
		$sidebar_display = true;
		get_footer();
		return;
	}
?>
<section class="container">
	<header class="section-header rounded" style="background-color: #FFF7CD;">
		<h1 class="page-title_ribbon" style="background-color: #FFDD2D">作り方を学ぶ</h1>
		<div class="illust-container">
			<p class="balloon" style="color: #C98500; -webkit-animation-delay: 0s, 750ms; animation-delay: 0s, 600ms;">すべてのレッスンを<br>無料で受講し放題！</p>
			<picture>
				<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/lady.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/lady@2x.png 2x" width="277" height="242">
				<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/lady_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/lady_large@2x.png 2x" width="528" height="506">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/lady_large.png" width="528" height="506" style="-webkit-animation-delay: 500ms, 1.5s; animation-delay: 500ms, 1.2s;">
			</picture>
		</div>
		<p class="description">ハンドメイドが大好き！<br>もっといろんなハンドメイドを作ってみたい！<br>コツとか秘訣が知りたいな！<br>ハンドメイド好きさんは興味がありますよね。<br>そこでハンドメイドの仕事塾®︎では<br>いろんなジャンルのハンドメイドの先生たちのご協力をいただき、<br>あなたの望みを叶えます！</p>
		<a href="<?php echo( home_url() ) ?>/handmade-tutorials/join/" role="button">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="none" style="margin-right: 1rem; vertical-align: -0.22em;">
				<path d="M6.77393 16.272V19.653H22.1119C22.1119 19.653 22.1119 9.2271 22.1119 8.94422C22.1119 4.74153 18.6834 1.34705 14.4498 1.34705C10.7993 1.34705 7.75944 3.86597 6.98213 7.24698" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M13.7141 15.0327L16.9621 11.8807L13.7141 8.7287" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M1.88794 11.8807H16.7262" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>受講ページへログインする</a>
		<small>※ログインをするためには<br class="mobile-only">メールマガジンへの登録が必要です。<br>詳細は下記をご確認ください。</small>
	</header>
	<section class="about">
		<h2><span style="color: #C98500">「作り方」「作り方のコツ・秘訣」を<br class="mobile-only">知りたい</span>という方は<br>ハンドメイドの仕事塾®︎の<br class="mobile-only">メールマガジンへのご登録が必要です！</h2>
		<a class="join mobile-only" href="https://1lejend.com/stepmail/kd.php?no=eXzsfcu" role="button"><span class="arrow"></span>メールマガジンに登録して<br>作り方を学ぶコースを受講する</a>
		<p class="mobile-align-left" style="letter-spacing: -0.03em;"><b>まずはメールマガジンへ登録するためのフォームにご記入ください。</b><br>フォームの内容に不適切な内容がないかを確認した上で<br class="pc-only"><b>「作り方」ページへのログインURLをお送りします。</b><br><small style="color: #C98500">＊メールマガジンはいつでも解除が可能です。</small><br><br>その後は掲載されている講師、ハンドメイドのジャンルから知りたいものを<b>ポチりたいだけポチって下さい。</b><br class="pc-only">尚、ポチっていただく先はその講師のLINEになります。<br class="pc-only">掲載されている講師から配信される情報をお楽しみに！</p>
		<a class="join pc-only" href="https://1lejend.com/stepmail/kd.php?no=eXzsfcu" role="button"><span class="arrow"></span>メールマガジンに登録して<br>作り方を学ぶコースを受講する</a>
		<ol>
			<li>
				<h3>STEP<span>1</span></h3>
				<div class="illust">
					<svg width="59" height="41" viewBox="0 0 59 41" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="1" y="1" width="57" height="39" rx="4" fill="white" stroke="#C98500" stroke-width="2"/>
						<path d="M2 3.5L29 22L56.5 3.5" stroke="#C98500" stroke-width="2" stroke-linecap="round"/>
					</svg>
				</div>
				下記のボタンより<br>メールマガジンへ登録<small style="display: block; color: #C98500; font-style: normal; font-weight: 500;">※ご登録直後、<br>自動返信メールが届きますので、<br>詳しくはそちらをご確認下さい。</small>
			</li>
			<li>
				<h3>STEP<span>2</span></h3>
				<div class="illust">
					<svg xmlns="http://www.w3.org/2000/svg" width="82" height="79" viewBox="0 0 82 79" fill="none" style="margin-top: -7px;">
						<g clip-path="url(#clip0_1871_4767)">
							<path d="M58.4763 36.2866L71.0956 25.0336L80.7201 51.5532L67.1409 61.2821" fill="white"/>
							<path d="M58.4763 36.2866L71.0956 25.0336L80.7201 51.5532L67.1409 61.2821" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M23.5364 36.2866L10.9171 25.0336L1.27979 51.5532L14.859 61.2821" fill="white"/>
							<path d="M23.5364 36.2866L10.9171 25.0336L1.27979 51.5532L14.859 61.2821" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M14.104 61.5615V77.7299H67.141V61.5615" fill="white"/>
							<path d="M14.104 61.5615V77.7299H67.141V61.5615" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M67.141 61.2821H14.104L22.7814 36.2866H58.4764L67.141 61.2821Z" fill="white"/>
							<path d="M43.6684 27.142L35.3494 53.1027" stroke="#C98502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M39.3809 43.9326L45.2938 45.5964" stroke="#C98502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M36.834 49.9783L42.7469 51.6294" stroke="#C98502" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M47.38 27.7643C52.8227 27.7643 57.2348 23.3858 57.2348 17.9846C57.2348 12.5834 52.8227 8.20483 47.38 8.20483C41.9373 8.20483 37.5251 12.5834 37.5251 17.9846C37.5251 23.3858 41.9373 27.7643 47.38 27.7643Z" fill="#C98502"/>
							<path d="M48.711 17.1591C50.167 17.1591 51.3474 15.9877 51.3474 14.5427C51.3474 13.0977 50.167 11.9263 48.711 11.9263C47.2549 11.9263 46.0745 13.0977 46.0745 14.5427C46.0745 15.9877 47.2549 17.1591 48.711 17.1591Z" fill="white"/>
							<path d="M47.7897 36.2866H58.4764L67.141 61.2821H14.104L22.7814 36.2866H33.5833" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M31.2667 19.496L26.4929 18.6069L27.9775 16.181C27.9775 16.181 28.0031 16.054 27.9519 16.0032C27.9007 15.9524 27.8367 15.9524 27.7727 15.9778L25.3666 17.4257L24.4323 11.9135C24.4323 11.85 24.3555 11.7992 24.2915 11.7992C24.2275 11.7992 24.1636 11.85 24.1508 11.9135L23.2165 17.4257L20.8104 15.9778C20.8104 15.9778 20.6824 15.9524 20.6312 16.0032C20.58 16.054 20.58 16.1175 20.6056 16.181L22.0902 18.6069L17.3164 19.496C17.2524 19.496 17.2012 19.5722 17.2012 19.6357C17.2012 19.6992 17.2524 19.7627 17.3164 19.7754L22.0902 20.6645L20.6056 23.0904C20.6056 23.0904 20.58 23.2174 20.6312 23.2682C20.6824 23.319 20.7464 23.319 20.8104 23.2936L23.2165 21.8457L24.1508 27.3579C24.1508 27.4214 24.2275 27.4722 24.2915 27.4722C24.3555 27.4722 24.4195 27.4214 24.4323 27.3579L25.3666 21.8457L27.7727 23.2936C27.7727 23.2936 27.9007 23.319 27.9519 23.2682C28.0031 23.2174 28.0031 23.1539 27.9775 23.0904L26.4929 20.6645L31.2667 19.7754C31.3307 19.7754 31.3819 19.6992 31.3819 19.6357C31.3819 19.5722 31.3307 19.5087 31.2667 19.496Z" fill="#C98502"/>
							<path d="M73.8473 7.68408L69.0735 6.79502L70.5581 4.36913C70.5581 4.36913 70.5837 4.24212 70.5325 4.19132C70.4813 4.14051 70.4173 4.14051 70.3533 4.16592L67.9472 5.61383L67.0129 0.114309C67.0129 0.0508039 66.9361 0 66.8721 0C66.8081 0 66.7441 0.0508039 66.7313 0.114309L65.797 5.62653L63.3909 4.17862C63.3909 4.17862 63.2629 4.15322 63.2117 4.20402C63.1605 4.25482 63.1605 4.31833 63.1861 4.38183L64.6708 6.80772L59.8969 7.69678C59.8329 7.69678 59.7817 7.77299 59.7817 7.8365C59.7817 7.9 59.8329 7.96351 59.8969 7.97621L64.6708 8.86527L63.1861 11.2912C63.1861 11.2912 63.1605 11.4182 63.2117 11.469C63.2629 11.5198 63.3269 11.5198 63.3909 11.4944L65.797 10.0465L66.7313 15.5587C66.7313 15.6222 66.8081 15.673 66.8721 15.673C66.9361 15.673 67.0001 15.6222 67.0129 15.5587L67.9472 10.0465L70.3533 11.4944C70.3533 11.4944 70.4813 11.5198 70.5325 11.469C70.5837 11.4182 70.5837 11.3547 70.5581 11.2912L69.0735 8.86527L73.8473 7.97621C73.9113 7.97621 73.9625 7.9 73.9625 7.8365C73.9625 7.77299 73.9113 7.70949 73.8473 7.69678V7.68408Z" fill="#C98502"/>
						</g>
						<defs>
							<clipPath id="clip0_1871_4767">
								<rect width="82" height="79" fill="white"/>
							</clipPath>
						</defs>
					</svg>
				</div>
				パスワードと<br>受講ページのURLを<br>メールで受け取り、<br>受講ページにログイン
			</li>
			<li>
				<h3>STEP<span>3</span></h3>
				<div class="illust">
					<svg xmlns="http://www.w3.org/2000/svg" width="91" height="78" viewBox="0 0 91 78" fill="none"  style="margin-left: 9px;">
						<g clip-path="url(#clip0_1871_4785)">
							<path d="M57.4736 8.57629H25.5599C22.2116 8.57629 19.4973 11.2956 19.4973 14.6501V70.7115C19.4973 74.066 22.2116 76.7853 25.5599 76.7853H57.4736C60.8219 76.7853 63.5362 74.066 63.5362 70.7115V14.6501C63.5362 11.2956 60.8219 8.57629 57.4736 8.57629Z" fill="white"/>
							<path d="M19.4973 69.193H63.5362" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M41.5169 74.1978C42.1732 74.1978 42.7052 73.6648 42.7052 73.0074C42.7052 72.3499 42.1732 71.8169 41.5169 71.8169C40.8606 71.8169 40.3286 72.3499 40.3286 73.0074C40.3286 73.6648 40.8606 74.1978 41.5169 74.1978Z" fill="#C98502"/>
							<path d="M40.1708 39.7228C43.7736 39.7228 46.6942 36.7968 46.6942 33.1874C46.6942 29.578 43.7736 26.652 40.1708 26.652C36.5681 26.652 33.6475 29.578 33.6475 33.1874C33.6475 36.7968 36.5681 39.7228 40.1708 39.7228Z" fill="white" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M49.3012 68.3912V53.2674C49.3012 48.214 45.2149 44.1202 40.1708 44.1202C35.1267 44.1202 31.0405 48.214 31.0405 53.2674V68.3912" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M48.6343 49.7324L54.9758 56.5594L58.6255 47.5337" fill="white"/>
							<path d="M48.6343 49.7324L54.9758 56.5594L58.6255 47.5337" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M81.1785 5.64865C80.6449 5.64865 80.1357 5.69724 79.6264 5.78228C77.9289 2.35664 74.4247 0 70.3506 0C66.2765 0 62.6753 2.41738 61.0142 5.9159C60.2988 5.74583 59.5591 5.64865 58.7831 5.64865C53.3631 5.64865 48.9617 10.0582 48.9617 15.4882C48.9617 20.9182 53.2783 25.2428 58.6376 25.3157C57.7889 26.8584 56.3944 28.8628 54.3574 30.1869C54.127 30.3327 54.0179 30.6242 54.1149 30.8914C54.1998 31.1465 54.4302 31.3045 54.6848 31.3045C54.6969 31.3045 54.709 31.3045 54.7333 31.3045C54.9758 31.2923 59.9714 30.8793 63.8151 28.1704C65.549 29.7253 67.8407 30.6849 70.3506 30.6849C74.2428 30.6849 77.6015 28.4012 79.1899 25.1092C79.8326 25.2428 80.4994 25.3157 81.1906 25.3157C86.6106 25.3157 91.012 20.9061 91.012 15.4761C91.012 10.0461 86.6106 5.6365 81.1906 5.6365L81.1785 5.64865Z" fill="#C98502"/>
							<path d="M28.1184 36.4186C28.1184 32.7865 25.1719 29.8346 21.5465 29.8346C21.0372 29.8346 20.5401 29.8954 20.0551 30.0047C18.9396 27.6723 16.563 26.0446 13.8106 26.0446C11.0581 26.0446 8.74222 27.6237 7.60245 29.9197C7.26294 29.8711 6.91131 29.8346 6.55968 29.8346C2.93423 29.8346 -0.012207 32.7865 -0.012207 36.4186C-0.012207 40.0508 2.93423 43.0027 6.55968 43.0027C7.02044 43.0027 7.46907 42.9541 7.89346 42.869C8.96048 45.0678 11.2036 46.5984 13.8106 46.5984C15.4232 46.5984 16.8904 46.0153 18.0302 45.0556C20.6492 46.9263 24.0807 47.1936 24.2383 47.2057C24.2504 47.2057 24.2625 47.2057 24.2868 47.2057C24.5414 47.2057 24.7839 47.0357 24.8567 46.7927C24.9416 46.5255 24.8567 46.2339 24.6142 46.0882C23.3168 45.25 22.4195 43.9866 21.8617 42.9905C25.3417 42.8204 28.1062 39.9536 28.1062 36.4308L28.1184 36.4186Z" fill="#C98502"/>
							<path d="M33.6353 21.3677L30.4949 16.0349" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M38.0975 20.1287L37.8186 15.3668" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M30.1433 24.3075L26.1904 21.6593" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M63.5362 32.4707V70.7115C63.5362 74.0521 60.808 76.7853 57.4736 76.7853H25.5599C22.2255 76.7853 19.4973 74.0521 19.4973 70.7115V49.7204" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M19.4973 24.0038V14.6501C19.4973 11.3095 22.2255 8.57629 25.5599 8.57629H47.4339" stroke="#C98502" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</g>
						<defs>
							<clipPath id="clip0_1871_4785">
								<rect width="91" height="78" fill="white"/>
							</clipPath>
						</defs>
					</svg>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/free.png" width="109" height="108" alt="無料" style="position: absolute; right: -61px; bottom: -12px;">
				</div>
				気になるレッスンや<br>先生を見つけたら、<br>LINEに登録！<br>無料レッスンが配信されます。
			</li>
		</ol>
		<a class="join mobile-only" href="https://1lejend.com/stepmail/kd.php?no=eXzsfcu" role="button"><span class="arrow"></span>メールマガジンに登録して<br>作り方を学ぶコースを受講する</a>
		<div class="sample" style="position: relative; top: 36.5px; padding: 36.5px 0 2em; background-image: linear-gradient(0deg, transparent 25px, #FFF5C0 26px), linear-gradient(90deg, transparent 25px, #FFF5C0 26px); background-size: 27px 27px; background-repeat: repeat; border-bottom: 3px solid #FFDD2D; color: #C98500;">
			<h3 style="position: relative; top: -36.5px; display: flex; align-items: center; margin-bottom: -23px; font-size: 0; transform: translateY(-50%);"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/text_sample.png" width="169" height="73" alt="Sample"></h3>
			<p style="font-weight: 700;">▼　受講ページのサンプル　▼</p>
			<p style="margin: 0.5em auto; font-size: 14px;">※掲載内容は数ヶ月おきに更新されるため、<br class="mobile-only">最新の掲載内容とは異なる可能性があります。</p>
			<div style="position: relative; width: fit-content; margin: 2em auto 0; padding: 0 1.25em;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/sample-image.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/sample-image.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/sample-image@2x.jpg 2x" width="457" height="601" style="box-shadow: 0px 0px 15px rgba(51, 51, 51, 0.15);">
				<img class="stamp" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/join/sample.png" width="120" height="120" alt="Sample" style="position: absolute; transform: rotate(-16.867deg);">
			</div>
		</div>
		<a class="join" href="https://1lejend.com/stepmail/kd.php?no=eXzsfcu" role="button"><span class="arrow"></span>メールマガジンに登録して<br>作り方を学ぶコースを受講する</a>
	</section>
	<section class="qa" style="background-color: #FFF7CD;">
		<hgroup>
			<p>作り方を学ぶコース</p>
			<h2>Q&A</h2>
		</hgroup>
		<dl>
			<dt>このページに掲載されているもの以外のものが知りたいのですが・・・<span></span></dt>
			<dd>現在このページに掲載されているものは約４ヶ月ごとにリニューアルするものがあります。<br class="pc-only">新しいものもどんどん追加していきますのでお楽しみに。</dd>
		</dl>
		<dl>
			<dt>先生方からの無料レッスン動画はどうやって受け取れますか？<span></span></dt>
			<dd>動画等の受け取りについては、各講師へ直接ご確認をお願い致します。</dd>
		</dl>
		<dl>
			<dt>先生に質問をしたいのですが・・・・<span></span></dt>
			<dd>講師への質問につきましては、各講師へ直接ご確認をお願い致します。</dd>
		</dl>
		<?php include( STYLESHEETPATH . '/include/qa.php'); ?>
	</section>
</section>

<?php
	get_footer( 'nosidebar' );
?>
