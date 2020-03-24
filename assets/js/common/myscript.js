
'use strict';

// const w = $(window).width();
// const spwidth = 767;
// const tabletwidth = 1025;



$(function () {

	$('.loading').hide();
	// if ($('.loading').length && $.cookie("access") == undefined) {

	$.cookie("access", "twooth");

	$('#wrapper').hide();
	$('.loading').show();
	$('.mv').addClass('load');
	$('header').addClass('load');


	$(window).on('load', function () {
		setTimeout(function () {
			$('.loading').addClass('active');
		}, 1500);
	});

	$(window).on('load', function () {
		setTimeout(function () {
			$('#wrapper').show();
			$('.mv').removeClass('load');
			$('header').removeClass('load');

			var topMvSwiper = new Swiper('.mv-swiper', {
				effect: "fade",
				loop: true,
				autoplay: {
					delay: 3000,
					disableOnInteraction: true
				},
				speed: 1000,
				simulateTouch: false
			});

			var mvBnrswiper = new Swiper('.top01 .swiper-container', {
				loop: true,
				speed: 300,
				slidesPerView: 2.2,
				spaceBetween: 25,
				centeredSlides: true,
				autoplay: {
					delay: 5000,
					disableOnInteraction: true
				},
				queueEndCallbacks: true,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				pagination: {
					el: '.swiper-pagination',
					type: 'bullets',
					clickable: true,
				},
				breakpoints: {
					767: {
						slidesPerView: 1,
					},
				},
			});

		}, 4250);
	});

	// } 

	$(function () { setTimeout('stopload()', 10000); });
	function stopload() {
		$('#wrapper').show();
		$('.mv').removeClass('load');
		$('header').removeClass('load');

		var topMvSwiper = new Swiper('.mv-swiper', {
			effect: "fade",
			loop: true,
			autoplay: {
				delay: 3000,
				disableOnInteraction: true
			},
			speed: 1000,
			simulateTouch: false
		});

		var mvBnrswiper = new Swiper('.top01 .swiper-container', {
			loop: true,
			speed: 300,
			slidesPerView: 2.2,
			spaceBetween: 25,
			centeredSlides: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: true
			},
			queueEndCallbacks: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
			breakpoints: {
				767: {
					slidesPerView: 1,
				},
			},
		});
	}










});



