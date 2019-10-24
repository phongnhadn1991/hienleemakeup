<?php $page = 'misc_500'; include "../config/include.php"; ?>
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
		<h3>サーバーエラーが出ています</h3>
		<p>
			お手数ですが、ホテルまでご連絡をお願いいたします。<br>
			エラー時の状況（エラーとなったページ、リンク先など）も合わせてご連絡下さい。<br>
			TEL:<a href="<?php echo location_tel; ?>"><?php echo str_replace('tel:','',location_tel); ?></a>
		</p>
	</div><!-- /.con_misc -->

</div><!-- /#contents -->
<?php include "../templates/footer.php"; ?>
</body>
</html>
