<?php
/**
 * お教室開業を学ぶ
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
	<header class="container section-header rounded" style="background-color: #FFECF4;">
		<h1 class="page-title_ribbon" style="background: #FF9EC7;">お教室開業を学ぶ</h1>
		<div class="illust-container">
			<div class="balloon-container">
				<p class="balloon" style="color: #EA4086; -webkit-animation-delay: 0s, 750ms; animation-delay: 0s, 750ms;">目的に合わせて選べる<br>4つの講座を<br>ご用意しました。</p>
			</div>
			<div class="img-container">
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_m.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_l.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_s.png 243w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_m.png 412w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_l.png 824w" data-filename="lady" sizes="(max-width:999px) 243px, 413px" width="412" height="532" loading="eager" style="-webkit-animation-delay: 500ms, 1.5s; animation-delay: 500ms, 1.5s;">
				</picture>
			</div>
		</div>
		<div class="description">
			<p>資格を取得しても、<br>どんなに可愛い作品の作り方を<br class="mobile-only">教えることができても、<br>お教室の集客に悩む先生たちからの<br class="mobile-only">ご相談は後を経ちません。</p>
			<p>資格を習得したからといって、<br>お教室を始めたからといって<br>受講生さんを集められない先生たちが<br class="mobile-only">たくさんいます。</p>
			<p>そこでお教室開業とお教室ビジネスで<br>収益を上げていくための基礎から<br>オンライン化までしっかりと学んでいただける<br>４つの講座をご用意しました。</p>
		</div>
	</header>
	<span class="has-slash click-here">４つの講座の詳細はこちら！<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/go.png" width="146" height="136" alt="Go!" style="vertical-align: -0.7em;"></span>
	<div class="tab-menu" role="tablist">
		<button data-tab="1" role="tab" aria-controls="panel-1" aria-selected="true" tabindex="-1"><span>1</span>動画の作り方</button>
		<button data-tab="2" role="tab" aria-controls="panel-2" aria-selected="false" tabindex="0"><span>2</span>講座の自動配信</button>
		<button data-tab="3" role="tab" aria-controls="panel-3" aria-selected="false" tabindex="0"><span>3</span>動画&LIVE集客</button>
		<button data-tab="4" role="tab" aria-controls="panel-4" aria-selected="false" tabindex="0" style="letter-spacing: -0.08em;"><span>4</span>「売り方」を教える</button>
	</div>
	<div id="course">
		<section id="panel-1" role="tabpanel" aria-labelledby="tab-1" tabindex="0">
			<header>
				<span class="sub-title">キット販売・単発レッスン用動画の<wbr>作り方講座</span>
				<h2 class="ruby"><span class="rt">ダーリン</span><span class="en">Darling</span></h2>
				<p class="pc-align-center">現在開催しているレッスンを動画にしたい！<br>キット販売で売上アップしたい！<br>そんな作家さん・講師さんに<br class="pc-only">動画を使ったオンライン化のためのスキルを学んでいただきます。<br>ハンドメイド・お料理・アートなどに特化した動画作りを始めてみませんか？</p>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Darlingに申し込む</a>
			</header>
			<section class="come-from">
				<div class="inner width-600">
					<h3 class="ruby"><span class="rt">ダーリン</span><span class="en">Darling</span>の由来</h3>
					<p>最愛の人、お気に入りのもの<br>「時流に乗ってもてはやされる」という意味があります。<br>Become a handmade darling<br>ハンドメイドの世界で大人気になる<br class="pc-only">という意味合いが込められています。</p>
				</div>
			</section>
			<section class="introduction">
				<div class="has-background wave">
					<div class="worry">
						<h3>このような<br>お悩みは<br>ありませんか？</h3>
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry@2x.png 2x" width="185" height="242">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large@2x.png 2x" width="304" height="358">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png" loading="lazy">
						</picture>
						<ul class="check-list">
							<li>毎月レッスンメニューを考えるのは<wbr>大変！💦</li>
							<li>過去の作り方レシピを動画にして販売したい</li>
							<li>作品だけでなくキット販売で収益を上げたい</li>
							<li>材料や在庫を揃え続ける作家業に不安がある</li>
							<li>オンライン化したいけれど<br>何から始めたらいいのかわからない💦</li>
						</ul>
					</div>
				</div>
				<div class="merit">
					<img class="arrow-down pc-only" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/arrow_down_blue.svg" width="60" height="117">
					<div class="has-uni">
						<p>もしも一つでも思い当たる悩みがあった方に<br>オススメしたいのが<mark>レッスン動画の販売</mark>です。</p>
					</div>
					<h3 class="ribbon-title pink">動画レッスンが販売できるようになる<br class="mobile-only">メリットとは？</h3>
					<div class="balloons">
						<ul class="pc-align-center">
							<li class="yellow animation">
								<p>毎回作り続けてきた<br>眠っているレッスンメニューを<br>動画にして販売することで<br><b>ワークショップを開催しなくても</b><br>収益アップに<br>繋がりやすくなります。</p>
							</li>
							<li class="pink animation">
								<p><b>気候変動</b>などで<br>活動に制限も出ないので<br>安心です。</p>
							</li>
							<li class="yellow animation">
								<p><b>作り方の資料を<br>まとめなくても、</b><br>動画にすることで具体的に<br>どうやって作るのかがわかるため、<br>受講生さんにも<br>喜んでもらえます。</p>
							</li>
							<li class="pink animation">
								<p><b>会場費・移動費ゼロ</b><br>あなたのビジネスの<br>利益率が<br>アップします！</p>
							</li>
							<li class="yellow animation">
								<p>来月どんなレッスンを<br>しようかと頭を悩ませなくても<b><br>過去に開催したレッスン</b>を<br>動画レッスンにすることで、<br>いつでも販売できるものが<br>準備できます。</p>
							</li>
							<li class="pink animation">
								<p><b>作品の在庫</b>を<br>持たずに<br>販売できるものが<br>できます。</p>
							</li>
						</ul>
						<picture>
							<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/one-point_l.webp" type="image/webp">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/one-point_l.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/one-point_s.png 277w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/one-point_m.png 369w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/one-point_l.png 738w" sizes="(max-width:999px) 276px, 369px" width="369" height="304" loading="lazy" style="display: block; margin: auto; z-index: -1;">
						</picture>
					</div>
				</div>
			</section>
			<section class="detail">
				<h3 class="capsule-title">この講座で学べること</h3>
				<ul class="course-menu width-600">
					<li>動画レッスンを作るために必要な準備物</li>
					<li>わかりやすいレッスン動画を作るための動画の長さや構成</li>
					<li>スマホ１つでOK！ 動画撮影のポイント</li>
					<li>アプリを使って簡単・きれいに編集する方法</li>
					<li>受講生さんへどうやって視聴してもらうのか？<br class="mobile-only">をお届けする方法</li>
					<li>動画レッスン販売の際の注意事項も！</li>
				</ul>
				<div class="text-block pink width-600">
					<p>動画を使ったオンラインレッスンの<b>基礎的な作り方から配信方法まで</b><br>担当講師が丁寧にアドバイス。<br>また実践ベースで学んでいただけますので<br><b>講座の受講と同時に</b>あなたの動画レッスンがスタートできます。</p>
				</div>
				<small style="display: block; text-align: center;">＊作った動画レッスンを自動で配信し、<br>さらにアップセルで次の講座のご案内もして<br class="mobile-only">売上を上げたい方は<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=2" class="text-link">こちら</a></small>
				<div class="recommend has-background yellow-stripe">
					<h3>このような方に<br>おすすめです</h3>
					<picture>
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.webp" type="image/webp" width="303" height="164">
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.png 2x" width="303" height="164">
						<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large@2x.png 2x" width="352" height="383">
						<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png" loading="lazy">
					</picture>
					<ul class="check-list">
						<li>ハンドメイド、お料理(パン／お菓子)、<br>アート(文字／イラスト)など<br>何かを「作る」ことを教えるお教室の先生</li>
						<li>一度開催したワークショップのレシピが<br>そのまま眠っている方</li>
						<li>ワークショップの準備や開催に<br>時間がかかることにお悩みの方</li>
						<li>自分のお教室をエリア限定せず<br class="mobile-only">広げていきたい</li>
					</ul>
				</div>
				<h3 class="capsule-title">講座の受講期間</h3>
				<p class="is-larger">3ヶ月</p>
				<div class="text-block pink width-600">
					<h4>受講期間中に可能なこと</h4>
					<ul>
						<li>受講生様限定サイトの試聴</li>
						<li>月２回のZoomによるサポート<br class="pc-only">（グループワークショップ・グループコンサル）</li>
						<li>FBグループでの質疑応答（受講生様限定のFacebookグループにて質問を受け付けています。わからないことはいつでも担当講師に聞くことができます）</li>
						<li>アーカイブ視聴（グループワークショップやグルコンに参加できなかった時でもZoomの録画でご視聴いただけます）</li>
					</ul>
				</div>
				<h3 class="capsule-title">開催地・開催スケジュール</h3>
				<div style="text-align: center">
					<p style="font-weight: 600;">Darlingはオンラインにて開講しています。<br>グループコンサルティングは、<br class="mobile-only">毎月火曜日と木曜日の<br class="mobile-only">20：00〜22：00で開催しております。</p>
					<small style="font-size: 0.875em">※イレギュラー開催もあり</small>
				</div>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Darlingに申し込む</a>
				<h3 class="capsule-title">参加料金</h3>
				<p class="is-larger">13万2000円<span>(税込)</span></p>
				<p class="balloon yellow width-600">動画レッスンの自動配信が学べる講座<b>「Merrily Petit（メリリープチ）」</b>と<br>合わせて受講が可能です。</p>
				<div style="padding-top: 1.5rem; text-align: center;">
					<h4 style="font-family: 'dnp-shuei-mgothic-std', sans-serif; color: #EA4086; font-size: 1.5rem; line-height: 1">Darling<span style="color: #9A7A74">＋</span>Merrily Petit</h4>
					<p class="is-larger" style="margin: 0.75em auto">33万円<span>(税込)</span></p>
					<small style="font-size: 1rem">︎※Merrily Petitについては<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=2" class="text-link">こちら</a></small>
				</div>
				<div class="text-block brown width-600">
					<h4>お支払い方法は<br class="mobile-only">下記よりお選びいただけます。</h4>
					<ol>
						<li>銀行振込一括払い</li>
						<li>カード一括払い</li>
						<li>カード３回払い(44,000円×３回)</li>
					</ol>
				</div>
				<section class="present">
					<div class="inner has-background pink-windowpane">
						<h3>お申し込み特典をご用意！</h3>
						<dl class="width-600">
							<div>
								<div class="title">特典<span>1</span></div>
								<dt>講師のコミュニティサロン<br>THE DREAM ＋ SALON(月額5500円)<br>３ヶ月間無料でご利用いただけます。<small>＊1万6500円相当</small></dt>
								<dd>「みんなはどうしているのかな？」「こんな時どう調べたらいいのかな？」などわからないこと、知りたいことなどもコミュニティサロンで解決！オンラインお茶会も定期的に開催されています。先輩講師さんたちとも交流できますのでモチベーションアップに役立ちます！</dd>
							</div>
							<div>
								<div class="title">特典<span>2</span></div>
								<dt>「ファンができる<br class="mobile-only">インスタグラムプロフィールの作り方」の<br>動画レッスンをプレゼント<small>＊3万3000円相当</small></dt>
								<dd>フォロワー増やしは不要。本当のファンを作るために必要な最強プロフィール作りを動画レッスンで学んでいただきます。</dd>
							</div>
							<div>
								<div class="title">特典<span>3</span></div>
								<dt>動画を使った集客と<br class="mobile-only">販売のスキルを実践で学ぶ<br>THE DREAMの体験会にご招待<small>＊5500円相当（1回限り）</small></dt>
							</div>
						</dl>
					</div>
				</section>
				<h3 class="capsule-title">講師紹介</h3>
				<div class="width-600">
					<ul class="instructors">
						<li>
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka@2x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka@2x.jpg 2x" width="178" height="178" loading="lazy" alt="野中ともかさん">
								<h4>野中ともかさん</h4>
							</div>
							<p>趣味からスタートしたデコ作品作りをきっかけにプロフェッショナルの資格を取得。<br>「WOW & SMILE」をテーマにオーダー作品を作るMERMAID-VISION.デコショップを運営。デザインフェスタやホビーショー等に出展・委託販売・雑誌掲載を重ね、海外公式スヌーピー映画のグッズ作り、数々のコンテスト入賞などを経験を持つ。現在はハンドメイドに特化したオンライン化の実践塾THE DREAMでサイト作り、動画作りの専任講師としても活躍中。自らも動画を使ったレッスンを開講し、全国各地から生徒さんが集まる人気オンライン教室を開催。</p>
						</li>
					</ul>
				</div>
				<h3 class="capsule-title">お申し込みの流れ</h3>
				<ol class="flow">
					<li>
						<h4>お申し込み</h4>
						<p>お申し込みフォームをタップして<br class="pc-only">必要事項を選択・記入して「確定ボタン」をタップ。</p>
					</li>
					<li>
						<h4>お支払い</h4>
						<p>自動返信メールにてお支払いのご案内が届きます。<br class="pc-only">お申し込み後から３日以内に指定の支払い方法にてお支払いをお願いします。</p>
					</li>
					<li>
						<h4>講座のご案内が到着</h4>
						<p>お支払い確認後、追って事務局より<br class="pc-only">入金のご確認メールと特典に関するご案内、<br class="pc-only">講座の会員サイトに関するご案内をお送り致します。<br><small>※土日にかかる場合は、翌週以降での対応となります</small></p>
					</li>
				</ol>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Darlingに申し込む</a>
				<span class="has-slash">MerrilyPetitと合わせて申し込む方は<wbr>こちらから</span>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button" style="column-gap: 13px;"><span class="arrow"></span>Darling<span style="color: #FFDD2D;">+</span><wbr>MerrilyPetitに<br class="mobile-only">申し込む</a>
			</section>
			<section class="qa">
				<hgroup>
					<p>動画の作り方 <span>Darling</span></p>
					<h2>Q&amp;A</h2>
				</hgroup>
				<dl>
					<dt>現在ハンドメイド作家で、講師経験ゼロですが動画レッスンは作れますか？<span></span></dt>
					<dd>はい、作れます。<br>ただし、どのような講座にするかは各自で決める必要があります。<br>その講座の内容に沿った動画レッスンの作り方を習得いただけます。</dd>
				</dl>
				<dl>
					<dt>会員サイトはいつまで視聴できますか？<span></span></dt>
					<dd>現在会員サイトとして使っているサービスが終了もしくは大幅な変更がない限り、半永久的にご視聴いただけます。</dd>
				</dl>
				<dl>
					<dt>学んだ内容を講座にして販売してもいいですか？<span></span></dt>
					<dd>はい、可能です。<br>ただし、弊社の資料や動画を使って講座を開催することは規約違反となりますのでご注意下さい。<br>資料、動画、流れなどはご自身で制作、準備して下さい。</dd>
				</dl>
				<dl>
					<dt>DarlingとTHE DREAMの違いは何ですか？<span></span></dt>
					<dd><p>Darlingは動画レッスンの作り方に特化した講座です。<br>THE DREAMは動画とライブを使った集客と動画レッスンを、売れる流れで販売するためのノウハウを学んでいただく講座となります。<br>動画とライブを使った集客について興味がある方は<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=3">THE DREAMの体験会</a>にご参加ください。</p></dd>
				</dl>
			</section>
		</section>
		<section id="panel-2" role="tabpanel" aria-labelledby="tab-2" tabindex="0" hidden>
			<header>
				<span class="sub-title">動画レッスンの自動配信講座</span>
				<h2 class="ruby"><span class="rt">メリリープチ</span><span class="en">Merrily Petit</span></h2>
				<p class="pc-align-center">せっかく動画レッスンを作ったのに講座の配信に手間取っている、<br class="pc-only">配信する時間がない、管理するのがちょっと苦手！<br class="pc-only">という講師さんのために動画レッスンを自動で配信し<br class="pc-only">時間のゆとりと安心を作るための講座です。<small style="display: block; margin-top: 0.5em; font-size: 1rem; font-weight: 500">＊動画レッスンの「作り方」に興味がある方は<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=1" class="text-link">こちら</a></small></p>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Merrily Petitに<wbr>申し込む</a>
			</header>
			<section class="come-from">
				<div class="inner width-600">
					<h3 class="ruby"><span class="rt">メリリープチ</span><span class="en">Merrily<br>Petit</span>の由来</h3>
					<p>「陽気な」という意味を持つMerrily。<br>担当する講師自身が自動化で夢を叶え、<br class="pc-only">自由に陽気に国内・海外のイベントで<br class="pc-only">講師業を楽しんでいるところから、<br class="pc-only">みなさんにもそういう陽気さが楽しく広がって欲しいという<br class="pc-only">思いを込めてネーミングしました。</p>
				</div>
			</section>
			<section class="introduction">
				<div class="has-background wave">
					<div class="worry">
						<h3>このような<br>お悩みは<br>ありませんか？</h3>
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry@2x.png 2x" width="185" height="242">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large@2x.png 2x" width="304" height="358">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png" loading="lazy">
						</picture>
						<ul class="check-list">
							<li>動画レッスンを作ったけれど<br>配信に手間取っている💦</li>
							<li>動画レッスンが売れても１回だけ！<br>次の講座も売れてほしい🙏</li>
							<li>管理が苦手で、講座のご案内も誰にどれを<br class="pc-only">送ったのか不安に思うことがある💧</li>
							<li>自分がやるべきことに集中して、<br>できるところをなるべく手を離し、<br>時短しながら売り上げもアップしたい💪</li>
						</ul>
					</div>
				</div>
				<div class="merit">
					<img class="arrow-down pc-only" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/arrow_down_blue.svg" width="60" height="117">
					<div class="has-uni">
						<p>もしも一つでも思い当たる悩みがあった方に<br>オススメしたいのが<mark>動画レッスンの配信を<wbr>自動化すること</mark>です。</p>
					</div>
					<h3 class="ribbon-title pink">講座配信の自動化ってなに？</h3>
					<div class="main-text pc-align-center">
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/reading.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/reading@2x.png 2x" width="275" height="275">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/reading_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/reading_large@2x.png 2x" width="366" height="366">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/reading_large.png" loading="lazy">
						</picture>
						<p>レッスンを動画にすることで、<br><span class="pink">あなたが毎回そこにいなくても、<br>毎回付きっきりで受講生さんのフォローをしなくても、</span><br>受講生さんが作りたいものを作ることができるようになります。</p>
						<p>ただし、お申し込みを受け、ご入金していただき、<br>その後お申込者が複数いると、<br><span class="blue">動画のご視聴URLを手動であなたが送っていかなくてはなりません。</span></p>
						<p>管理が苦手という方にとっては、<br><span class="blue">この人に送ったかな？全部ちゃんと送れたかな？</span>と考えてしまい<br>不安でなりませんよね。<br>また単発で１つの動画レッスンが売れたとしても、<br><span class="blue">結局それっきりになってしまった</span>ということもあり得ます。</p>
						<p>受講生さんに対して、次の講座のご案内し、<br>スムーズに売上アップに繋げるためには、<br><span class="pink">受講生さん一人ひとりの状態に合わせてご提案</span>をする必要があります。</p>
						<p>実はこれを自動化することで、<span class="pink">あなたが一人ひとりに送らなくても</span><br>次の講座のご案内もスムーズに流れていくので、<br><span class="pink">あなたが知らない間に売上が上がっていく</span>という状態を作る<br>講座配信の自動化になります。</p>
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign@2x.png 2x" width="323" height="242">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_large@2x.png 2x" width="430" height="322">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_large.png" loading="lazy">
						</picture>
					</div>
					<div class="text-block pink-beige">
						<h4>自動化に<br class="pc-only">必要なものは？</h4>
						<p>自動化に必要なのは<span class="pink">LINE公式のアカウント</span>とLINE公式アカウントの機能を拡張したツール<span class="pink">Lステップ（有料）</span>になります。あなたのお教室の規模に応じて金額が異なります。</p>
					</div>
				</div>
			</section>
			<section class="detail">
				<h3 class="capsule-title">この講座で学べること</h3>
				<ul class="course-menu width-600">
					<li>購入された動画レッスンのスイッチを押し、自動で配信する</li>
					<li>講座が複数ある場合でもそれぞれの講座に合わせて配信ができるようにする方法</li>
					<li>講座が終了した人に対して次の講座のご案内ができる</li>
					<li>次の講座を販売するのに必要な「売れる流れ」作りと「メッセージ作り」も！</li>
				</ul>
				<div class="text-block pink width-600" style="width: max-content;">
					<p><b>LINE公式とLステップの使い分け・自動配信・生徒さんの自動管理方法（配信時）、<br>次の講座の自動ご案内、サポート方法</b>が動画を見ながら学べます！</p>
				</div>
				<div class="recommend has-background yellow-stripe">
					<h3>このような方に<br>オススメです</h3>
					<picture>
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.webp" type="image/webp" width="303" height="164">
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.png 2x" width="303" height="164">
						<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large@2x.png 2x" width="352" height="383">
						<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png" loading="lazy">
					</picture>
					<ul class="check-list">
						<li>ハンドメイド、お料理(パン／お菓子)、<br>アート(文字／イラスト)など<br>何かを「作る」ことを教えるお教室の先生</li>
						<li>眠っているレシピを動画レッスンにして<br>なるべく手をかけずにお客様にご案内し<br>リピート率を上げたい</li>
						<li>自動でできることは全て自動にして、<br>あとは受講生さんとの時間をしっかり確保して<br>信頼関係を構築していきたい</li>
						<li>自分のお教室をエリア限定せず<br class="mobile-only">広げていきたい</li>
					</ul>
				</div>
				<h3 class="capsule-title">講座の受講期間</h3>
				<p class="is-larger">3ヶ月</p>
				<div class="text-block pink width-600">
					<h4>受講期間中に可能なこと</h4>
					<ul>
						<li>受講生様限定サイトの試聴</li>
						<li>月２回のZoomによるサポート<br class="pc-only">（グループワークショップ・グループコンサル）</li>
						<li>FBグループでの質疑応答（受講生様限定のFacebookグループにて質問を受け付けています。わからないことはいつでも担当講師に聞くことができます）</li>
						<li>アーカイブ視聴（グループワークショップやグルコンに参加できなかった時でもZoomの録画でご視聴いただけます）</li>
					</ul>
				</div>
				<h3 class="capsule-title">開催地・開催スケジュール</h3>
				<div style="text-align: center">
					<p style="font-weight: 600;">Merrily Petitはオンラインにて<br class="mobile-only">開講しています。<br>グループコンサルティングは、<br class="mobile-only">平日10：00〜12：00で<br class="mobile-only">開催しております。</p>
					<small style="font-size: 0.875em">※イレギュラー開催もあり</small>
				</div>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Merrily Petitに申し込む</a>
				<h3 class="capsule-title">参加料金</h3>
				<p class="is-larger">19万8000円<span>(税込)</span></p>
				<p class="balloon yellow width-600">動画レッスンの作り方が学べる講座<b>「Darling（ダーリン）」</b>と<br>合わせて受講が可能です。</p>
				<div style="padding-top: 1.5rem; text-align: center;">
					<h4 style="font-family: 'dnp-shuei-mgothic-std', sans-serif; color: #EA4086; font-size: 1.5rem; line-height: 1">Darling<span style="color: #9A7A74">＋</span>Merrily Petit</h4>
					<p class="is-larger" style="margin: 0.75em auto">33万円<span>(税込)</span></p>
					<small style="font-size: 1rem">︎※Darlingについては<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=1" class="text-link">こちら</a></small>
				</div>
				<div class="text-block brown width-600">
					<h4>お支払い方法は<br class="mobile-only">下記よりお選びいただけます。</h4>
					<ol>
						<li>銀行振込一括払い</li>
						<li>カード一括払い</li>
						<li>カード３回払い(66,000円×３回)</li>
					</ol>
				</div>
				<section class="present">
					<div class="inner has-background pink-windowpane">
						<h3>お申し込み特典をご用意！</h3>
						<dl class="width-600">
							<div>
								<div class="title">特典<span>1</span></div>
								<dt>講師のコミュニティサロン<br>THE DREAM ＋ SALON(月額5500円)<br>３ヶ月間無料でご利用いただけます。<small>＊1万6500円相当</small></dt>
								<dd>「みんなはどうしているのかな？」「こんな時どう調べたらいいのかな？」などわからないこと、知りたいことなどもコミュニティサロンで解決！オンラインお茶会も定期的に開催されています。先輩講師さんたちとも交流できますのでモチベーションアップに役立ちます！</dd>
							</div>
							<div>
								<div class="title">特典<span>2</span></div>
								<dt>「ファンができる<br class="mobile-only">インスタグラムプロフィールの作り方」の<br>動画レッスンをプレゼント<small>＊3万3000円相当</small></dt>
								<dd>フォロワー増やしは不要。本当のファンを作るために必要な最強プロフィール作りを動画レッスンで学んでいただきます。</dd>
							</div>
							<div>
								<div class="title">特典<span>3</span></div>
								<dt>動画を使った集客と<br class="mobile-only">販売のスキルを実践で学ぶ<br>THE DREAMの体験会にご招待<small>＊5500円相当（1回限り）</small></dt>
							</div>
						</dl>
					</div>
				</section>
				<h3 class="capsule-title">講師紹介</h3>
				<div class="width-600">
					<ul class="instructors">
						<li>
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka@2x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka@2x.jpg 2x" width="178" height="178" alt="金坂てるよさん" loading="lazy">
								<h4>金坂てるよさん</h4>
							</div>
							<p>布小物製作からがま口に一点集中し、KURUMIYUを主宰で立ち上げる。がま口講師活動をメインとして、市場調査のためのイベント出展「がま口作家活動」を楽しむ。東京ビッグサイトデザインフェスタ、名古屋クリエーターズマーケット、France Japan Expo Paris出展を経験し、現在ハンドメイド講師オンライン化の実践塾THE DREAMでは配信系担当。THE DREAMの姉妹講座Merrily、Merrily Petitでのメイン講師を担当。</p>
						</li>
					</ul>
				</div>
				<h3 class="capsule-title">お申し込みの流れ</h3>
				<ol class="flow">
					<li>
						<h4>お申し込み</h4>
						<p>お申し込みフォームをタップして<br class="pc-only">必要事項を選択・記入して「確定ボタン」をタップ。</p>
					</li>
					<li>
						<h4>お支払い</h4>
						<p>自動返信メールにてお支払いのご案内が届きます。<br class="pc-only">お申し込み後から３日以内に指定の支払い方法にてお支払いをお願いします。</p>
					</li>
					<li>
						<h4>講座のご案内が到着</h4>
						<p>お支払い確認後、追って事務局より<br class="pc-only">入金のご確認メールと特典に関するご案内、<br class="pc-only">講座の会員サイトに関するご案内をお送り致します。<br><small>※土日にかかる場合は、翌週以降での対応となります</small></p>
					</li>
				</ol>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button"><span class="arrow"></span>Merrily Petitに<wbr>申し込む</a>
				<span class="has-slash">Darlingと合わせて申し込む方は<wbr>こちらから</span>
				<a href="https://1lejend.com/stepmail/kd.php?no=dufdvylT" class="join" role="button" style="column-gap: 13px;"><span class="arrow"></span>Darling<span style="color: #FFDD2D;">+</span><wbr>MerrilyPetitに<br class="mobile-only">申し込む</a>
			</section>
			<section class="qa">
				<hgroup>
					<p>講座の自動配信 <span>MerrilyPetit</span></p>
					<h2>Q&amp;A</h2>
				</hgroup>
				<dl>
					<dt>動画レッスンを作ったことがありませんが受講可能ですか？<span></span></dt>
					<dd>はい、可能です。<br>しかしながら動画レッスンを自動で配信するための講座のため、動画レッスンは受講スタート時にはご用意できていたほうがいいと思います。</dd>
				</dl>
				<dl>
					<dt>会員サイトはいつまで視聴できますか？<span></span></dt>
					<dd>現在会員サイトとして使っているサービスが終了もしくは大幅な変更がない限り、半永久的にご視聴いただけます。</dd>
				</dl>
				<dl>
					<dt>Lステップを使わない方法を教えてもらえますか？<span></span></dt>
					<dd>いいえ。本講座ではLステップを活用して自動配信ができるようになる講座です。<br>他の方法につきましてはご提供致しかねます。</dd>
				</dl>
				<dl>
					<dt>Merrily PetitとMerrilyの違いは何ですか？<span></span></dt>
					<dd>
						<p>Merrily Petitは既にある動画レッスンを自動で配信したり、アップセルをしてリピート購入を自動化するための動線を組む講座です。<br>Merrilyは集客から信頼を構築して、その後に自動で販売をする自動化の流れを学んでいただきます。<br>Merrilyに関しましてはTHE DREAMを受講したことがある方、もしくは教育動画とセールス動画を既にお持ちの方限定で動線を組むところをお伝えしております。<br><br>THE DREAMは動画とライブを使った集客と動画レッスンを売れる流れで販売するためのノウハウを学んでいただく講座となります。<br>動画とライブを使った集客について興味がある方は<a href="<?php echo( home_url() ) ?>/learn-start-business/?panel=3">THE DREAMの体験会</a>にご参加ください。</p>
					</dd>
				</dl>
			</section>
		</section>
		<section id="panel-3" role="tabpanel" aria-labelledby="tab-3" tabindex="0" hidden>
			<header>
				<span class="sub-title">動画・ライブ集客×仕組み化</span>
				<h2 class="ruby"><span class="rt">ザ・ドリーム</span><span class="en">THE DREAM</span></h2>
				<p class="pc-align-center">あなたの大切なお教室・技術を<br>あなたと同じ価値観を持つ素敵な生徒さまと一緒に広げるために必要な<br>集客・仕組み化・WEBマーケティングスキルを<br>学んでいただきます。</p>
				<a href="https://liff.line.me/1654316206-4wwV32Yl/landing?follow=%40017itwdk&lp=sP1jHu&liff_id=1654316206-4wwV32Yl" class="join" role="button"><span class="arrow"></span>THE DREAMの<wbr>体験会に申し込む</a>
			</header>
			<section class="introduction">
				<div class="has-background wave">
					<div class="worry">
						<h3>このような<br>お悩みは<br>ありませんか？</h3>
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry@2x.png 2x" width="185" height="242">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large@2x.png 2x" width="304" height="358">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/worry_large.png" loading="lazy">
						</picture>
						<ul class="check-list">
							<li>お教室を始めたけれど集客ができない💦</li>
							<li>インスタを頑張っていても売上にならない💦</li>
							<li>毎月のレッスンメニューを<br class="mobile-only">考え続けるのが大変💦</li>
							<li>大切な技術をしっかりと教えたいけれど<br>自分と同じ思いを持つ生徒さんと<br class="mobile-only">出会えない💦</li>
							<li>高額講座に参加した経験があるけれど<br>ハンドメイドの場合にはどうしたらいいのか<br>しっくりこないまま終わってしまった💧</li>
						</ul>
					</div>
				</div>
				<div class="merit">
					<img class="arrow-down pc-only" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/arrow_down_blue.svg" width="60" height="117">
					<div class="has-uni">
						<p>もしも一つでも思い当たる悩みがあった方に<br>オススメしたいのが<br><b>ハンドメイドに特化した動画・<br class="mobile-only">ライブを使った集客スクール</b><mark>THE DREAM</mark>です。</p>
					</div>
					<h3 class="ribbon-title pink">たくさんのハンドメイドの夢を叶えてきました！</h3>
					<div class="balloons">
						<ul class="pc-align-center">
							<li class="pink animation">
								<p>ハンドメイドの幸せを<br>たくさんの女性に<br>提供するために<br><b>協会を設立しました！</b></p>
							</li>
							<li class="yellow animation">
								<p><b>好きなものを<br>作りたいだけ</b>作れるし、<br>いつでも生徒さんに<br>来てもらえる<b>アトリエを<br>持つことができました！</b></p>
							</li>
							<li class="pink animation">
								<p>受講生さんと一緒に<br><b>海外販売も目指しています！</b><br>そのための海外イベントに<br>積極的に参加できるように<br>なりました！</p>
							</li>
							<li class="yellow animation">
								<p>自分が<br>働きたい時間を決めて、<br>夜と土日は<b>家族との時間を<br>楽しめるように</b><br>なりました！</p>
							</li>
						</ul>
						<picture>
							<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_twinkle.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_twinkle@2x.png 2x" width="303" height="226">
							<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_twinkle_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_twinkle_large@2x.png 2x" width="404" height="302">
							<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/ok-sign_twinkle_large.png" loading="lazy" style="display: block; margin: 0 auto">
						</picture>
					</div>
				</div>
			</section>
			<section class="detail">
				<h3 class="capsule-title">この講座で学べること</h3>
				<ul class="course-menu width-600">
					<li>高くても生徒様が喜んでレッスンを「受講したい」と選んでくれる！あなたの強みを活かした講座・カリキュラムの作り方</li>
					<li>あなたの作品に本当に興味を持った見込み客と出会うためのインスタグラムの活用方法</li>
					<li>あなたの講座に、本当に興味を持ってくれる見込み客に行動してもらえるLP作り</li>
					<li>見込み客があなたの「大ファン」になる！動画の台本作り・撮影・動画編集・公開方法</li>
					<li>売り込まなくても自然に「やりたいです！」と言ってもらえるようになる<br>魔法のセールスクロージング（質問方法）</li>
					<li>集客から動画だけで販売に繋げる動線の作り方</li>
					<li>世界中の受講生さんに講座をお届けできるオンライン化</li>
				</ul>
				<div class="text-block pink width-600">
					<p><b>再現性のあるお教室の収益の上げ方・経営方法</b>が<br>実践を通して学んでいただけます。</p>
				</div>
				<div class="recommend has-background yellow-stripe">
					<h3>このような方に<br>オススメです</h3>
					<picture>
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.webp" type="image/webp" width="303" height="164">
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.png 2x" width="303" height="164">
						<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large@2x.png 2x" width="352" height="383">
						<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png" loading="lazy">
					</picture>
					<ul class="check-list">
						<li>ハンドメイド、お料理(パン／お菓子)、<br>アート(文字／イラスト)など<br>何かを「作る」ことを教えるお教室の先生</li>
						<li>お教室を始めたものの集客ができない</li>
						<li>他のお教室との差別化ができない</li>
						<li>自分のお教室をエリア限定せず広げていきたい</li>
					</ul>
				</div>
				<a href="https://liff.line.me/1654316206-4wwV32Yl/landing?follow=%40017itwdk&lp=sP1jHu&liff_id=1654316206-4wwV32Yl" class="join" role="button"><span class="arrow"></span>THE DREAMの<wbr>体験会に申し込む</a>
				<h3 class="capsule-title">講座の受講期間</h3>
				<p class="is-larger">6ヶ月</p>
				<div class="text-block pink width-600">
					<h4>受講期間中に可能なこと</h4>
					<ul>
						<li>Zoomでの月１回の講義（第３金曜日 10：30～17：00）Zoom録画あり</li>
						<li>会員サイトのご視聴</li>
						<li>グループコンサルティングによるアドバイス(担当講師３名のグループコンサルティングは合計で月に10回以上開催されています。ご予約の上、必要アドバイスを無制限で受けていただくことができます）</li>
					</ul>
				</div>
				<h3 class="capsule-title">開催地・開催スケジュール</h3>
				<div style="text-align: center">
					<p style="font-weight: 600;">THE DREAMは基本、<br class="mobile-only">オンラインにて開講しています。<br>開催スケジュールにつきましては<br class="mobile-only"><a href="<?php echo( home_url() ) ?>/archives/" class="text-link">NEWS</a>にてご案内をしています。</p>
				</div>
				<h3 class="capsule-title">講師紹介</h3>
				<div class="width-600">
					<ul class="instructors">
						<li>
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/akemi-matsudo@2x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/akemi-matsudo.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/akemi-matsudo@2x.jpg 2x" width="178" height="178" loading="lazy" alt="マツドアケミ">
								<h4>マツドアケミ</h4>
							</div>
							<p>THE DREAM 主宰／<br class="mobile-only">有限会社Blooming代表取締役<br>世界最強と言われるアメリカ発のマーケティング手法でもある動画を使った集客を習得し月商1000万円を達成。<br class="mobile-only">その後、動画と相性の良い自動化の仕組みを導入し、年商1億を達成。学んだスキルとお教室経営の仕組み化をハンドメイドなど女性向けお教室・サロン講師に特化して伝授するTHE DREAMを立ち上げる。総受講者数300名越え。月商100万円、年商1000万円越えの講師を多く輩出。</p>
						</li>
						<li>
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka@2x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/tomoka-nonaka@2x.jpg 2x" width="178" height="178" loading="lazy" alt="野中ともかさん">
								<h4>野中ともかさん</h4>
							</div>
							<p>趣味からスタートしたデコ作品作りをきっかけにプロフェッショナルの資格を取得。<br class="mobile-only">「WOW & SMILE」をテーマにオーダー作品を作るMERMAID-VISION.デコショップを運営。デザインフェスタやホビーショー等に出展・委託販売・雑誌掲載を重ね、海外公式スヌーピー映画のグッズ作り、数々のコンテスト入賞などを経験を持つ。現在はハンドメイドに特化したオンライン化の実践塾THE DREAMでサイト作り、動画作りの専任講師としても活躍中。自らも動画を使ったレッスンを開講し、全国各地から生徒さんが集まる人気オンライン教室を開催。</p>
						</li>
						<li>
							<div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka@2x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/teruyo-kanesaka@2x.jpg 2x" width="178" height="178" alt="金坂てるよさん" loading="lazy">
								<h4>金坂てるよさん</h4>
							</div>
							<p>布小物製作からがま口に一点集中し、KURUMIYUを主宰で立ち上げる。がま口講師活動をメインとして、市場調査のためのイベント出展「がま口作家活動」を楽しむ。東京ビッグサイトデザインフェスタ、名古屋クリエーターズマーケット、France Japan Expo Paris出展を経験し、現在ハンドメイド講師オンライン化の実践塾THE DREAMでは配信系担当。THE DREAMの姉妹講座Merrily、Merrily Petitでのメイン講師を担当。</p>
						</li>
					</ul>
				</div>
				<h3 class="capsule-title">お申し込みの流れ</h3>
				<p class="pc-align-center">毎月開催している<b>体験セミナー</b>にお申し込み下さい。<br>日程が合わない方の場合には弊社ドリームプランナーが<br>個別での面談をさせていただきます。</p>
				<a href="https://liff.line.me/1654316206-4wwV32Yl/landing?follow=%40017itwdk&lp=sP1jHu&liff_id=1654316206-4wwV32Yl" class="join" role="button"><span class="arrow"></span>THE DREAMの<wbr>体験会に申し込む</a>
			</section>
			<section class="qa">
				<hgroup>
					<p>動画&LIVE集客 <span>THE DREAM</span></p>
					<h2>Q&amp;A</h2>
				</hgroup>
				<dl>
					<dt>資格は持っていますが、お教室をやったことがありません。<br>対象になりますか？<span></span></dt>
					<dd>はい、対象になります。<br>逆に資格を持っていなくてもお教室を始めることは可能ですが、集客のスキルは必ず必要になると思いますのでお役に立てれば嬉しいです。</dd>
				</dl>
				<dl>
					<dt>作家としての活動経験はありますが、在庫を持つお仕事に疲れと不安を感じるようになりました。<br>講師業未経験ですが参加は可能でしょうか？<span></span></dt>
					<dd>はい、可能です。<br>過去にもたくさんの方が講師経験ゼロでお教室をスタートできる講座作り、集客を習得されてきました。<br>在庫を持たずとも収益を上げることが可能です。講師デビューを応援します。</dd>
				</dl>
				<dl>
					<dt>ハンドメイドではありませんが、講師をやっています。<br>参加は可能ですか？<span></span></dt>
					<dd>はい、可能です。<br>代表のマツドアケミはハンドメイドを全くやっていませんが、コーチング・マーケティングの講座を開催しております。<br>どのビジネスにおいても通用する集客・マーケティングのスキルを身につけることが可能です。</dd>
				</dl>
				<dl>
					<dt>パソコンを持っていませんが、講座の受講は可能ですか？<span></span></dt>
					<dd>
						<p>はい、可能です。<br>Zoomを立ち上げたり、会員サイトをご視聴いただけるようでしたら講座の受講は可能です。<br>ただし、ご自身がオンライン講座をやろうと考えている場合、パソコンはあったほうが便利です。</p>
					</dd>
				</dl>
			</section>
		</section>
		<section id="panel-4" role="tabpanel" aria-labelledby="tab-4" tabindex="0" hidden>
			<header>
				<span class="sub-title">ハンドメイドの「売り方」を教える</span>
				<div class="heading-container">
					<div class="img-container">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/rosette@2x.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/rosette.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/rosette@2x.png 2x" width="139" height="147" loading="lazy" alt="ハンドメイドの仕事塾®マツドアケミ認定">
					</div>
					<h2><span class="small">ハンドメイドの仕事塾<span class="sup"><span class="r-mark">®</span></span></span><span class="pink">認定講師</span><br class="mobile-only"><span class="brown">養成講座</span></h2>
				</div>
				<div class="pc-align-center main-text">
					<p>どんなにかわいい作品が作れても、売れなかったらお仕事にはなりません。<br>ハンドメイド作家さんに足りないスキルは<br>技術でもセンスでもなく<span class="pink">マーケティング</span>です。</p>
					<p>ハンドメイドの仕事塾®認定講師養成講座は<br><span class="blue">「どうやって売ったらいいのかわからない」「売ってはみたものの売れない…」</span>に<br>悩むハンドメイド作家さんに<br>マーケティングスキルをお教えする私たちの仲間になっていただくために<br><span class="pink">必要なノウハウを学んでいただく講座</span>です。<br>この講座では、あなた自身の販売スキルも見直すことができます。</p>
				</div>
				<div class="conclusion" style="position: relative;">
					<p style="position: relative; width: 259px; height: 259px; padding-top: 5em; border-radius: 50%; background-color: #FFF7CD; text-align: center;">あなたと同じように頑張る<br>ハンドメイド作家さんを応援する<br><b>マツドアケミ認定講師</b>に<br>なりませんか？</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/akemi-matsudo@2x.jpg" width="121" height="121" loading="lazy" alt="マツドアケミ" data-filename="icon">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_l.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_s.png 243w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_m.png 412w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/lady_l.png 824w" sizes="(max-width:999px) 185px, 362px" data-filename="lady" loading="lazy">
				</div>
				<small class="pc-align-center" style="display: block; font-size: 0.875em">※マツドアケミ認定講師になるためには<br>ハンドメイドの仕事塾®認定講師養成講座（スタート／レベルアップ講座）をご受講いただき、<br>認定を受ける必要があります。</small>
				<a href="<?php echo( home_url() ) ?>/learn-to-sell/#instructors" class="join" role="button" style="margin-top: 1.1em;"><span class="arrow"></span>認定講師は<wbr>どんな人たちがいるのか<wbr>知りたい方はこちら</a>
			</header>
			<section class="detail">
				<div class="recommend has-background yellow-stripe">
					<h3>このような方に<br>オススメです</h3>
					<picture>
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.webp" type="image/webp" width="303" height="164">
						<source media="(max-width:999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose@2x.png 2x" width="303" height="164">
						<source media="(min-width:1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large@2x.png 2x" width="352" height="383">
						<img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/guts-pose_large.png" loading="lazy">
					</picture>
					<ul class="check-list">
						<li>作家業を頑張ってきたけれど、<br>自分の経験を活かして<br>次のステージにステップアップしたい</li>
						<li>マーケティングスキルを習得し、<br>ハンドメイド作家さんと一緒に成長したい</li>
						<li>頑張っているハンドメイド作家さんを<br>自分の経験とマーケティングスキルで<br class="mobile-only">励ましたり、応援したい</li>
						<li>仕事としてハンドメイドに取り組む作家さんの<br>コミュニティ作りに活かしたい</li>
					</ul>
					<div class="person">
						<ul>
							<li>ハンドメイド販売の<br>経験者さん</li>
							<li>ハンドメイドの<br>講師さん</li>
							<li>ハンドメイドの<br>委託店の<br>オーナーさん</li>
						</ul>
						<p>にオススメです！</p>
					</div>
				</div>
				<h3 class="ribbon-title pink">ハンドメイド作家さんの<wbr>ステージに<wbr>合わせて<wbr>講座のご案内が<wbr>できます</h3>
				<p class="pc-align-center"><b>販売経験ゼロの人</b>と<b>販売経験があるけれど売れない人</b>では<br>必要なマーケティングスキル、マインドセットが違います。<br>そこでハンドメイドの仕事塾®︎では<b>ハンドメイド作家さんの「今」の状態</b>に合わせて<br>必要なマーケティングスキルをお教えできる<b>２つの養成講座</b>をご用意しました。</p>
				<div class="mobile-only skip-links">
					<div class="start" role="button">
						<a href="#start-course"></a>
						<p>販売未経験者さん<span>向け</span></p>
						<h4><span>ハンドメイド作家</span>スタート講座認定講師<div class="circle"><span>養</span><span>成</span><span>講</span><span>座</span></div></h4>
					</div>
					<div class="level-up" role="button">
						<a href="#levelup-course"></a>
						<p>販売経験はあるけれど、「売れない」とお悩みの方<span>向け</span></p>
						<h4><span>ハンドメイド作家</span>レベルアップ講座認定講師<div class="circle"><span>養</span><span>成</span><span>講</span><span>座</span></div></h4>
					</div>
				</div>
				<div class="container courses">
					<div id="start-course" class="start">
						<hgroup>
							<p class="bubble"><span>販売未経験者さん<span class="accent-color">向け</span></span></p>
							<h4><span>ハンドメイド作家</span><br>スタート講座認定講師<div class="circle"><span>養</span><span>成</span><span>講</span><span>座</span></div></h4>
						</hgroup>
						<div class="inner">
							<p class="main-text pc-align-center">作るだけでなく「売る」を実現するために<br>ハンドメイド作家のスタートとして<br>必要な準備を一緒に整えていく講座が<br>開催できます。</p>
							<h5>このような人向けに<br class="mobile-only">講座が開催できます！</h5>
							<ul class="course-menu">
								<li>いつかは販売したいと思っている方</li>
								<li>販売してみたいけれど、何からやったらいいのかわからない方</li>
								<li>ハンドメイドマーケットで販売したい方</li>
								<li>SNSは苦手なのでSNSを使わないでも<br>活動できるようになりたいと思っている方</li>
							</ul>
							<h5>この講座で学べること</h5>
							<ul class="course-menu">
								<li>０→１（販売未経験者向けで作品がある人向け）への講座</li>
								<li>ハンドメイドマーケットでの販売スキル</li>
								<li>作品販売前の準備物<br class="mobile-only">（ブランド名、値段の付け方）</li>
								<li>minne、Creemaで販売するために必要な準備、登録、コツ</li>
								<li>マーケットサイト掲載のためのスマホ写真講座</li>
								<li>作家デビューする際の心の持ち方</li>
							</ul>
						</div>
					</div>
					<div id="levelup-course" class="level-up">
						<hgroup>
							<p class="bubble"><span>販売経験はあるけれど、<br>「売れない」とお悩みの方<span class="accent-color">向け</span></span></p>
							<h4><span>ハンドメイド作家</span><br>レベルアップ講座<br class="mobile-only">認定講師<div class="circle"><span>養</span><span>成</span><span>講</span><span>座</span></div></h4>
						</hgroup>
						<div class="inner">
							<p class="main-text pc-align-center">「売れない」と悩んでいるほとんどの人が<br>ブランドの軸がありません。<br>まずはブレない土台を作り、ブランディングの基礎を<br>しっかり固めた上で販売できるようになることを<br>目的とした講座が開催できます。</p>
							<h5>このような人向けに<br class="mobile-only">講座が開催できます！</h5>
							<ul class="course-menu">
								<li>自己流で販売を始めたが、月商２～３万円未満</li>
								<li>作品作りがブレているのを自覚している</li>
								<li>私といえば「これ！」と自信を持って<br class="pc-only">発表できるようになりたい</li>
								<li>月商３万円以下の人で<br class="pc-only">現状の２倍の売上UPを目指したいと思っている</li>
								<li>ファン作りとインスタグラムでの売れる動線作りがしたい！</li>
							</ul>
							<h5>この講座で学べること</h5>
							<ul class="course-menu">
								<li>コンセプトを固めるストーリーメイキング<br>ブレない土台作り</li>
								<li>ペルソナ設定とペルソナにあった作品展開方法</li>
								<li>売上を上げるための商品構成と価格設定</li>
								<li>インスタグラムからの販売につなげる動線作り</li>
								<li>インスタグラムで活用できるスマホ写真の撮影方法など</li>
								<li>作家として、揺らぐことのないブランドの土台作り</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="main-text pc-align-center">
					<p>スタート講座・レベルアップ講座共に<br>生徒さんを集めるために<span class="pink">集客スキル・販売スキル</span>も合わせて習得できます。</p>
					<p><span class="blue">認定資格を取ったけれど、生徒さんが集まらない、<br>どうやったら集まるのかわからない</span>という方の声を多く聞いてきました。</p>
					<p>そのためハンドメイドの仕事塾®︎では<br><span class="pink">集客と講座の販売のためのセールス</span>についても講義があります。<br>一緒に、ハンドメイドの夢が叶う場所を作っていきましょう。</p>
				</div>
				<h3 class="capsule-title">開催地・開催スケジュール</h3>
				<p style="text-align: center">オンラインにて開講しています。</p>
				<h3 class="capsule-title">お申し込みの流れ</h3>
				<p style="text-align: center">開催スケジュールは<br class="mobile-only"><a href="<?php echo( home_url() ) ?>/archives/" class="text-link">NEWS</a>にてご案内をしています。<br>ご案内をお待ちくださいませ。<br><small>本講座へのご相談、ご質問は<a href="<?php echo( home_url() ) ?>/#contact" style="text-decoration: none; font-size: 1rem; font-weight: 600">こちら</a></small></p>
			</section>
			<section class="qa">
				<hgroup>
					<p>「売り方」を教える <span>ハンドメイドの仕事塾®<wbr>認定講師養成講座</span></p>
					<h2>Q&amp;A</h2>
				</hgroup>
				<dl>
					<dt>ハンドメイド作家未経験ですが、認定講師になることはできますか？<span></span></dt>
					<dd>いいえ、基本的にハンドメイド作家としての活動経験が役立つ講座になります。</dd>
				</dl>
				<dl>
					<dt>作家活動はした経験がありますが、それほど売れていませんでした。<br>認定講師になることはできますか？<span></span></dt>
					<dd>はい、可能です。<br>マーケティングをしっかりと学んでいただきますので、ご自身も一緒に成長しながらスキルアップ、売上アップを目指していただけます。</dd>
				</dl>
				<dl>
					<dt>講座の内容にとても興味がありますが、講座を終了後、独立してハンドメイド販売の講師になることは可能でしょうか？<span></span></dt>
					<dd>いいえ、できかねます。<br>ご受講の際にも確認をさせていただきますが、受講の目的は私たちと一緒にハンドメイド作家さんの支援をすることです。<br>認定後、認定講師として活動をするか、否かにつきましてお決めいただくことができますが、独立してハンドメイド販売講師として活動することはできません。</dd>
				</dl>
				<dl>
					<dt>認定講師として活動後、途中で認定講師をやめることはできますか？<span></span></dt>
					<dd>
						<p>はい、できます。<br>ただし契約書上、認定講師としての活動終了の書類を記載してから1年間は競業避止義務がございます。<br>ハンドメイドの販売スキルをお教えする講座は、有料・無料問わず開催できません。</p>
					</dd>
				</dl>
			</section>
		</section>
	</div>
	<span class="has-slash click-here">４つの講座の詳細はこちら！<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/learn-start-business/go.png" width="146" height="136" alt="Go!" style="vertical-align: -0.7em;"></span>
	<div role="tablist">
		<button data-tab="1" role="tab" aria-controls="panel-1" aria-selected="true" tabindex="-1"><span>1</span>動画の作り方</button>
		<button data-tab="2" role="tab" aria-controls="panel-2" aria-selected="false" tabindex="0"><span>2</span>講座の自動配信</button>
		<button data-tab="3" role="tab" aria-controls="panel-3" aria-selected="false" tabindex="0"><span>3</span>動画&LIVE集客</button>
		<button data-tab="4" role="tab" aria-controls="panel-4" aria-selected="false" tabindex="0" style="letter-spacing: -0.08em;"><span>4</span>「売り方」を教える</button>
	</div>
	<script>
		$(document).ready(function () {
			const tabs = $('[role="tab"]');
			const tabList = $('[role="tablist"]');
			let tabPram = ['1', '2', '3', '4'];
			let pram = getParam('panel');
			let defaultPanelValue = '1';

			tabs.on("click", (e) => {
				changeTabs(e.target);
			});

			if (pram && $.inArray(pram, tabPram) !== -1) {
				changeTabs( $('button[data-tab="'+ pram +'"]') );
			} else {
				window.history.pushState({}, '', window.location.pathname + '?panel=' + defaultPanelValue);
			}

			function changeTabs(targetElement) {
				const uniqueTarget = $(targetElement);
				const parent = uniqueTarget.parent();
				const grandParent = parent.parent();
				let tabId = uniqueTarget.attr('data-tab') ? uniqueTarget.attr('data-tab') : null;

				tabList.find('[aria-selected="true"]').attr("aria-selected", false);
				tabList.find('[tabindex="-1"]').attr('tabindex', '0');
				grandParent.find('[role="tabpanel"]').attr("hidden", true);
				grandParent.parent().find(`#${uniqueTarget.attr("aria-controls")}`).removeAttr("hidden");
				$('html').animate({scrollTop: $('#course').position().top}, 500, 'swing');

				if (tabId) {
					const commonTarget = $('button[data-tab="'+ tabId +'"]');
					commonTarget.attr("aria-selected", true);
					commonTarget.attr('tabindex', '-1');
					window.history.pushState( {}, '', window.location.pathname + '?panel=' + tabId );
				}
			}

			function getParam(name, url) {
				if (!url) url = window.location.href;
				name = name.replace(/[\[\]]/g, "\\$&");
				let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
					results = regex.exec(url);
				if (!results) return null;
				if (!results[2]) return '';
				return decodeURIComponent(results[2].replace(/\+/g, " "));
			}
		});
	</script>
</section>
<section class="qa" style="background-color: #FFECF4;">
	<hgroup>
		<p>お教室開業を学ぶコース</p>
		<h2>Q&amp;A</h2>
	</hgroup>
	<dl>
		<dt>まだ一回も教えたことがないのですが参加できますか？<span></span></dt>
		<dd>はい、できます。<br>むしろお教室をお仕事にするために必要なスキルを学んでいただくことができます。ぜひご参加下さい。<br>ただし「認定講師養成講座」に関しましては、講師経験がある方に限らせていただいております。</dd>
	</dl>
	<dl>
		<dt>動画を作ったことがありませんがオンライン化できますか？<span></span></dt>
		<dd>はい、できます。<br>まずはどのようなオンライン化がしたいかを体験会でご相談ください。<br>あなたの理想に合ったオンライン化をご提案します。</dd>
	</dl>
	<dl>
		<dt>パソコンが使えないのですが参加できますか？<span></span></dt>
		<dd>はい、できます。<br>講座のほとんどが動画をご視聴いただき、zoomでサポートをさせていただいております。そのため最初の段階ではスマートフォンがあれば受講が可能です。<br><br>ただし、ご自身の講座をオンライン化したい場合には、どのようなオンライン化にするかによって違いますが、パソコンの方が作業が便利な時があります。ご自身の学びの経過でお考えいただいても大丈夫です。</dd>
	</dl>
	<dl>
		<dt>私はハンドメイド作家ですがTHE DREAM講座に参加できますか？<span></span></dt>
		<dd>THE DREAM講座は、現在ハンドメイド作家という方でも、これからお教室開業や講師活動を視野に入れている方であれば、ご参加いただけます。</dd>
	</dl>
</section>
<?php include( STYLESHEETPATH . '/include/qa.php'); ?>
<?php get_footer('nosidebar'); ?>
