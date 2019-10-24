<?php
	$page = 'homepage';
	include __DIR__."/config/include.php";
?>
<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>
<link href="<?php echo echo_version(LOCATION_FILE.'css/homepage.css',LOCATION_FILE_DIR);?>" rel="stylesheet" media="all">
<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>
<script src="<?php echo echo_version(LOCATION_FILE.'js/homepage.min.js',LOCATION_FILE_DIR);?>"></script>
</head>

<body id="<?php echo $page; ?>">
<div id="abi_page">
<?php include LOCATION_ROOT_DIR."/templates/header.php"; ?>
<div id="contents">

	<section class="con_activity">
		<article class="box_activity">
			<ul>
				<li class="js-inview anime-fade-in">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity1.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Trang điểm sự kiện, <br> dự tiệc, cô dâu..</p>
							<svg><use xlink:href="#ic_watch_nav"></svg>
							<h3>Makeup</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity2.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Tham gia các sự kiện lớn <br> của HieenLee Makeup</p>
							<svg class="play"><use xlink:href="#ic_play"></svg>
							<h3>HiềnLee Makeup</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity3.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Đào tạo & hướng dẫn<br> chuyên nghiệp</p>
							<svg><use xlink:href="#ic_dish"></svg>
							<h3>Khóa học Makeup</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity4.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Trải nghiệm thực tế <br> & việc làm</p>
							<svg><use xlink:href="#ic_stay"></svg>
							<h3>Việc làm</h3>
						</div>
					</a>
				</li>
			</ul>
		</article><!-- /.box_activity -->
	</section> <!-- /.con_activity -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

</div><!-- /#contents -->
<?php include LOCATION_ROOT_DIR."/templates/footer.php"; ?>
</div>
<!-- #abi_page -->
</body>
</html>