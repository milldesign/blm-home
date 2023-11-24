<?php
/**
 * 会社案内および利用規約
 */

 if ( !defined( 'ABSPATH' ) ) exit;
	get_header();

	if ( maintenance_mode_enable() ) {
		echo callback_maintenance_html();
		get_footer('nosidebar');
		return;
	}
?>
<section id="about">
	<h1>
		<picture>
			<source media="(max-width:  999px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/about.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/about@2x.png 2x" width="239px" height="113px">
			<source media="(min-width: 1000px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/about_large.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/about_large@2x.png 2x" width="550px" height="100px">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/about_large.png" alt="Bloomingへようこそ！">
		</picture>
	</h1>
	<p>Bloomingは英語で<br class="mobile-only">「花盛り、真っ盛り」という意味があります。<br>いくつになっても<br>いくつであっても<br>夢を持ち、夢を実現することにワクワクしたい!<br>Bloomingはそんな女性たちの夢を<br>キレイに咲かせるお手伝いをしています。</p>
</section>
<section id="message">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/message.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/message@2x.png 2x" alt="Message from Akemi Matsudo" class="img1">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/matsudo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/matsudo@2x.png 2x" alt="マツドアケミ" class="img2">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari@2x.png 2x" alt="" class="img3">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari@2x.png 2x" alt="" class="img4">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/kirari@2x.png 2x" alt="" class="img5 pc-only">
	<div class="con">
		<h3><span class="bb">代表マツドアケミからのメッセージ</span></h3>
		<p>To make dreams bloom  beautifully<br>あなたの夢を美しく咲かせましょう</p>
		<p>夢を持つこと、そしてそれを実現したいと思うことは<br>生きていく上でとても大切な心の支えになります。</p>
		<p>私自身、いつも夢に支えられてきました。</p>
		<p>たとえば、今、子育てが大変でも、<br>親の介護がつらくても、<br>今やっていることがうまくいっていなくても<br><br>夢を持ち、夢に向かって何かを掴み取ろうと思う気持ちがあれば、<br>行動が変わってきます。</p>
		<p>行動が変われば、人生は必ず変わります。</p>
		<p>女性は特に、家族のため、<br>子どものためと自分の夢すら後回しにしてしまいがちです。</p>
		<p>あなたの夢を美しく咲かせましょう！</p>
		<p>お花はそれぞれに咲く時期が<br>違いますが、<br>早くても遅くても<br>寒くても暑くても<br>美しい花を咲かせて<br>まわりの人を喜ばせてくれます。</p>
		<p>私たち一人ひとりが<br>自分らしく<br>美しい夢の花を咲かせ、<br>自分のまわりにいる大切な人たちを<br>喜ばせ、感謝され続けていくために<br>「知識」と「学び」を提供しています。</p>
		<p>Blooming<br>「花咲り・真っ盛り」</p>
		<p>あなたの今、そして未来が<br>そうでありますように！</p>
	</div>
</section>
<section id="company">
	<div class="con">
		<h3><span class="bb">会社案内</span></h3>
		<div class="inner">
			<div class="inner_l">
				<table>
					<tr>
						<td><strong>社名</strong></td>
						<td>有限会社Blooming</td>
					</tr>
					<tr>
						<td><strong>代表取締役社長</strong></td>
						<td>松戸明美</td>
					</tr>
					<tr>
						<td><strong>設立</strong></td>
						<td>2003年1月21日</td>
					</tr>
					<tr>
						<td><strong>資本金</strong></td>
						<td>300万円</td>
					</tr>
				</table>
				<p><span class="maru">●</span>千葉オフィス<br>〒276-0020<br>千葉県八千代市勝田台北2-15-1 リバーアイランド205号</p>
			</div>
			<div class="inner_r">
				<p><span class="maru">●</span>事業内容</p>
				<ul>
					<li>ハンドメイド作家・ハンドメイドビジネスのためのマーケティングセミナー、オンラインセミナーを開催する雑貨の仕事塾®️の企画、運営</li>
					<li>女性向けの勉強会、教室、コミュニティづくり・動画を使った集客のコンサルティング</li>
					<li>店舗(雑貨のセレクトショップ・カフェ)の解説、運営に関するコンサルティング</li>
					<li>雑貨の企画・制作・コンサルティング</li>
					<li>アーティスト(ハンドメイドクリエーター・アーティスト・イラストレーター)のマネジメントとプロモーション</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="cancel">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/cancel.svg" width="384" height="36" alt="Cancel and repayment">キャンセルポリシー</h2>
	<div class="honmon">
		<p style="margin: 0 auto 35px;"><span class="is-pink">必ず本キャンセルポリシーを熟読し、ご理解した上でお申込みください。お申込み頂いた時点で本キャンセルポリシーに全て同意いただいたものとします。</span></p>
		<h3>ご入金前(仮申込み)のキャンセル</h3>
		<ul>
			<li>お申し込み後5日以内にお支払いがない場合には自動キャンセルとさせていただきます。</li>
			<li>講座参加のお申し込み後キャンセルの必要がある場合には必ず講座開催の7日前までにメールでご連絡ください。(雑貨の仕事塾サポートチーム宛→ask@zakkazakka.com) </li>
			<li>キャンセルは当社がメールを受け取った日時が適用されます。</li>
			<li>サポートチームの営業は月曜日〜金曜日10時から17時まで(祝日を除く)となります。17時以降のメール受信に関しては翌日受付となりますのでご注意ください。</li>
		</ul>
		<h3>キャンセルポリシー(本申込み後)</h3>
		<ul>
			<li>本商品および本サービスは秘匿性の高い情報を動画・資料などで提供しているという特性上、お客様都合による返品・返金はお受けしておりません。</li>
			<li>当社都合による単発講座(開催所要時間 2〜3 時間程度の講座)を中止とする場合は、講師の急病などのやむを得ない場合を除き、原則として講座開催の3日前までにサポートチームよりメールでご連絡いたします。その場合の受講料は全額返金いたします。なお、当社から単発講座日時の変更又は中止のご連絡を行わない限り、天候などの事由によりキャンセルされる場合にもお客様の都合でのキャンセルとなり、受講料の返金はいたしません。</li>
			<li>当社動画コンテンツの瑕疵に基づくキャンセル<br>当社の提供する動画コンテンツに瑕疵が発見されたときは、瑕疵を補修した動画コンテンツを適切な方法で提供するものとし、返金・返品はお受けしません。</li>
			<li>クーリングオフについて<br>特定商取引法に規定されているクーリングオフが適用されるサービスではありません。</li>
			<li>定期課金方式の注意事項<br>契約期間途中の解約となった場合も契約満了日までの料金が発生し、日割清算等による返金を含めた一切の返金は行われません。この場合、サービスも契約満了まで提供されます。</li>
		</ul>
	</div>
</section>
<section id="service">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/terms.svg" width="282" height="28" alt="Terms of service">ご利用規約</h2>
	<div class="honmon">
		<p>有限会社 Blooming のサイトをご覧いただきましてありがとうございます。<br class="br_pc">必ず本利用規約を熟読し、ご理解いただきました上で、有限会社 Blooming の提供するサービス、コンテンツ、講座をご利用くださいますようお願いします。なお、サービス、コンテンツ、講座にお申し込みをいただきました時点で、本利用規約に同意したものとさせていただきます。</p>
		<h3 class="is-pink">ルールとマナーを守りましょう</h3>
		<p>ルールやマナーに反した内容のメールや問い合わせに関しては当社のルールに基づいてお返事はいたしません。また代表者 松戶明美(マツドアケミ)と本サイトにご協力いただいている著者の方々についての個人的なご質問などにも対応致しかねますのでご了承ください。</p>
		<h3 class="is-pink">ルールやマナーに反した内容とは?</h3>
		<ul>
			<li>本サイトや運営者に同意や感想を求め、その回答を本サイトとは全く無関係の場所で掲載するための質問</li>
			<li>明確な回答が存在しえないものについて意見を求め、本サイトや運営者に議論を持ち掛けることを目的としたメールや問合せ</li>
			<li>本サイトと無関係のサイトからの相互リンク、スポンサー要請、広告要請、営業目的のメールや問合せ</li>
			<li>脅しや迷惑メールなどで本サイトや運営者に対する嫌がらせの為のメールや問合せ</li>
			<li>本サイトや運営者の趣旨から外れたデータの収集要請や会員の募集等の誘いを目的としたメールや問い合わせ </li>
			<li>メールに対する結果報告や締め切られた質問が記載されたメールや問い合わせ</li>
			<li>本サイトや運営者とのメールのやり取りを強要するメールや問い合わせ</li>
			<li>内容が明らかに批判であるメールや問い合わせ</li>
			<li>同一内容のメールや問い合わせを回答が得られるまで投稿する場合</li>
			<li>html や php 等のプログラムファイル以外の画像や音楽等のファイルを直接リンクするメール</li>
		</ul>
		<h3 class="is-pink">禁止事項の徹底をお願いします</h3>
		<p>本サイトでは「利用規約」および本サイトの運営ルールに従って禁止事項を設けております。<br class="br_pc">特に教材の複製、コピー、類似内容にて 修正の上、営利目的で活用する場合、転売、本サイト上の掲載の写真、文字の複製、は厳しく罰せられるべき手段を講じています。<br class="br_pc">「利用目的」をきちんとご一読の上、あなたの素晴らしい夢を実現する一歩として有限会社Blooming が提供する講座およびコンテンツを楽しくご利用いただけましたら幸いです。</p>
		<h3 style="width: 100%; background: #ffecf4; text-align: center; letter-spacing: .1em; margin: 52px auto 18px auto !important; font-weight: 600;">有限会社Blooming受講規約</h3>
		<p style="margin-bottom: 18px;">講座受講規約をご確認いただき、お申し込みください。<br>本講座の受講申込み後、受講料の決済が完了した時点で、本規約を了承したものとみなします。</p>
		<div class="kiyaku">
			<div class="kiyaku_l">
				<h4>第1条（適用範囲）</h4>
				<p>本規約は、有限会社Blooming（以下「当社」）の運営する全ての講座及びハンドメイドの仕事塾®️認定講師が開催するハンドメイドの仕事塾®️の講座（以下、「本講座」）を対象として効力を生じます。本規約は予告無く変更される場合があります。<br>規約が変更された場合は、受講中の受講者に通知するものとします。</p>
				<h4>第2条（受講の申込み）</h4>
				<p>本講座の受講申込みは、本規約の内容を理解し、手続き方法に従い、住所、氏名、電話番号、メールアドレスなどの必要事項を申込書に記載して提供するものとします。</p>
				<h4>第3条（受講契約の成立）</h4>
				<p>本講座の受講申込み後、受講料の決済が完了した時点で受講契約が成立するものとします。</p>
				<h4>第4条（受講料金）</h4>
				<ol>
					<li>受講料の額は、講座ごとに定めるものとします。</li>
					<li>受講料の支払いは、銀行振込またはクレジットカード決済によるものとし、支払いにかかる手数料は受講生の負担とします。</li>
				</ol>
				<h4>第5条 (講座の提供方法について)</h4>
				<p>＜提供方法＞<br>動画、もしくはzoom講義による講座の提供、および、各講座ごとのサポートは入塾時の講座説明のとおりとなります。</p>
				<h4>第6条（受講者情報の利用）</h4>
				<ol>
					<li>当社は、受講者が本講座を受講する過程において登録された情報をプライバシーポリシーに従い利用する事ができるものとします。</li>
					<li>当社は、各講座の講義中に受講生の撮影又は動画撮影を行い、これを資料又は販促として、当社のホームページやSNS媒体等への掲載を行うことがあります。</li>
				</ol>
				<h4>第7条（禁止事項）</h4>
				<ol>
					<li>本講座に含まれる一切の情報、アイディア、手法、技術、名称その他の情報、本講座において提供される教材、ワークシート、書籍、ロゴマーク、会員サイト内の内容、有限会社Blooming代表松戸明美のブログを含むSNS媒体で発信しているノウハウ、著作権及び商標権その他、一切の権利は全て有限会社Bloomingに帰属し、受講者、又は第三者は、これらの権利を侵害する一切の行為を行ってはならないものとします。</li>
					<li>受講内容をいかなる方法においても第三者に対して、<wbr>販売、<wbr>配布、<wbr>貸与、<wbr>譲渡、<wbr>使用許諾を行ってはならないものとします。<wbr></li>
					<li>受講者は本講座の受講に際して、他受講者から取得した一切の情報について、いかなる理由でも第三者に開示、又は漏洩してはならないものとします。</li>
					<li>受講者は、当社を介さずに講師（講師が経営に関わる団体を含む）から、有償無償を問わず、本講座と類似するサービス提供（ハンドメイド販売指導、コンサルティング等）を受けてはならないものとします。</li>
					<li>受講者と講師及び他の受講者との間で、本講座と類似するサービス提供（ハンドメイド販売指導、コンサルティング等）に関し、金銭、有価証券（デジタルの利用券を含む）及び物品等の授受をしてはならないものとします。</li>
					<li>受講者、第三者、当社を誹謗中傷する行為。</li>
					<li>宗教的又は政治的、営業的勧誘事項の行為。</li>
					<li>その他法令に違反する一切の行為。</li>
					<li>受講者が本規約に違反する行為を行った場合、当社が法令に基づき請求する事ができる損害賠償に加え、法令で許容される限度で違約金として支払うものとします。又、違反したその時点において、受講生としての権利を失い、以降の講座の受講・グループコンサルティングの参加、動画の視聴は不可とし、受講料の返金は行わないものとします。</li>
				</ol>
				<h4>第8条（受講者資格の中断・取り消し）</h4>
				<p style="margin-bottom: 1em;">受講者が以下の項目に該当する場合、及び第７条の禁止事項に該当する場合は、当社は事前に通知することなく、直ちに受講契約を解除することができるものとします。</p>
				<ol>
					<li>本規約に違反した場合</li>
					<li>受講申し込みにおいて、虚偽の申告を行った事が判明した場合。</li>
					<li>受講者が独自、又は組織的に営利、又はその準備を目的とした行為。</li>
					<li>講座内容を適切に理解できない可能性がある場合。その他当社が本講座の受講者としての適格性に欠けると判断した場合。</li>
					<li>疾病、傷害その他の事由により、医師の診断又は加療を要する状態で、受講が困難であると当協会が認めた場合。</li>
					<li>受講者について民事再生、破産等の申し立てが有った場合。又は受講者が成年後見等の開始決定を受けた場合。</li>
					<li>その他、受講者として不適切と当社が判断した場合。</li>
				</ol>
				<h4>第9条（受講料の返金）</h4>
				<p>動画を使ったオンライン講座という講座の特性上、動画視聴ページのURLのお渡し以降はいかなる理由でも受講料の返金は行わないものとします。</p>
				<h4>第10条（本講座の振替）</h4>
				<ol>
					<li>本講座開始後、受講者が講座に出席できない場合において、当社代表が承認した場合のみ、欠席した講座に限り次期に開催される同一の講座に振替えて参加することができます。ただし、振替希望は第８条５に該当し、次期に同講座が開催される場合のみ適用します。 </li>
					<li>振替は１回のみとなります。</li>
					<li>天変地異・自然災害・天候に影響されるやむを得ない事由により本講座が中止（遅延含む）された場合は、日程を変更して開催するものとします。なお、当社は、これに関連し受講者に生じた損害に対する賠償の義務を負わないものとします。</li>
				</ol>
			</div>
			<div class="kiyaku_r">
				<h4>第11条（損害賠償）</h4>
				<ol>
					<li>受講者が、本講座に起因または関連して当社、代表・松戸明美、または認定講師に対して損害を与えた場合、受講者は一切の損害を補償するものとします。</li>
					<li>本講座に起因または関連して、受講者と他の受講者その他の第三者との間で紛争が発生した場合、受講者は自己の費用と責任において、その紛争を解決するとともに、当社、代表・松戸明美及び認定講師に損害が及んだ場合、その保証に当たるものとします。</li>
				</ol>
				<h4>第12条（免責）</h4>
				<p>当社は交通機関のトラブル、台風、地震などの自然災害にその責めに帰すことが出来ない事由により生じた損害、その他以下の事由に起因して生じた損害については、理由の如何を問わず一切の責任を負わないものとします。</p>
				<h4>第13条（著作物）</h4>
				<ol>
					<li>本講座の受講において、受講者が受領した動画・テキスト等の著作物（デザイン等を含め、以下「本著作物等」という。）に関する著作権は当社に帰属し、受講者が当社の事前の承諾を得ずに、当該著作権を侵害する行為（次に掲げる行為を含むがこれらに限らない）を行うことを禁じます。</li>
					<li>①本著作物等の内容を、自己又は第三者の名をもってウェブサイトに掲載する等インターネットを通じて公衆に送信する行為<br>②本著作物等の内容を、引用の範囲を超えて自己又は第三者の著作物に掲載する行為<br>③私的利用の範囲を超えて、本著作物等を複製・改変等をして第三者に販売、贈与、配布、貸与（有償、無償を問わず）する行為<br>④本著作物等をオークション等に出品する行為<br>⑤その他、当社の著作権その他知的財産権等の権利（法的に保護された利益も含む）を侵害する行為</li>
					<li>前項の著作権侵害があった場合には、当社の指示に従い、著作権を侵害しているものを廃棄するなど適切な処理をするものとします。</li>
					<li>受講者は、本著作物等を注意義務をもって適切に管理するものとします。</li>
					<li>本著作物等を用いて特許権、意匠権、商標権などの知的財産を自己又は第三者をして権利化してはならないものとします。</li>
				</ol>
			<h4>第14条（秘密保持）</h4>
			<ol>
				<li>受講者は、本講座を受講するにあたり、当社によって開示された講座内容、運営上その他事業の情報並びに他の受講者より開示されたそのプライバシーに関わる情報を秘密として扱うものとし、これらの情報を使用し、又は第三者に開示することを禁じます。</li>
				<li>前項の秘密保持義務は、本講座の受講が終わった後も負うものとします。</li>
			</ol>
			<h4>第15条（遵守事項）</h4>
			<p style="margin-bottom: 1em;">受講者は、本講座を受講するにあたり、次に掲げる事項を遵守してください。また、本講座の最中に下記の行為を発見した場合には、受講場所から退室するものとします。</p>
			<ol>
				<li>本講座及び認定講師の指示に従わないこと、及び他の受講者の迷惑になるような行為、言動等をしないこと。</li>
				<li>他の受講者に対して、ネットワークビジネスや、その他連鎖販売取引への勧誘、宗教等への活動の勧誘（これらの勧誘とみなされる一切の行為を含む）を行わないこと。</li>
				<li>他の受講生に対して自身及び外部のサービス・商品・講座を直接勧誘・販売・マージンを取るなどして営業行為を行わないこと。（ただし、一般に公開している情報を見て他の受講生が購入することは承認します）</li>
				<li>本講座及び認定講師の許可なく、特定のグループを作らないこと。</li>
				<li>本講座の内容を当社及び担当講師の許可なく録音又は録画、撮影を行わないこと。</li>
				<li>本講座の内容につき、録音又は録画した場合には直ちに記録媒体を破棄すること。</li>
				<li>本講座の受講において知り得た内容につき、その完全性、有用性、正確性、将来の結果等について、当社及び講師に一切の責任を求めないこと。</li>
			</ol>
			<h4>第16条（管轄裁判所）</h4>
			<p>本規約を巡る一切の紛争は千葉県地方裁判所を第一審の専属管轄裁判所とします。</p>
			<h4>第17条（協議事項）</h4>
			<p>本規約の解釈について疑義が生じた場合又は定めのない事項については、信義誠実の原則に従い協議の上、円滑に解決を図るものとします。<br>本規約は、2022年10月より実施します。</p>
			<p style="text-align: right;">以上</p>
		</div>
	</div>
	</div>
</section>
<section id="commercial">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/commercial.svg" width="670" height="35" alt="Specified Commercial Transaction Law">特定商取引法</h2>
	<div class="honmon" style="margin-bottom: 38px">
		<table class="mb_honmon_table">
			<tr>
				<td class="td1">会社概要</td>
				<td class="td2">
					<table>
						<tr>
							<td><strong>事業者</strong></td>
							<td>有限会社 Blooming</td>
						</tr>
						<tr>
							<td><strong>代表者名</strong></td>
							<td>松戸明美</td>
						</tr>
						<tr>
							<td><strong>所在地</strong></td>
							<td>(サポートチーム)〒276-0020 千葉県八千代市勝田台北2-15-1 ﾘﾊﾞｰｱｲﾗﾝﾄﾞ205号</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">電話番号</td>
				<td class="td2">047-427-7339</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">ホームページ</td>
				<td class="td2"><a href="https://zakkazakka.com">zakkazakka.com</a></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">お問合せ</td>
				<td class="td2">こちら(ask@zakkazakka.com)からお問合せください。
					<ul>
						<li>サポートチームは祝祭日を除く月〜金(10 時〜17 時)で対応しております。</li>
						<li>回答に関しまして調査が必要な場合、3 日〜1 週間程度お時間を頂く場合がございます。</li>
						<li>万が一メールのお返事がないという場合にはエラーもしくは迷惑メール入りをしている可能性もあります。迷惑メールに当社からのメールが入っていないかをご確認いただき、なおかつ届いていない場合には再度ご連絡を頂けますようお願い致します。</li>
						<li>携帯やスマートフォンのメールアドレスの場合、PC からのメール受信を拒否している可能性もありますのでご注意ください。</li>
					</ul>
				</td>
			</tr>
		</table>
		<table class="mb_honmon_table2">
			<tr>
				<td class="td1">販売方法</td>
				<td class="td2">
					<ul>
						<li>販売価格 該当する講座・サービスの募集ページに記載しています。(税込み価格にて表示しております。)<br>＜提供商材＞
							<ul>
								<li>ハンドメイド販売に関する講座：3,000円〜33万円</li>
								<li>経営者向けマーケティング講座：2,000円〜132万円</li>
								<li>ハンドメイドコミュニティ：5,500円〜11,000円</li>
							</ul>
						</li>
						<li>販売価格以外でお客様に発生する金銭 当サイトのページの閲覧・コンテンツ購入・ソフトウェアのダウンロード等に必要となるインターネット接続料金、通信料金はお客様のご負担となります。 </li>
						<li>お支払い方法 銀行振込と当社指定のオンライン決済サイトにて承っております。(講座・サービスによっては銀行振込のみ、カード支払いのみの場合もあります。)銀行振込の場合には振込手数料をお客様にご負担いただいております。当社指定のオンライン決済サイトをご利用の際に、お客様のアカウントのご登録が必要な場合がございます。(オンライン決済サイトとはインターネット上でデビットカード・クレジットカード・電子マネーなどを使って決済を行うことの総称です。弊社ではクレジットカードによる一括払いもしくは分割払いをお選びいただけます。)</li>
						<li>商品のお届け方法・時期 該当する講座・サービスの募集ページに特段記載がない場合は、入金確認後３営業日以内に詳細をご連絡いたします。</li>
						<li>お申込みの有効期限 ◦お申込みメールを当社が受け取った段階で仮申込みとなります。折り返し入金の流れについてのメールをお送りいたしますのでご確認ください。</li>
						<li>当社で入金確認がとれた段階で本申込みもしくはご購入となります。 </li>
						<li>お申し込み後 5 日以内にご入金がない場合には自動的にキャンセル扱いになります。 </li>
						<li>利用規約とキャンセルポリシー 本申込みまたはご購入いただいた時点で、ご購入者様は当社ご利用規約とキャンセルポリシーに同意されたとみなします。</li>
					</ul>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">動作環境</td>
				<td class="td2">推奨ブラウザ<br> (※映像が途切れたり乱れる可能性がありますので、安定した Wi-Fi 環境下でのご視聴をお勧めします)
					<div class="browser">
						<div>
							<p class="has-background gray">OS</p>
							<p>Windows 8.1 以降　7 でも可能<br>Mac OS 10.11 以降　10.10 でも可能</p>
						</div>
						<div>
							<p class="has-background gray">ブラウザ</p>
							<p>Microsoft Edge 最新バージョン<br>Firefox 最新版<br>Chrome 最新版<br>Safari の最新版<br>Internet Explorer11</p>
						</div>
						<div>
							<p class="has-background gray">スマートフォン、タブレット</p>
							<p>Android 4.X 以降<br>Apple iOS 最新<br>プラグイン:Adobe Flash Player ;<br> Adobe Reader が必要です</p>
						</div>
					</div>
					<br>上記環境以外では、正常に動作しなかったり画面表示がくずれたりする可能性があります。ご利用いただいているブラウザの種類・バージョンをご確認いただき、推奨環境でのご利用をおすすめします。(※推奨環境はあくまでも目安であり、全ての動画の視聴を保障しているわけではありません)</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">キャンセルに<br class="brpc">ついて</td>
				<td class="td2">
					<ul>
						<li>有限会社 Blooming の提供するサービス・コンテンツ・講座は秘匿性の高い情報を動画・資料などで提供しているという特性上、お客様都合による返品・返金はお受けしておりません。</li>
						<li>当社都合による単発講座(開催所要時間 2〜3 時間程度の講座)を中止とする場合は、講師の急病などのやむを得ない場合を除き、原則として講座開催の 3 日前までにサポートチームよりメールでご連絡いたします。その場合の受講料は全額返金いたします。なお、当社から単発講座日時の変更又は中止のご連絡を行わない限り、天候などの事由によりキャンセルされる場合にもお客様の都合でのキャンセルとなり、受講料の返金はいたしません。当社の提供する動画コンテンツに瑕疵が発見されたときは、瑕疵を補修した動画コンテンツを適切な方法で提供するものとし、返金・返品はお受けしません。</li>
					</ul>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">クーリングオフに<br class="brpc">ついて</td>
				<td class="td2">特定商取引法に規定されているクーリングオフが適用されるサービスではありません。
					<ul>
						<li>定期課金方式の注意事項 契約期間途中の解約となった場合も契約満了日までの料金が発生し、日割清算等による返金を含めた一切の返金は行われません。この場合、サービスも契約満了まで提供されます。</li>
					</ul>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td class="td1">免責事項</td>
				<td class="td2">ご購入の商品に示された表現や再現性には個人差があり、必ずしも利益や効果を保証するものではありません。</td>
			</tr>
		</table>
	</div>
</section>
<section id="privacy">
	<h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/terms/privacy.svg" width="236" height="36" alt="Privacy policy">個人情報保護方針</h2>
	<p class="honmon" style="margin: 35px auto;">有限会社Blooming（以下「弊社」といいます。）は、本ウェブサイト上で提供するサービス（以下、「本サービス」といいます。）における、弊社サービスをご利用いただいた方又は弊社サービスにご関心をお持ちの方（以下「ユーザー」といいます）の個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。</p>
	<div class="honmon">
		<div class="honmon_l">
			<h3>第1条（本ポリシーの適用範囲及び変更）</h3>
			<ol>
				<li>本ポリシーは、サービスごとに定めるプライバシーポリシー、サービスの利用規約及びこれに付随する規約又はガイドライン（以下「規約等」といいます）とともに、あらゆるサービスの利用に適用されます。なお、規約等の規定と本ポリシーの規定が抵触する場合には、規約等が優先して適用されます。</li>
				<li>弊社は、本ポリシーを随時更新することがあります。本ポリシーの重要な変更は、最新の本ポリシーとともに弊社のウェブサイトに掲示します。本ポリシーの変更は、弊社がウェブサイト上に掲載した時点から適用されるものとします。</li>
			</ol>
			<h3>第2条（個人情報）</h3>
			<p>「個人情報」とは、個人を識別できる情報をいい、氏名をはじめ、特定の個人を識別することができる情報、並びに特定の個人を識別することができる情報と結びついて使用される住所、生年月日、電話番号、性別、ご職業、メールアドレス、アカウント情報（ID及びパスワード等）、端末情報、位置情報、サービスの利用履歴、クレジットカード情報、ニックネーム等の情報、及び趣味、家族構成、年齢、その他の個人に関する属性情報を含むものを指します。</p>
			<h3>第3条（個人情報の収集方法）</h3>
			<p>弊社は、ユーザーが利用登録をする際に氏名、生年月日、住所、電話番号、メールアドレス、銀行口座番号、クレジットカード番号などの個人情報をお尋ねすることがあります。また、ユーザーと弊社の提携先（情報提供元、広告主、広告配信先などを含みます。以下，｢提携先｣といいます。）などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を、提携先などから収集することがあります。</p>
			<h3>第4条（個人情報を収集・利用する目的）</h3>
			<p style="margin-bottom: 1em;">弊社にて取得する個人情報とその利用目的は以下のとおりです。なお、弊社へ個人情報の提供を希望されない場合、ご本人様ご自身の判断により、個人情報を提供しないことは可能ですが、その場合、明示した利用目的を達成できない場合がありますので、あらかじめご了承ください。</p>
			<ol>
				<li>ユーザーに関する個人情報の利用目的
					<ul style="margin-bottom: 0.8em;">
						<li>サービスの提供 </li>
						<li>本人確認及び認証 </li>
						<li>アンケート及びキャンペーンの実施 </li>
						<li>プレゼントの発送 </li>
						<li>ユーザーからの問い合わせへの対応 </li>
						<li>電子メール等による商品・サービス・キャンペーン等の広告・情報提供（* 1・* 2）</li>
						<li>広告配信事業者を利用した行動ターゲティング広告の配信（* 1・* 2） </li>
						<li>趣味・嗜好等の把握のための弊社が取得した属性情報・行動履歴等の分析（* 2） </li>
						<li>サービスの改良及び新サービス開発 </li>
						<li>サービスに関する満足度の調査 </li>
						<li>マーケティング調査、統計処理及び分析</li>
					</ul>
					<p style="margin-bottom: 0.5em; font-size: 0.9em;">* 1 ユーザーから取得したウェブサイトの閲覧履歴や購買履歴等の情報を分析して、サービスの提供、広告配信等をいたします。<br>* 2 弊社以外の第三者から取得したユーザーの趣味嗜好・閲覧履歴等の情報を弊社が既に有しているユーザーの個人情報と紐づけて利用する場合があります。<br>この場合にはユーザーからあらかじめ同意を取得するとともに、上記に掲げる利用目的の範囲内において利用いたします。</p>
				</li>
				<li>弊社は、保有するすべての個人情報を、個人を特定しない統計情報として利用・公表し、またはWebサイトの最適化及びお客様との最適なコミュニケーションのための分析として利用する場合があります。</li>
				<li>個人情報の利用は、ご本人様に明示した利用目的の範囲内で利用いたします。また、利用目的の範囲を超えて利用する場合は、その旨を連絡し、同意をいただいた場合に限り利用いたします。</li>
				<li>本サービスに登録されると、ビジネス・パートナーが発行するメルマガに登録されます。</li>
			</ol>
			<h3>第5条（個人情報の管理）</h3>
			<p>弊社は、お客様の個人情報を正確かつ最新の情報に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するためセキュリティシステムの維持・管理体制の整備、安全対策を実施し個人情報の厳重な管理を行います。</p>
			<h3>第6条（個人情報の第三者提供）</h3>
			<ol>
				<li>
					弊社は、お預かりした個人情報を第三者に提供することは行いません。ただし、以下の場合は除きます。
					<ol style="margin-bottom: 0.8em;">
						<li>ユーザーから上記提供について個別に同意を得た場合 </li>
						<li>第4条（個人情報を収集・利用する目的）の達成に必要な範囲内で、個人情報等の全部又は一部を弊社の業務委託先へ提供する場合。この場合、弊社は、業務委託先に対し情報管理に関する適切な監督を行ったうえで提供を行います。なお、上記業務委託先への提供においては、当該業務委託先が、自らが保有するお客様に関する情報と弊社から提供された個人情報を突合することがあります。お客様は、本プライバシーポリシーへの同意をもって、上記の突合についてもご同意いただいたこととなりますので、ご留意ください。</li>
						<li>法令の規定に基づいて、司法、行政またはこれに類する機関から情報の提出要請を受けた場合</li>
					</ol>
				</li>
				<li>
					前項の定めにかかわらず、次に掲げる場合には当該情報の提供先は第三者に該当しないものとします。
					<ol>
						<li>弊社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</li>
						<li>合併その他の事由による事業の承継に伴って個人情報が提供される場合</li>
						<li>個人情報を特定の者との間で共同して利用する場合であって、その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し、または本人が容易に知り得る状態に置いた場合 なお、弊社は、お客様から同意を得た場合等、個人情報保護法で認められる場合を除き、個人情報を海外にある第三者に提供することはありません。</li>
					</ol>
				</li>
			</ol>
			<h3>第7条（匿名加工情報の取扱い）</h3>
			<ol>
				<li>弊社は、匿名加工情報を作成するときは、特定の個人を識別すること及びその作成に用いる個人情報を復元することができないようにするため、法令の定めに従い、必要な措置を講じます。</li>
				<li>弊社は、匿名加工情報を作成したときは、当該匿名加工情報の安全管理のために必要かつ適切な措置を講じ、また、当該匿名加工情報に含まれる個人に関する情報の項目を公表します。</li>
				<li>弊社は、匿名加工情報を第三者に提供するときは、あらかじめ第三者に提供される匿名加工情報に含まれる個人に関する情報の項目及びその提供方法について公表するとともに、当該第三者に対して、当該提供に係る情報が匿名加工情報である旨を明示します。</li>
				<li>弊社は、匿名加工情報を作成して自ら当該匿名加工情報を取り扱うときは、匿名加工情報の作成に用いられた個人情報に係る本人を識別するために、当該匿名加工情報を他の情報と照合することを行いません。</li>
			</ol>
		</div>
		<div class="honmon_r">
			<h3>第8条（個人情報の取扱いの委託）</h3>
			<p>弊社は、個人情報の取扱いの一部を第三者に委託することがありますが、委託にあたっては、事前に当該第三者と安全管理措置の遵守について定めた契約を締結し、当該第三者に対し必要かつ適切な監督を行います。</p>
			<h3>第9条（クッキー及びIPアドレス等に関して）</h3>
			<ol>
				<li>弊社は、弊社サービスにおいて、クッキー（cookie）及びウェブビーコン（web beacon）を使用することがあります。弊社は、クッキー及びIPアドレス等の情報（ウェブビーコンによるものを含む）について、特定の個人を識別できるものではないため、個人情報とは考えておりません。ただし、特定の個人を識別できる情報が一体となって使用される場合には、これらの情報も個人情報として扱います 。</li>
				<li>
					弊社は、弊社サービスの利用状況を把握するために、以下の各社によって提供されるターゲティング広告サービスを利用しております。このため、一部のページにおいて以下の各社から提供されるクッキーを使用しています。クッキーの使用に関する説明、クッキーによって取得される情報、オプトアウトの手続について詳しくお知りになりたい方は、以下の各社のウェブサイトをご確認ください。
					<ul style="margin-bottom: 0.8em;">
						<li>Googleポリシーと規約：<br><a href="https://www.google.com/intl/ja/privacy/privacy-policy.html">https://www.google.com/intl/ja/privacy/privacy-policy.html</a></li>
						<li>Yahoo! JAPANが配信する広告などへのパーソナルデータの利用：<br><a href="http://btoptout.yahoo.co.jp/optout/index.html">http://btoptout.yahoo.co.jp/optout/index.html</a></li>
						<li>Facebook広告について：<br><a href="https://www.facebook.com/help/769828729705201">https://www.facebook.com/help/769828729705201</a></li>
					</ul>
				</li>
				<li>弊社は、弊社が取得したクッキーと、他サイトを訪問した際に記録された弊社以外のクッキーによって取得された情報を個人が識別できない形で組み合わせて、弊社および弊社以外のマーケティング活動（広告配信含む）への利用を行う場合があります。</li>
			</ol>
			<h3>第10条（個人情報の訂正および削除）</h3>
			<ol>
				<li>ユーザーは、弊社の保有する自己の個人情報が誤った情報である場合には、弊社が定める手続きにより、弊社に対して個人情報の訂正、追加または削除（以下、「訂正等」といいます。）を請求することができます。</li>
				<li>弊社は、ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には、遅滞なく、当該個人情報の訂正等を行うものとします。</li>
				<li>弊社は、前項の規定に基づき訂正等を行った場合、または訂正等を行わない旨の決定をしたときは遅滞なく、これをユーザーに通知します。</li>
			</ol>
			<h3>第11条（個人情報の利用停止等）</h3>
			<ol>
				<li>弊社は、本人から個人情報が利用目的の範囲を超えて取り扱われているという理由、または不正の手段により取得されたものであるという理由により、その利用の停止または消去（以下、「利用停止等」といいます。）を求められた場合には、遅滞なく必要な調査を行います。</li>
				<li>前項の調査結果に基づき、その請求に応じる必要があると判断した場合には、遅滞なく、当該個人情報の利用停止等を行います。 </li>
				<li>弊社は、前項の規定に基づき利用停止等を行った場合、または利用停止等を行わない旨の決定をしたときは、遅滞なく、これをユーザーに通知します。</li>
				<li>前２項にかかわらず、利用停止等に多額の費用を有する場合、その他利用停止等を行うことが困難な場合であってもユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は、この代替策を講じるものとします。                       </li>
			</ol>
			<h3>第12条（コミュニティにおける注意事項）</h3>
			<p>弊社では、ユーザーの皆さまによって登録された個人情報の保護に細心の注意を払っておりますが、SNSや掲示板をはじめとするコミュニティなど、ほかのユーザーが閲覧できるサービス上にユーザー本人が自発的に個人情報を登録された場合、意図しない利用がなされる可能性があることに十分ご留意ください。 <br>このように、弊社が用意した個人情報の登録箇所以外の場所において登録された情報は、個人情報の保護の対象外となり、ユーザーご自身の責任となるものとします。</p>
			<h3>第13条（個人情報の開示、相談等に関するお問い合わせ）</h3>
			<ol>
				<li>ユーザーは、ご自身の個人情報について、利用目的に関する通知、開示、訂正、追加若しくは削除又は利用の停止、消去若しくは第三者への提供の停止（以下「個人情報の開示等」といいます。）を要求することができます。個人情報の開示等に関する要求、及び弊社における個人情報の取扱いに関する苦情又は相談等に関するお問い合わせは、第14条記載のお問い合わせ窓口までご連絡ください。なお、バックアップデータ等、その性質上、確認、訂正又は削除等の手続きを行うことができない場合があります。 </li>
				<li>弊社は、ユーザーより個人情報の開示等に関する要求・お問い合わせを受けた場合、個人を識別できる情報（ID・パスワード・氏名・住所・電話番号・生年月日・メールアドレス等）によりご本人様であることを確認いたします。 </li>
				<li>個人情報の開示等に関する要求・お問い合わせを受けた場合、弊社は、ご本人様であることが確認できた場合に限り、合理的な範囲（利用目的の達成に必要な範囲）内において速やかに対応いたします。</li>
			</ol>
			<h3>第14条（お問い合わせ窓口）</h3>
			<p style="margin-bottom: 0.8em;">本ポリシーに関するお問い合わせは、下記の窓口までお願いいたします。</p>
			<p style="margin-bottom: 0.8em;">社名：有限会社Blooming<br>住所：千葉県八千代市勝田台北2-15-1 マンションリバーアイランド205号<br>責任者：松戸明美<br>Eメールアドレス：<a href="mailto:ask@zakkazakka.com">ask@zakkazakka.com</a></p>
			<p style="margin-bottom: 0.8em;">附則</p>
			<p>2022年4月7日 制定</p>
		</div>
	</div>
</section>
<?php get_footer( 'nosidebar' ); ?>