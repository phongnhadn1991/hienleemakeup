<?php 
	$page = 'copy';
	include __DIR__."/../config/include.php";
?>
<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>
<!-- *** stylesheet *** -->
<link href="<?php echo echo_version(LOCATION_FILE.'css/'. $page .'.css',LOCATION_FILE_DIR);?>" rel="stylesheet" media="all">
<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>
<script>
// readyEvent
$(function(){

	$w.on({
		//load
		'load' : function(){

		},
		//scroll
		'scroll' : function(){

		}
	}).superResize({
		//resize
		loadAction : false,
		resizeAfter : function(){

		}
	}).firstLoad({
		//firstLoad
		pc_tab : function(){

		},
		sp : function(){

		}
	});
});
</script>
</head>

<body id="<?php echo $page; ?>">
<div id="abi_page">
<?php include LOCATION_ROOT_DIR."/templates/header.php"; ?>
<div id="contents">
	<!-- パンくず -->
	<ul class="topicpath" vocab="https://schema.org/" typeof="BreadcrumbList">
		<li property="itemListElement" typeof="ListItem">
			<a property="item" href="<?php echo LOCATION; ?>" typeof="WebPage">
				<span property="name">Home</span>
				<meta property="position" content="1">
			</a>
		</li>
		<li property="itemListElement" typeof="ListItem">
			<span property="name">コピー</span>
			<meta property="position" content="２">
		</li>
	</ul><!-- /.topicpath -->

</div><!-- /#contents -->
<?php include LOCATION_ROOT_DIR."/templates/footer.php"; ?>
</div>
<!-- #abi_page -->
</body>
</html>
