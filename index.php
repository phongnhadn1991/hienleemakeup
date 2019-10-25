<?php
	$page = 'homepage';
	include __DIR__."/config/include.php";
?>
<!-- *** stylesheet *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_css.php"; ?>
<link href="<?php echo echo_version(LOCATION_FILE.'css/homepage.css',LOCATION_FILE_DIR);?>" rel="stylesheet" media="all">
<!-- *** javascript *** -->
<?php include LOCATION_ROOT_DIR."/templates/common_js.php"; ?>
<script src="<?php echo echo_version(LOCATION_FILE.'js/instafeed.min.js',LOCATION_FILE_DIR);?>"></script>
<script src="<?php echo echo_version(LOCATION_FILE.'js/homepage.min.js',LOCATION_FILE_DIR);?>"></script>
<script>

// Instafeed
var feed = new Instafeed({
	get: 'user',
	userId: '9274688871',
	accessToken:'9274688871.34475cd.6b419d4f6d1e4e469e562aff56c5eefe',
	links: true,
	limit: 12,
	resolution:'low_resolution',
	template: '<li><a target="_blank" class="over" href="{{link}}"><img src="{{image}}" alt="{{caption}}"></a></li>'
});
feed.run();

// readyEvent
$(function(){

	$w.on({
		//load
		'load' : function(){

			$('#instafeed li img').each(function (index, element) {
				if($(this).width() < $(this).height()) {
					$(this).parents('li').addClass('tate');
				} else {
					$(this).parents('li').addClass('img_in');
				}
			});

		},
		//scroll
		'scroll' : function(){

		}
	});
});
</script>
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

	<section class="con_news">
		<div class="container">
			<div class="box_head">
				<h2 class="tit_st center">
					<span class="sup">Tin tức & sự kiện</span>
					<span class="main">HiềnLee Makeup</span>
				</h2>
			</div>
			<div class="box_list">
				<div class="item">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_news1.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">4 xu hướng trang điểm chớ nên bỏ qua trong năm 2019</p>
							<p class="p_info"><span class="time"><i class="far fa-calendar-alt"></i> 25/10/2019</span><span><i class="far fa-user"></i> Hieenlee</span></p>
							<p class="txt">Một làn da mịn màng không tì vết sẽ giúp lớp má hồng ửng lên như say rượu thêm nổi bật. Xu hướng trang điểm này tuy không quá mới mẻ nhưng hứa hẹn vẫn sẽ được yêu thích nồng nhiệt trong năm 2019.</p>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_news2.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">4 xu hướng trang điểm chớ nên bỏ qua trong năm 2019</p>
							<p class="p_info"><span class="time"><i class="far fa-calendar-alt"></i> 25/10/2019</span><span><i class="far fa-user"></i> Hieenlee</span></p>
							<p class="txt">Các cô gái châu Á không còn quá quan trọng tỉa tót dáng lông mày theo hướng hất sắc sảo kiểu Thái hay ngang hiền hòa kiểu Hàn mà chuyển sang mê phong cách tự nhiên, cho hàng mày được đi theo hình dáng phù hợp nhất với gương mặt.</p>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#">
						<div class="box_img">
							<p class="img shine"><img src="<?php echo location_file ?>images/home/img_news3.jpg" alt="images"></p>
						</div>
						<div class="box_txt">
							<p class="txt_st">Trang điểm cô dâu và những xu hướng được yêu thích nhất năm 2019</p>
							<p class="p_info"><span class="time"><i class="far fa-calendar-alt"></i> 25/10/2019</span><span><i class="far fa-user"></i> Hieenlee</span></p>
							<p class="txt">Phong cách trang điểm cô dâu tự nhiên nhẹ nhàng đang được nhiều bạn trẻ ưa chuộng. Nét ấn tượng ở phong cách trang điểm này là việc sử dụng những gam màu trung tính, gần sát với màu da khiến cho người xem cô dâu đẹp tự nhiên và rất tinh khôi.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section><!-- /.con_news -->

	<section class="con_insta">
		<div class="container">
			<div class="box_head">
				<h2 class="tit_st center">
					<span class="sup">Thư viện hình ảnh</span>
					<span class="main">HiềnLee Makeup</span>
				</h2>
			</div>
		</div>
		<div class="box_insta js-inview anime-fade-in">
			<h3><img class="js-inview anime-fade-in u-delay1" src="<?php echo location_file ?>images/home/st_insta.png" alt="HiềnLee"></h3>
			<ul id="instafeed">
			</ul>
		</div>
		<div class="box_btn">
			<p class="btn__more "><a href="#77777"><span><i class="fab fa-instagram"></i> Follow Instagram</span></a></p>
		</div>
	</section>

</div><!-- /#contents -->
<?php include LOCATION_ROOT_DIR."/templates/footer.php"; ?>
</div>
<!-- #abi_page -->
</body>
</html>