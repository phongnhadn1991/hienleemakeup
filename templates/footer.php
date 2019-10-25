<div id="footer">
	<div class="con_ft_top">
		<p class="txt">Điều tuyệt vời nhất tôi từng làm là dám dũng cảm nắm lấy đam mê</p>
	</div><!-- /.con_ft_top -->
	<div class="con_ft_mid">
		<div class="box_ft_m">
				<div class="wrap_inner">
					<p class="txt_top">Hiềnlee Makeup Artist</p>
					<p class="img_logo_ft"><img src="<?php echo location_file ?>images/logo_ft.png" alt="Logo"></p>
					<p class="txt">Đào tạo makeup chuyên nghiệp</p>
					<p class="txt_logo">
						<span>Makeup</span>
						<span>www.hienleemakeup.com</span>
					</p>
				</div>
			</div>

		<div class="box_social">
			<div class="inner">
				<a target="_blank" href="#">
					<img src="<?php echo location_file ?>images/footer/fb2.svg" class="social_icon">
				</a>
				<a target="_blank" href="#">
					<img src="<?php echo location_file ?>images/footer/instagram2.svg" class="social_icon">
				</a>
				<a target="_blank" href="https://www.pinterest.com/21sthaircare/">
					<img src="<?php echo location_file ?>images/footer/pinterest2.svg" class="social_icon">
				</a>
				<a target="_blank" href="#"><img src="<?php echo location_file ?>images/footer/youtube2.svg" class="social_icon">
				</a>
				<a target="_blank" href="https://twitter.com/21sthaircare"><img src="<?php echo location_file ?>images/footer/twitter2.svg" class="social_icon">
				</a>
				<a target="_blank" href="#">
					<img src="<?php echo location_file ?>images/footer/snap.svg" class="social_icon">
				</a>
			</div>
		</div>
		<div class="box_link view_pc-tab">
			<div class="wrap_inner">
				<div class="box_list">
					<div class="box center">
						<h5 class="txt_st">LIÊN HỆ</h5>
						<div class="box_txt">
							<ul>
								<li>thuhien2110cvl@gmail.com</li>
								<li>097 966 97 21</li>
								<li>158 Lê Đình Lý, Thanh Khê, Đà Nẵng</li>
							</ul>
						</div>
					</div>
					<div class="box">
						<h5 class="txt_st">TRANG ĐIỂM</h5>
						<div class="box_txt">
							<ul>
								<li><a href="#">Trang điểm beauty</a></li>
								<li><a href="#">Trang điểm cô dâu, ngoại cảnh</a></li>
								<li><a href="#">Trang điểm cô dâu ngày cưới</a></li>
								<li><a href="#">Trang điểm sự kiện, mc</a></li>
								<li><a href="#">Trang điểm đi tiệc, kỷ yếu</a></li>
							</ul>
						</div>
					</div>
					<div class="box">
						<h5 class="txt_st">KHÓA HỌC</h5>
						<div class="box_txt">
							<ul>
								<li><a href="#">Makeup chuyên nghiệp</a></li>
								<li><a href="#">Makeup cá nhân</a></li>
								<li><a href="#">Makeup cá nhân Vip</a></li>
								<li><a href="#">Makeup nâng cap</a></li>
							</ul>
						</div>
					</div>
					<div class="box">
						<h5 class="txt_st">VỀ CHÚNG TÔI</h5>
						<div class="box_txt">
							<ul>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Bảng giá dịch vụ</a></li>
								<li><a href="#">Thư viện</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box_ft_menu">
			<div class="wrap_inner">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Trang điểm</a></li>
					<li><a href="#">Khóa học</a></li>
					<li><a href="#">Bảng giá dịch vụ</a></li>
					<li><a href="#">Liên hệ</a></li>
				</ul>
			</div>
		</div>
	</div><!-- /.con_ft_mid -->
	<div class="con_ft_bot">
		<div class="txt">© 2019 HienleeMakeup.<br class="view_sp"> <span class="view_pc-tab">All Rights Reserved.</span> <a class="view_pc-tab" href="https://hienleemakeup.com/" target="_blank">HIỀN LEE MAKEUP ARTIST</a><br class="view_pc-tab"><span class="view_pc-tab">Thiết kế bởi <a href="https://www.facebook.com/maicongngoan91" target="_blank">Mai Công Ngoãn</a></span></div>
	</div><!-- /.con_ft_bot -->
</div><!-- /#footer -->
<?php
// コピーライトの年を返す
function get_copyright_date($then) {
	$now = date('Y');
	if ($then < $now) {
		return $then.'–'.$now;
	} else {
		return $then;
	}
}
?>