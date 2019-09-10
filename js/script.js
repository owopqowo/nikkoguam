$(function(){
	//header
	$('.btn_menu').click(function(){
		$('#header').toggleClass('on');
		$('body, html').toggleClass('hidden');
		return false;
	});
	$('.dim').click(function(){
		$('#header').removeClass('on');
		$('body, html').removeClass('hidden');
	})
	$('.gnb>li>a').click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on');
			$(this).next('ul').stop().slideUp();
		}else{
			$('.gnb>li>a').removeClass('on');
			$(this).addClass('on');
			$('.gnb ul').stop().slideUp();
			$(this).next('ul').stop().slideDown();
		}
		return false;
	});

	//footer fixed
	var lastScrollTop = 0;
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if (Math.abs(lastScrollTop - st) <= 0) return;
		if ((st > lastScrollTop) && (lastScrollTop >= 0)) {
			$('.f_btn').removeClass('on');
		} else {
			$('.f_btn').addClass('on');
		}
		lastScrollTop = st;
	});

	//footer popup
	$('.family_site a').click(function(){
		$('.pop_family').fadeIn();
		return false;
	});
	$('.pop_family .btn_close').click(function(){
		$('.pop_family').fadeOut();
		return false;
	});

	//select page
	$('.title_bar select').change(function(){
		var target = $(this).attr('value');
		console.log(target);
		window.location.href=target;
	});

	// sub nav width
	var $subNav = $('.sub_nav ul'),
	$subNavList = $('.sub_nav ul li'),
	sum = 0;
	for (var i = 0; i < $subNavList.length; i++) {
		var $subNavListW = $($subNavList.get(i)).outerWidth();
		sum += $subNavListW;
	}
	$subNav.css('width', sum+1);


	// sub nav scroll
	var subNav = $('.sub_nav').length;
	if(subNav > 0){
		var myScroll = new IScroll('.sub_nav', { scrollX: true, scrollY: false });
		myScroll.scrollToElement('.sub_nav li.on',1500);
	}

	$('.sub_nav').css('width','calc(100% - 40px)');

	//visual slider
	$('.slider.visual_img').slick({
		arrows: false,
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		asNavFor: '.visual_text'
	});
	$('.slider.visual_text').slick({
		asNavFor: '.visual_img',
		arrows: false,
		dots: true,
		fade: true
	});

	//thumb slider
	var thumbLength = $('.slider.thumb_for>div').length;
	for (var i = 0; i < thumbLength; i++) {
		var imgStyle = $('.slider.thumb_for>div').eq(i).find('.img').attr('style'),
		imgUrl = imgStyle.split(':')[1];
		$('.slider.thumb_nav>div').eq(i).css({'background-image':imgUrl});
	}
	$('.slider.thumb_for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		asNavFor: '.thumb_nav'
	});
	$('.slider.thumb_nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.thumb_for',
		arrows: false,
		centerMode: true,
		centerPadding: '47px',
		focusOnSelect: true
	});

	if(thumbLength >= 4){
		$('.slider.thumb_nav .slick-center').prev('.slick-slide').prev('.slick-slide').css({'opacity':'0.2'});
		$('.slider.thumb_nav .slick-center').next('.slick-slide').next('.slick-slide').css({'opacity':'0.2'});
	}
	$('.slider.thumb_nav').on('afterChange', function(event, slick, currentSlide){
		$('.slider.thumb_nav .slick-slide').css({'opacity':'1'});
		$('.slider.thumb_nav .slick-center').prev('.slick-slide').prev('.slick-slide').css({'opacity':'0.2'});
		$('.slider.thumb_nav .slick-center').next('.slick-slide').next('.slick-slide').css({'opacity':'0.2'});
	});


	//normal slider
	$('.slider.normal').slick({
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		arrows: false,
		dots: true
	});
	// $('.main .slider.normal').on('touchstart touchmove', function(){
	// 	$('.main .slider.normal .slick-active').addClass('on');
	// });
	// $('.main .slider.normal').on('touchend', function(){
	// 	$('.main .slider.normal .slick-active').removeClass('on');
	// });
	// $('.main .slider.normal').on('afterChange', function(event, slick, currentSlide){
	// 	$('.main .slider.normal .slick-slide').removeClass('on');
	// });


	//number slider
	$('.slider.number').on('init', function(event, slick, currentSlide){
		$('.slider.number').next('.num').find('span').text(slick.slideCount);
	});
	$('.slider.number').slick({
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false
	});
	$('.slider.number').on('afterChange', function(event, slick, currentSlide){
		$('.slider.number').next('.num').find('strong').text(currentSlide+1);
	});

	//center slider
	$('.slider.center').slick({
		arrows: false,
		dots: true,
		slidesToShow: 1,
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		centerMode: true,
		centerPadding: '45px'
	});

	//board slider
	$('.slider.board_text').on('init', function(event, slick, currentSlide){
		if(slick.slideCount >= 10){
			$('.slider.board_text').next('.num').find('span').text(slick.slideCount);
		}else{
			$('.slider.board_text').next('.num').find('span').text('0'+slick.slideCount);
		}
	});
	$('.slider.board_img').slick({
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		asNavFor: '.board_text'
	});
	$('.slider.board_text').slick({
		asNavFor: '.board_img',
		arrows: false,
		fade: true,
		adaptiveHeight: true
	});
	$('.slider.board_text').on('afterChange', function(event, slick, currentSlide){
		i = (currentSlide ? currentSlide : 0) + 1
		if(Number(currentSlide)+1 >= 10){
			$('.slider.board_text').next('.num').find('strong').text(i);
		}else{
			$('.slider.board_text').next('.num').find('strong').text('0'+i);
		}
	});

	//caption slider
	$('.slider.caption').on('init', function(event, slick, currentSlide){
		if(slick.slideCount >= 10){
			$('.slider.caption').next('.num').find('span').text(slick.slideCount);
		}else{
			$('.slider.caption').next('.num').find('span').text('0'+slick.slideCount);
		}
	});
	$('.slider.caption').slick({
		arrows: false,
		autoplay: true,
		pauseOnFocus: false,
		pauseOnHover: false
	});
	$('.slider.caption').on('afterChange', function(event, slick, currentSlide){
		i = (currentSlide ? currentSlide : 0) + 1
		if(Number(currentSlide)+1 >= 10){
			$('.slider.caption').next('.num').find('strong').text(i);
		}else{
			$('.slider.caption').next('.num').find('strong').text('0'+i);
		}
	});

	if($('#container').hasClass('main')){
		parallaxImg('.main .intro .img');
		parallaxImg('.main .special_offer .slider');
	}

	//finite slider
	$('.slider.finite').on('init', function(event, slick, currentSlide){
		$('.slider.finite').next('.num').find('span').text(slick.slideCount);
	});
	$('.slider.finite').slick({
		infinite: false
	});
	$('.slider.finite').on('afterChange', function(event, slick, currentSlide){
		i = (currentSlide ? currentSlide : 0) + 1
		$('.slider.finite').next('.num').find('strong').text(i);
	});

	//accordion
	$('.accordion>li>a').click(function(){
		if($(this).parent('li').hasClass('on')){
			$(this).next('div').stop().slideUp();
			$(this).parent('li').removeClass('on');
			$(this).next('div').find('.dim_swipe').removeClass('on');
		}else{
			$('.accordion>li.on>div').stop().slideUp();
			$('.accordion>li.on').removeClass('on');
			$('.dim_swipe').removeClass('on');
			$(this).parent('li').addClass('on');
			$(this).next('div').stop().slideDown(function(){
				$(this).find('.dim_swipe').addClass('on');
			});
			var wW = $(window).width();
			if($(this).next('.location').length > 0){
				var locaImgW = $(this).next('.location').find('img').width(),
				locaPositionX = wW/2 - locaImgW/2;
				myScroll = new IScroll('.img_location', { scrollX: true, scrollY: true });
				myScroll.scrollBy(locaPositionX, -105);
			}
			if($(this).next('.structure').length > 0){
				var strucImgW = $(this).next('.structure').find('img').width(),
				strucPositionX = wW/2 - strucImgW/2;
				myScroll = new IScroll('.img_structure', { scrollX: true, scrollY: true });
				myScroll.scrollBy(strucPositionX, -105);
			}
		}
		return false;
	});

	$('.board_content .accordion>li:first-child>a').trigger('click');
/*
	$(window).scroll(function(){
		var top = $(this).scrollTop();
		if($('#container').hasClass('main')){
			var target =$('.main .slider_wrap .tit').offset().top;
			if(top >= target-100){
				$('.main .intro').addClass('on');
			}else{
				$('.main .intro').removeClass('on');
			}
		}else{
			if(top > 0){
				$('.sub .radius').addClass('on');
			}else{
				$('.sub .radius').removeClass('on');
			}
		}
	});
*/
	var img = $('.main .visual_img .slick-slide[data-slick-index="0"]').html();
	$('.main .slider_wrap:first-child').append(img)

});


function parallaxImg(id) {
	$(window).scroll(function(){
		var targetTop = $(id).offset().top,
		windowH = $(window).height(),
		top = $(window).scrollTop(),
		position1 = top - targetTop+windowH,
		position2 = position1*0.2;
		if(top >= targetTop-windowH){
			if(position2 > 100){
				$(id).css({'background-position-y':'100%'});
			}else{
				$(id).css({'background-position-y':position2+'%'});
			}
		}
	});
}
