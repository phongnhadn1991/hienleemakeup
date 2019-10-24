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
	<section class="con_about">
		<div class="container">
			<div class="wrap_about">
				<div class="box_left">
					<div class="box_txt js-inview anime-fade-in">
						<h2 class="tit_st center">
							<span class="sup">Về chúng tôi</span>
							<span class="main">HiềnLee Makeup</span>
						</h2>
						<p class="txt">
							Lựa chọn học tại Trang điểm chuyên nghiệp tại HiềnLee Makeup bạn sẽ nhận được những lợi thế mà không phải nơi nào cũng có thể mang lại cho các học viên.
							Đầu tiên chúng tôi xây dựng chương trình các khóa học rất chuyên nghiệp và rõ ràng để các học viên biết rõ mình sẽ học được gì sau mỗi khóa học.
							Tiếp theo chúng tôi luôn cập nhật những xu hướng trang điểm mới nhất để truyền lại cho học viên, hệ thống máy móc tiên tiến cũng được trang bị để hỗ trợ quá trình học tập thuận lợi hơn.
						</p>
						<p class="btn btn__ghost--prm btn--small"><a href="#77777" target="_blank"><span>Xem chi tiết</span></a></p>
					</div>
				</div>
				<div class="box_right">
					<div class="box_img">
						<p class="img shine js-inview anime-fade-in u-delay1"><img src="<?php echo location_file ?>images/home/img_about1.jpg" alt="images"></p>
						<p class="img shine js-inview anime-fade-in u-delay2"><img src="<?php echo location_file ?>images/home/img_about2.jpg" alt="images"></p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.con_about -->

		<section class="con_service">
		<div class="wrap_service">
			<div class="box_head">
				<h2 class="tit_st center">
					<span class="sup">Dịch vụ trang điểm</span>
					<span class="main">HiềnLee Makeup</span>
				</h2>
			</div>
			<div class="box_list">
				<div class="item js-inview anime-fade-in u-delay1">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_service1.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm beauty</p>
						</div>
					</a>
				</div>
				<div class="item js-inview anime-fade-in u-delay2">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_service2.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm cô dâu hỏi / ngoại cảnh</p>
						</div>
					</a>
				</div>
				<div class="item js-inview anime-fade-in u-delay3">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_service3.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm cô dâu ngày cưới</p>
						</div>
					</a>
				</div>
				<div class="item js-inview anime-fade-in u-delay4">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_service4.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm sự kiện / Mc</p>
						</div>
					</a>
				</div>
				<div class="item js-inview anime-fade-in u-delay5">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_service5.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm đi tiệc / kỷ yếu</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section><!-- /.con_service -->

	<section class="con_activity">
		<article class="box_activity">
			<div class="box_head">
				<h2 class="tit_st center">
					<span class="sup">Khóa học trang điểm</span>
					<span class="main">HiềnLee Makeup</span>
				</h2>
			</div>
			<ul>
				<li class="js-inview anime-fade-in u-delay1">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity1.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Trang điểm sự kiện, <br> dự tiệc, cô dâu..</p>
							<p class="img_ic"><img src="<?php echo location_file ?>images/home/icon_mk_1.png" alt="images"></p>
							<h3>Makeup <br>chuyên nghiệp</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in u-delay2">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity2.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Tham gia các sự kiện lớn <br> của HieenLee Makeup</p>
							<p class="img_ic"><img src="<?php echo location_file ?>images/home/icon_mk_2.png" alt="images"></p>
							<h3>Makeup <br> cá nhân</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in u-delay3">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity3.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Đào tạo & hướng dẫn<br> chuyên nghiệp</p>
							<p class="img_ic"><img src="<?php echo location_file ?>images/home/icon_mk_3.png" alt="images"></p>
							<h3>Makeup <br> cá nhân Vip</h3>
						</div>
					</a>
				</li>
				<li class="js-inview anime-fade-in u-delay4">
					<a href="#">
						<p class="img"><img src="<?php echo location_file ?>images/home/img_activity4.jpg" alt="images"></p>
						<div class="box_txt">
							<p class="catch">Trải nghiệm thực tế <br> & việc làm</p>
							<p class="img_ic"><img src="<?php echo location_file ?>images/home/icon_mk_4.png" alt="images"></p>
							<h3>Makeup <br> nâng cao</h3>
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