<?php $page = 'misc_404'; include "../config/include.php"; ?>
<meta name="robots" content="nofollow">
<!-- *** stylesheet *** -->
<?php include "../templates/common_css.php"; ?>
<link href="../css/misc.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
</head>

<body id="<?php echo $page; ?>">
<?php include "../templates/header.php"; ?>
<div id="contents">

	<div class="con_misc">
		<h3>お探しのページが見つかりません</h3>
		<p>
			お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。<br>
			お手数ではございますが、<a href="<?php echo location;?>">トップページ</a>にて目的のページをお探しください。
		</p>
	</div><!-- /.con_misc -->

</div><!-- /#contents -->
<?php include "../templates/footer.php"; ?>
</body>
</html>