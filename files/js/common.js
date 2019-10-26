
/* readyEvent
------------------------------------------------------------------------*/

$(function () {

	$('.js_slider_main').slick({
		dots: false,
		arrows: false,
		fade: true,
		autoplay: true,
		pauseOnHover: false,
		lazyLoad: 'ondemand'
	});

	$('.js-inview').on('inview', function(event, isInView) {
		$(this).addClass('js-inview-in');
	});


	// BUTTON MENU SP
	$('.btn_menu').click(function(){
		$('.con_sp_nav').slideToggle('200');
		$(this).toggleClass('btn-open').toggleClass('btn-close');
		if($(this).hasClass('btn-open')){
			$(this).find('.txt').text('ĐÓNG');
		}else {
			$(this).find('.txt').text('MENU');
		}
	});
		// MARGIN TOP
		function marginTop_con_pgtitle(){
			var height_Conheader = $('.con_header').innerHeight();
			$('.con_pgtitle').css('margin-top',-height_Conheader);
		}
		marginTop_con_pgtitle();
		// PADDING TOP
		function paddingTop_NavMenu(){
			var height_Menusp = $('.con_fix_nav').innerHeight();
			$('#abi_page').css('padding-bottom',height_Menusp);
			$('.con_sp_nav').css('padding-bottom',height_Menusp);
		}
		paddingTop_NavMenu()+

		$w.superResize({
			//resize
			loadAction : false,
			resizeAfter : function(){
				marginTop_con_pgtitle();
				paddingTop_NavMenu();
			}
		}).firstLoad({
			//firstLoad
			pc_tab : function(){
			},
			sp : function(){
				paddingTop_NavMenu()
			}
		});

	// smoothScroll ---------------------------//
	var speed = 1000,
		easing = 'swing',
		pcPosition = -0,
		tabPosition = -0,
		spPosition = -0;

	$('a').not('.noscroll').on('click', function () {
		var href = $(this).attr('href'),
			case1 = href.charAt(0) == '#',
			case2 = location.href.split('#')[0] == href.split('#')[0];
		if (case1 || case2) {
			if (case2)
				href = '#' + href.split('#')[1];

			$target = $(href);

			if ($target.length) {
				$html.add($body).not(':animated').animate({ scrollTop: String($target.offset().top + (abi.pc ? pcPosition : abi.tab ? tabPosition : spPosition)) }, speed, easing);

				return false;
			}
		}
	});

	// outerPageAnchorLink ---------------------------//
	if (window.location.href.split('#')[1] == undefined || window.location.href.split('#')[1].indexOf('=') == -1) {
		var $target = $('#' + window.location.href.split('#')[1]),
			adjust = (abi.pc) ? pcPosition : (abi.tab) ? tabPosition : spPosition;

		if ($target.length) {
			$w.on('load', function () {
				var targetPosition = $target.offset().top;
				$html.add($body).animate({ scrollTop: String(targetPosition + adjust) }, 10);
			});
		}
	}

	/* アコーディオン -----------------------------------------------------*/
	$('.accordion').on('click', function () {
		if (!$(this).is('.sp_only') || $(this).is('.sp_only') && abi.sp) {
			var $next = $(this).next();
			if (!$next.is(':animated')) $next.slideToggle(300).prev().toggleClass('active');
		}
	});

});

// auto height
function matchHeight($o,m) {
    $o.css('height','auto')
    var foo_length = $o.length;
    for(var i = 0 ; i < Math.ceil(foo_length / m) ; i++) {
        var maxHeight = 0;
        for(var j = 0; j < m; j++){
            if ($o.eq(i * m + j).height() > maxHeight) {
                maxHeight = $o.eq(i * m + j).height();
            }
        }
        for(var k = 0; k < m; k++){
            $o.eq(i * m + k).height(maxHeight);
        }
    }
}