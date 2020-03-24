
'use strict';

const w = $(window).width();
const spwidth = 767;
const tabletwidth = 1025;



$(function () {

	let pageTop = $('#page_top');
	pageTop.hide();


	$(window).scroll(function () {
		if ($(window).scrollTop() > 500) {
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
		if ($(window).scrollTop() > 1000) {
			pageTop.fadeIn();
		} else {
			pageTop.fadeOut();
		}
	});

	pageTop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);
		return false;
	});

	if (w < spwidth) {
		$('footer .service').on('click', function () {
			$('footer .nav_in').slideToggle('300');
			$(this).toggleClass('active');
		});
	}



});



{
	const openMenu = document.getElementById('menu_open');
	const Nav = document.querySelector('header nav');

	openMenu.addEventListener('click', function () {
		openMenu.classList.toggle('active');
		Nav.classList.toggle('active');
	});
}
