<!DOCTYPE html>
<html lang="ja">

<head>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_meta.php'); // 共通metaタグ類読み込み ?>
	<title>コラム｜町田印刷株式会社</title>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_css.php'); // 共通cssファイル読み込み ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/head_end.php'); // 計測タグ類で使用可能 ?>
</head>

<body>

	<div id="wrapper">
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); // 共通ヘッダー ?>
		<main class="lower">

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ column01 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
			<section class="column01 lower_mv">
				<h1 class="lower_ttl">コラム</h1>
			</section>
			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ column01 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ パンくずリスト ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->

			<div class="breadcrumb container">
				<ol>
					<li><a href="../">TOP</a></li>
					<li>コラム</li>
				</ol>
			</div>

			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ パンくずリスト ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->


			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ カラム上タイトル ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->

			<div class="above_col_ttl container">
				<div class="ttl_wrap txtL">
					<div class="ttl_wrap_inner">
						<p class="sub_ttl anton">Topics</p>
						<h2 class="ttl">最新記事一覧</h2>
					</div>
				</div>
			</div>

			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ カラム上タイトル ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

			<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ カラム設定 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->


			<div class="two_col container">

				<div class="main_col">

					<!-- ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ column02 ▼▼▼▼▼▼▼▼▼▼▼▼▼▼ -->
					<section class="column02">

						<article class="notoSans">
							<a href="./column_article/">
								<div class="img">
									<img src="../assets/images/column/column02_01.png">
								</div>
								<div class="txt_wrap">
									<time>2018.05.31</time>
										<span class="cat new">NEW</span>
									<span class="cat">カテゴリ</span>
									<h3>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
									<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
									<p class="link notoSerif"><span>記事の続きを読む</span></p>
								</div>
							</a>
						</article>

						<article class="notoSans">
							<a href="#">
								<div class="img">
									<img src="../assets/images/column/column02_01.png">
								</div>
								<div class="txt_wrap">
									<time>2018.05.31</time>
									<span class="cat">カテゴリ</span>
									<h3>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
									<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
									<p class="link notoSerif"><span>記事の続きを読む</span></p>
								</div>
							</a>
						</article>

						<article class="notoSans">
							<a href="#">
								<div class="img">
									<img src="../assets/images/column/column02_01.png">
								</div>
								<div class="txt_wrap">
									<time>2018.05.31</time>
									<span class="cat">カテゴリ</span>
									<h3>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h3>
									<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
									<p class="link notoSerif"><span>記事の続きを読む</span></p>
								</div>
							</a>
						</article>

						<div class="pagenation notoSans">
							<ul>
								<li><span>1</span></li>
								<li><a href="">2</a></li>
								<li><a href="">＞</a></li>
							</ul>
						</div>

					</section>
					<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ column02 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

				</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/side_column.php'); // 共通ヘッダー ?>
			</div>

			<!-- ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ カラム設定 ▲▲▲▲▲▲▲▲▲▲▲▲▲▲ -->

		</main>
<?php require($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); // 共通フッター ?>
	</div>

<?php require($_SERVER['DOCUMENT_ROOT'].'/include/common_js.php'); // 共通jsファイル読み込み ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/include/body_end.php'); // 計測タグ類で使用可能 ?>

</body>

</html>