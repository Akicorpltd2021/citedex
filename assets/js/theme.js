(function ($) {
	'use strict';

	/*==== One Page Nav  ====*/
	var top_offset = $('.one_page').height() + 0;
	$('.one_page .charido_menu .nav_scroll').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 1000,
		scrollOffset: top_offset,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
	});

	$(".nav_scroll > li:first-child").addClass("current");

	/*==== sticky nav 1  ====*/
	$('.one_page').scrollToFixed({
		preFixed: function () {
			$(this).find('.scroll_fixed').addClass('prefix');
		},
		postFixed: function () {
			$(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
		}
	});

	/*==== sticky nav 2  ====*/
	var headers1 = $('.trp_nav_area');
	$(window).on('scroll', function () {

		if ($(window).scrollTop() > 200) {
			headers1.addClass('hbg2');
		} else {
			headers1.removeClass('hbg2');
		}
	});

	/*==== Mobile Menu  ====*/
	$('.mobile-menu nav').meanmenu({
		meanScreenWidth: "990",
		meanMenuContainer: ".mobile-menu",
		onePage: true,
	});

	/*==== Top quearys menu  ====*/
	var emsmenu = $(".em-quearys-menu i.t-quearys");
	var emscmenu = $(".em-quearys-menu i.t-close");
	var emsinner = $(".em-quearys-inner");
	emsmenu.on('click', function () {
		emsinner.addClass('em-s-open');
		$(this).addClass('em-s-hiddens');
		emscmenu.removeClass('em-s-hidden');
	});
	emscmenu.on('click', function () {
		emsinner.removeClass('em-s-open');
		$(this).addClass('em-s-hidden');
		emsmenu.removeClass('em-s-hidden');
	});

	/*==== popup mobile menu  ====*/

	var mrightma = $(".mobile_menu_o i.openclass");
	var mrightmi = $(".mobile_menu_o i.closeclass");
	var mrightmir = $(".mobile_menu_inner");
	var mobile_ov = $(".mobile_overlay");
	mrightma.on('click', function () {
		mrightmir.addClass('tx-s-open');
		mobile_ov.addClass('mactive');
	});
	mrightmi.on('click', function () {
		mrightmir.removeClass('tx-s-open');
		mobile_ov.removeClass('mactive');
	});

	/*==== WOW active js   ====*/
	new WOW().init();

	/*==== scrollUp  ====*/
	$.scrollUp({
		scrollText: '<i class="icofont-thin-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

	/*==== Venubox  ====*/
	$('.venobox').venobox({
		numeratio: true,
		infinigall: true
	});

	/*==== swiper active ====*/
	/*
	new Swiper('.swiper_act', {
		autoplay: false,
		effect: 'defult',
		grabCursor: false,
		speed: 3000,
		slidesPerView: 1,
		spaceBetween: 30,
		freeMode: false,
		mousewheel: false,
		keyboard: false,
		loop: false,
		autoplay: {
			delay: 8000,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			false: 'progressbar',
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		scrollbar: {
			el: '.scrollbar_false',
			hide: true,
		},
	});
	*/

	/*==== Brand active ====*/
	var witrbslick = $('.brand_active');
	if (witrbslick.length > 0) {
		witrbslick.slick({
			infinite: true,
			autoplay: true,
			default: true,
			autoplaySpeed: 6000,
			speed: 1000,
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}
	/*==== blog active ====*/
	var witrbslick = $('.blog_active');
	if (witrbslick.length > 0) {
		witrbslick.slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000,
			speed: 1000,
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	/*==== blog sidebar active ====*/
	$('.blog_sidebar_image_act').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		centerMode: true,
		centerPadding: '',
		arrows: false,
		dots: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});

	/*==== testimonial active ====*/

	var witrbtslick = $('.test_active');
	if (witrbtslick.length > 0) {
		witrbtslick.slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000,
			speed: 2000,
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	var witrbtslick = $('.test2_active');
	if (witrbtslick.length > 0) {
		witrbtslick.slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 6000,
			speed: 2000,
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	/*==== circle Progress js ====*/

	var witr_cp = $('.witr_idcr1');
	witr_cp.circleProgress({
		startAngle: -Math.PI / 4 * 3,
		value: 0.9,
		size: 160,
		lineCap: 'round',
		fill: { gradient: ["#FE7F4C", "#FE7F4C"] }
	});
	var witr_cp = $('.witr_idcr2');

	witr_cp.circleProgress({
		startAngle: -Math.PI / 4 * 3,
		value: 0.85,
		size: 160,
		lineCap: 'round',
		fill: { gradient: ["#FE7F4C", "#FE7F4C"] }
	});

	/*==== project js ====*/
	var witrbslick = $('.project_active');
	if (witrbslick.length > 0) {
		witrbslick.slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 1000,
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			dots: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]
		});
	}

	/*==== portfolio isotop ====*/

	$('.portfolio_active').imagesLoaded(function () {
		if ($.fn.isotope) {

			var $portfolio = $('.portfolio_active');

			$portfolio.isotope({

				itemSelector: '.grid-item',

				filter: '*',

				resizesContainer: true,

				layoutMode: 'masonry',

				transitionDuration: '0.8s'

			});

			$('.filter_menu li').on('click', function () {

				$('.filter_menu li').removeClass('current_menu_item');

				$(this).addClass('current_menu_item');

				var selector = $(this).attr('data-filter');

				$portfolio.isotope({

					filter: selector,

				});

			});

		};
	});

	/*==== Mouse Direction Hover Iffect ====*/

	$('.single_protfolio').directionalHover();
	$('.single_protfolio').directionalHover({
		// CSS class for the overlay
		overlay: "em_port_content",
		// Linear or swing
		easing: "swing",
		speed: 50
	});

	/*==== Bootstrap Accordion  ====*/
	$('.faq-part .card').each(function () {
		var $this = $(this);
		$this.on('click', function (e) {
			var has = $this.hasClass('active');
			$('.faq-part .card').removeClass('active show');
			if (has) {
				$this.removeClass('active show');
			} else {
				$this.addClass('active show');
			}
		});
	});

	/*==== counter active ====*/
	/*
	$('.counter').counterUp({
		delay: 20,
		time: 3000
	});
	*/


	/*=== type writer ===*/

	var textTypeWriter = "Espace indépendant de réflexions, rencontres et informations dans les domaines anthropocentriques “l’homme au centre de l’univers” pour agir dans un intérêt général.";
	var indexTypeWriter = 0;
	var speedTypeWriter = 70; // Vitesse en millisecondes entre chaque lettre
	var $enEcriture = $('#enEcriture');

	function typeWriter() {
		if (indexTypeWriter < textTypeWriter.length) {
			$('#typeWriter').append(textTypeWriter.charAt(indexTypeWriter));
			indexTypeWriter++;
			setTimeout(typeWriter, speedTypeWriter);
		} else {
			//$enEcriture.fadeOut();
		}
	}

	setTimeout(typeWriter, 3000);


	/*=== countdown volontaires ===*/
	var $counter = $('#counterVolontaire');
	var targetNumber = 800;
	var duration = 2000; // 10 seconds

	$counter.waypoint(function () {
		var startTime = null;

		function countUp(timestamp) {
			if (!startTime) startTime = timestamp;
			var progress = timestamp - startTime;
			var currentNumber = Math.min(Math.floor(progress / duration * targetNumber), targetNumber);
			$counter.text(currentNumber);

			if (progress < duration) {
				requestAnimationFrame(countUp);
			} else {
				$counter.text(targetNumber);
			}
		}

		requestAnimationFrame(countUp);

	}, { offset: '100%' });

	$('.scroll-link').on('click', function (e) {
		e.preventDefault(); // Empêche le comportement par défaut du lien

		var target = this.hash; // Récupère l'ancre cible (#event, #actualites, etc.)
		var currentUrl = window.location.href; // URL actuelle

		// Vérifie si tu es déjà sur index.php
		if (currentUrl.includes("index.php") || currentUrl.endsWith("/")) {
			// Si déjà sur index.php, scroll fluide
			var $target = $(target);
			$('html, body').animate({
				scrollTop: $target.offset().top
			}, 900, 'linear');
		} else {
			// Si pas sur index.php, redirige vers index.php avec l'ancre
			window.location.href = 'index.php' + target;
		}
	});


	/*
		tns({
			container: '#sliderActualitesCreate',
			items: 3,
			slideBy: 'page',
			autoplay: true,
			controls: false,
			loop: true,
		});
	*/


})(jQuery);




