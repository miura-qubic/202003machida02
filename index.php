<!DOCTYPE html>
<html lang="ja">

<head>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_meta.php'); // 共通metaタグ類読み込み ?>
	<title>町田印刷株式会社</title>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_css.php'); // 共通cssファイル読み込み ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/head_end.php'); // 計測タグ類で使用可能 ?>
</head>

<body>


	<div class="loading">

		<div class="first_loading">
			<img src="./assets/images/top/loading.gif">
		</div>

		<div class="second_loading">
				<p>つくるものがのこるものづくり</p>
		</div>

	</div>


	<div id="wrapper">
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); // 共通ヘッダー ?>
		<main>

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ mv ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="mv">
				<div class="mv-swiper swiper-container">
					<div class="swiper-wrapper">
						<div class="item swiper-slide layout01 background01">
							<h2>町田の歴史がつくるもの</h2>
						</div>
						<div class="item swiper-slide layout02 background02">
							<h2>明日に続くものづくり</h2>
						</div>
					</div>
				</div>
				<div class="arrow_wrap">
					<div class="arrow_in">
						<p>Scroll</p>
						<div class="arrow"></div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ mv ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<div class="top01 section">
				<div class="container">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide"><a href="#"><img class="objectCover" src="./assets/images/top/bnr01.png"
										alt="紙面昇温装置 SION"></a></div>
							<div class="swiper-slide"><a href="#"><img class="objectCover" src="./assets/images/top/bnr02.png"
										alt="多言語アプリdeインバウンド施策"></a></div>
							<div class="swiper-slide"><a href="#"><img class="objectCover" src="./assets/images/top/bnr03.png"
										alt="紙面昇温装置 SION"></a></div>
							<div class="swiper-slide"><a href="#"><img class="objectCover" src="./assets/images/top/bnr04.png"
										alt="紙面昇温装置 SION"></a></div>
						</div>

						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					<div class="swiper_pagination_wrap">
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>

			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="top02">
				<div class="container">
					<div class="ttl_wrap">
						<div class="ttl_wrap_inner">
							<p class="sub_ttl anton">Service</p>
							<h2 class="ttl">町田印刷ができること</h2>
						</div>
					</div>
					<div class="box">
						<div class="box_in left">
							<div class="img">
								<picture>
									<source media="(min-width: 768px)" srcset="./assets/images/top/top02_01.png">
									<source media="(max-width: 767px)" srcset="./assets/images/top/top02_01_sp.png">

									<img src="./assets/images/top/top02_01.png">
								</picture>
							</div>
							<div class="item">
								<div class="txt">
									<h3 class="notoSerif">印刷のご依頼</h3>
									<p>
										お客様に寄り添った<br>
										町田のワンストップサービス
									</p>
								</div>
							</div>
						</div>

						<div class="container02">
							<div class="links_wrap">
								<a href="#" class="links_box">
									<div class="img01 img">
										<img src="./assets/images/top/top02_02.png">
									</div>
									<div class="links_txt">
										<div class="img">
											<img src="./assets/images/top/top02_icon01.png">
										</div>
										<p class="links_ttl notoSerif">印刷会社様</p>
										<div class="icon_wrap">
											<p>設備</p>
											<p>拠点</p>
										</div>
										<p class="en anton">Printing Company</p>
										<span class="btn_line"></span>
									</div>
								</a>
								<a href="#" class="links_box">
									<div class="img01 img">
										<img src="./assets/images/top/top02_03.png">
									</div>
									<div class="links_txt">
										<div class="img">
											<img src="./assets/images/top/top02_icon02.png">
										</div>
										<p class="links_ttl notoSerif">一般企業様</p>
										<p class="en anton">General Company</p>
										<span class="btn_line"></span>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="box">
						<div class="box_in right">
							<div class="img">
								<picture>
									<source media="(min-width: 768px)" srcset="./assets/images/top/top02_04.png">
									<source media="(max-width: 767px)" srcset="./assets/images/top/top02_04_sp.png">

									<img src="./assets/images/top/top02_04.png">
								</picture>
							</div>
							<div class="item">
								<div class="txt">
									<h3 class="notoSerif">印刷以外のご依頼</h3>
									<p>
										社名は「町田印刷」ですが、<br>
										結構いろいろやります
									</p>
								</div>
							</div>
						</div>

						<div class="container02">
							<div class="links_wrap02">
								<a href="#" class="links_box">
									<div class="img">
										<img src="./assets/images/top/top02_icon03.png">
									</div>
									<p class="ttl notoSerif">企画<span class="anton">Plan</span></p>
									<span class="btn_line"></span>
								</a>

								<a href="#" class="links_box">
									<div class="img">
										<img src="./assets/images/top/top02_icon04.png">
									</div>
									<p class="ttl notoSerif">制作<span class="anton">Creative</span></p>
									<span class="btn_line"></span>
								</a>

								<a href="#" class="links_box">
									<div class="img">
										<img src="./assets/images/top/top02_icon05.png">
									</div>
									<p class="ttl notoSerif">販促物<span class="anton">Promotional</span></p>
									<span class="btn_line"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top03 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="top03">
				<div class="container">
					<div class="ttl_wrap white txtL">
						<div class="ttl_wrap_inner">
							<p class="sub_ttl anton">Information</p>
							<h2 class="ttl">町田印刷について</h2>
						</div>
					</div>
					<div class="box">
						<div class="box_in">
							<a href="#">
								<div class="img">
									<img src="./assets/images/top/top03_01.png">
								</div>
								<div class="txt_wrap">
									<p class="ttl notoSerif">会社情報<span class="anton">Company</span></p>
									<div class="btn_wrap">
										<span class="btn_line"></span>
									</div>
								</div>
							</a>
							<a href="#">
								<div class="img">
									<img src="./assets/images/top/top03_02.png">
								</div>
								<div class="txt_wrap">
									<p class="ttl notoSerif">採用情報<span class="anton">Recruit</span></p>
									<div class="btn_wrap">
										<span class="btn_line"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top03 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top04 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="top04">
				<div class="container">
					<div class="ttl_wrap white">
						<div class="ttl_wrap_inner">
							<p class="sub_ttl anton">Topics</p>
							<h2 class="ttl">町田あるある</h2>
						</div>
					</div>
					<div class="box">
						<a href="#" class="modal_link01">
							<div class="img">
								<img src="./assets/images/top/top04_01.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link02">
							<div class="img">
								<img src="./assets/images/top/top04_02.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link03">
							<div class="img">
								<img src="./assets/images/top/top04_03.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link04">
							<div class="img">
								<img src="./assets/images/top/top04_04.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link05">
							<div class="img">
								<img src="./assets/images/top/top04_05.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>

						<a href="#" class="modal_link06">
							<div class="img">
								<img src="./assets/images/top/top04_06.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link07">
							<div class="img">
								<img src="./assets/images/top/top04_07.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link08">
							<div class="img">
								<img src="./assets/images/top/top04_08.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link09">
							<div class="img">
								<img src="./assets/images/top/top04_09.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
						<a href="#" class="modal_link10">
							<div class="img">
								<img src="./assets/images/top/top04_10.png">
							</div>
							<div class="icon img">
								<div class="plus_icon">
									<img src="./assets/images/top/top04_plus_icon.png">
								</div>
							</div>
						</a>
					</div>
					<div class="m-modal-area-contents">
						<div class="m-modal-area modal_box01">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal01.png" width="811" height="547" usemap="#map-modal-close01">
										<map name="map-modal-close01">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box02">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal02.png" width="811" height="547" usemap="#map-modal-close02">
										<map name="map-modal-close02">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box03">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal03.png" width="811" height="547" usemap="#map-modal-close03">
										<map name="map-modal-close03">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box04">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal04.png" width="811" height="547" usemap="#map-modal-close04">
										<map name="map-modal-close04">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box05">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal05.png" width="811" height="547" usemap="#map-modal-close05">
										<map name="map-modal-close05">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box06">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal06.png" width="811" height="547" usemap="#map-modal-close06">
										<map name="map-modal-close06">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box07">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal07.png" width="811" height="547" usemap="#map-modal-close07">
										<map name="map-modal-close07">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box08">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal08.png" width="811" height="547" usemap="#map-modal-close08">
										<map name="map-modal-close08">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box09">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal09.png" width="811" height="547" usemap="#map-modal-close09">
										<map name="map-modal-close09">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
						<div class="m-modal-area modal_box10">
							<div class="m-modal-bg"></div>
							<div class="m-modal-wrapper">
								<div class="m-modal-contents">
									<p class="m-modal-contents-pic">
										<img src="./assets/images/top/img_modal10.png" width="811" height="547" usemap="#map-modal-close10">
										<map name="map-modal-close10">
											<area alt="閉じる" title="閉じる" href="#" class="m-modal-close" coords="765,0,810,45" shape="rect">
										</map>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top04 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->


			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top05 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="top05">
				<div class="container">
					<div class="box">
						<div class="item">
							<div class="ttl_wrap">
								<div class="ttl_wrap_inner">
									<p class="sub_ttl anton">News</p>
									<h2 class="ttl fz30">お知らせ</h2>
								</div>
							</div>
							<article class="notoSans">
								<a href="#">
									<div class="txt_wrap">
										<time>2018.05.31</time>
										<span class="cat new">NEW</span>
										<span class="cat">カテゴリ</span>
										<h3>「Ａ横全判両面4色刷オフセット輪転機」を導入しました。</h3>
									</div>
								</a>
							</article>
							<article class="notoSans">
								<a href="#">
									<div class="txt_wrap">
										<time>2018.05.31</time>
										<span class="cat">カテゴリ</span>
										<h3>「Ａ横全判両面4色刷オフセット輪転機」を導入しました。</h3>
									</div>
								</a>
							</article>
							<article class="notoSans">
								<a href="#">
									<div class="txt_wrap">
										<time>2018.05.31</time>
										<span class="cat">カテゴリ</span>
										<h3>「Ａ横全判両面4色刷オフセット輪転機」を導入しました。</h3>
									</div>
								</a>
							</article>
						</div>

						<div class="item">
							<div class="ttl_wrap">
								<div class="ttl_wrap_inner">
									<p class="sub_ttl anton">Column</p>
									<h2 class="ttl fz30">コラム</h2>
								</div>
							</div>
							<article class="notoSans">
								<a href="#">
									<div class="txt_wrap is_sp">
										<time>2018.05.31</time>
										<span class="cat new">NEW</span>
										<span class="cat">カテゴリ</span>
									</div>
									<div class="flexbox">
										<div class="img">
											<img class="objectCover" src="./assets/images/top/top05_02.png">
										</div>
										<div class="txt_wrap">
											<time class="is_pc">2018.05.31</time>
											<span class="cat new is_pc">NEW</span>
											<span class="cat is_pc">カテゴリ</span>
											<h3>「Ａ横全判両面4色刷オフセット輪転機」を導入しました。</h3>
										</div>
									</div>
								</a>
							</article>
							<article class="notoSans">
								<a href="#">
									<div class="txt_wrap is_sp">
										<time>2018.05.31</time>
										<span class="cat">カテゴリ</span>
									</div>
									<div class="flexbox">
										<div class="img">
											<img class="objectCover" src="./assets/images/top/top05_03.png">
										</div>
										<div class="txt_wrap">
											<time class="is_pc">2018.05.31</time>
											<span class="cat is_pc">カテゴリ</span>
											<h3>「Ａ横全判両面4色刷オフセット輪転機」を導入しました。</h3>
										</div>
									</div>
								</a>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top05 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ top06 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="top06">
				<div class="container">
					<div class="ttl_wrap white txtL">
						<p class="sub_ttl anton">Movie</p>
						<h2 class="ttl">町田チャンネル</h2>
						<a class="is_pc" href="#">
							<p>ムービー一覧へ</p>
							<div class="btn_wrap">
								<span class="btn_line"></span>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="youtube">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/kpEx9T6WbPo" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
							<div class="txt_wrap">
								<time>2018.05.31</time>
								<h3>熊谷工場 SYSTEM38Sのご紹介</h3>
							</div>
						</div>
						<div class="youtube">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/NaAzrqX5rHc" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
							<div class="txt_wrap">
								<time>2018.05.31</time>
								<h3>テキストテキストテキストテキストテキスト</h3>
							</div>
						</div>
						<div class="youtube">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/MuD9Dr2HDOQ" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
							<div class="txt_wrap">
								<time>2018.05.31</time>
								<h3>テキストテキストテキストテキストテキスト</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ top06 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

		</main>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); // 共通フッター ?>
	</div>

<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_js.php'); // 共通jsファイル読み込み ?>
<!-- ページ固有のJSファイル開始-->
	<script type="text/javascript" src="/assets/js/common/myscript.js" defer></script>
<!-- ページ固有のJSファイル終了-->

<?php require($_SERVER['DOCUMENT_ROOT'].'/include/body_end.php'); // 計測タグ類で使用可能 ?>
</body>

</html>