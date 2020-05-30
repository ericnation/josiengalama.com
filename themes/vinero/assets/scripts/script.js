jQuery(document).ready(function($) {

	'use strict';

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iPhone: function() {
			return navigator.userAgent.match(/iPhone/i);
		},
		iPad: function() {
			return navigator.userAgent.match(/iPad/i);
		},
		iPod: function() {
			return navigator.userAgent.match(/iPod/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	/////////////////////////////////////////////
	// POST GALLERY
	/////////////////////////////////////////////

	function vlthemes_post_gallery() {

		var slider = $('.vlt-post .vlt-slick-slider__inner');

		slider.slick({
			draggable: false,
			accessibility: true,
			centerMode: false,
			variableWidth: false,
			slidesToShow: 1,
			speed: 400,
			arrows: false,
			dots: false,
			fade: true,
			swipeToSlide: false,
			infinite: true,
			autoplay: false,
		});

		slider.on('click', function() {
			slider.slick('slickNext');
		});

		slider.each(function() {
			$(this).one('inview', function() {
				$(this).parent().find('.vlt-click-notify').css('opacity', '1');
			});
			$(this).on('mouseenter', function(event) {
				$(this).parent().find('.vlt-click-notify').css('opacity', '0');
			});
		});

	}

	/////////////////////////////////////////////
	// POST NAVIGATION
	/////////////////////////////////////////////

	function vlthemes_post_navigation() {

		$(window).on('scroll resize', function() {

			$('.single-post .vlt-main, .single-product .vlt-main').each(function() {
				var sT = $(window).scrollTop();
				var thisH = $(this).outerHeight();
				var oT = $(this).offset().top;
				var thisTop = oT - sT; // Get the top
				var winH = $(window).height() / 2;

				if (thisTop <= winH  && sT <= thisH + $(this).offset().top - winH) {
					// $(this).css('background', 'red');
					$('.vlt-post-navigation').addClass('is-visible');
				} else {
					// $(this).css('background', 'grey');
					$('.vlt-post-navigation').removeClass('is-visible');
				}
			});

		});

	}

	/////////////////////////////////////////////
	// HEADER DEFAULT MENU
	/////////////////////////////////////////////

	function vlthemes_header_default() {
		var $menu = $('.vlt-header--default .vlt-primary-nav ul.sf-menu');
		$menu.superfish({
			delay: 0,
			speed: 300,
			speedOut: 300,
			cssArrows: true,
			animation: {
				opacity: 'show',
				marginTop: '0'
			},
			animationOut: {
				opacity: 'hide',
				marginTop: '10px'
			}
		});
	}

	/////////////////////////////////////////////
	// HEADER ASIDE MENU
	/////////////////////////////////////////////

	function vlthemes_header_aside() {
		var $menu = $('.vlt-header--aside'),
			$menuToggle = $('#vlt-aside-menu-toggle'),
			$menuClose = $('#vlt-aside-menu-close'),
			$overlay = $('.vlt-header--aside-overlay'),
			$menuIsOpen = false;

		$menuToggle.on('click', function(e) {
			e.preventDefault();

			if(!$menuIsOpen) {
				$menu.find('.vlt-primary-nav').addClass('vlt-primary-nav--opened');
				$overlay.addClass('is-visible');
				$menuIsOpen = true;
			}else{
				$menu.find('.vlt-primary-nav').removeClass('vlt-primary-nav--opened');
				$overlay.removeClass('is-visible');
				$menuIsOpen = false;
			}
		});

		$menuClose.on('click', function(e) {
			e.preventDefault();
			$menu.find('.vlt-primary-nav').removeClass('vlt-primary-nav--opened');
			$overlay.removeClass('is-visible');
			$menuIsOpen = false;
		});

		$('.vlt-header--aside-overlay').on('click', function() {
			$menu.find('.vlt-primary-nav').removeClass('vlt-primary-nav--opened');
			$overlay.removeClass('is-visible');
			$menuIsOpen = false;
		});

		$menu.find('.vlt-primary-nav ul.sf-menu').superclick({
			delay: 500,
			cssArrows: true,
			animation: {
				opacity: 'show',
				height: 'show'
			},
			animationOut: {
				opacity: 'hide',
				height: 'hide'
			},
		});
	}

	/////////////////////////////////////////////
	// HEADER MOBILE MENU
	/////////////////////////////////////////////

	function vlthemes_header_mobile_menu() {
		var $menu = $('.vlt-mobile-nav'),
			$menuToggle = $('#vlt-mobile-menu-toggle'),
			$menuIsOpen = false;

		$menuToggle.on('click', function(e) {
			e.preventDefault();

			if(!$menuIsOpen) {
				$menu.slideDown();
				$menuToggle.addClass('vlt-menu-burger--opened');
				$menuIsOpen = true;
			}else{
				$menu.slideUp();
				$menuToggle.removeClass('vlt-menu-burger--opened');
				$menuIsOpen = false;
			}

		});

		$menu.find('ul.sf-menu').superclick({
			delay: 500,
			cssArrows: true
		});
	}

	/////////////////////////////////////////////
	// HEADER FULLSCREEN MENU
	/////////////////////////////////////////////

	function vlthemes_header_fullscreen() {
		var $menu = $('.vlt-header--fullscreen'),
			$menuToggle = $('#vlt-fullscreen-menu-toggle'),
			$menuClose = $('#vlt-fullscreen-menu-close'),
			$menuIsOpen = false;

		$menuToggle.on('click', function(e) {
			e.preventDefault();

			if(!$menuIsOpen) {
				$menu.find('.vlt-primary-nav').addClass('vlt-primary-nav--opened');
				$menuIsOpen = true;
			}else{
				$menu.find('.vlt-primary-nav').removeClass('vlt-primary-nav--opened');
				$menuIsOpen = false;
			}
		});

		$menuClose.on('click', function(e) {
			e.preventDefault();
			$menu.find('.vlt-primary-nav').removeClass('vlt-primary-nav--opened');
			$menuIsOpen = false;
		});

		$menu.find('.vlt-primary-nav ul.sf-menu').superclick({
			delay: 500,
			cssArrows: true,
			animation: {
				opacity: 'show',
				height: 'show'
			},
			animationOut: {
				opacity: 'hide',
				height: 'hide'
			},
		});
	}

	/////////////////////////////////////////////
	// HEADER STICKY EFFECT
	/////////////////////////////////////////////

	function vlthemes_header_effect() {
		var $header = $('.vlt-header[data-is-sticky="1"]'),
			offset = 150;
		$header.headroom({
			offset : offset,
		});
	}

	/////////////////////////////////////////////
	// FIXED FOOTER
	/////////////////////////////////////////////

	function vlthemes_fixed_footer() {
		var height = $('.vlt-footer').outerHeight();
		$('[data-fixed-footer="1"] .vlt-entry-content').css({
			'margin-bottom': height
		});
	}

	$(window).on('load resize', function() {
		vlthemes_fixed_footer();
	});

	/////////////////////////////////////////////
	// MASONRY GRID
	/////////////////////////////////////////////

	function vlthemes_masonry_grid() {
		var $grid = $('.masonry').imagesLoaded(function() {
			$grid.masonry({
				columnWidth: '.grid-sizer',
				itemSelector: '.grid-item',
				gutter: '.gutter-sizer',
				transitionDuration: 0,
			});
			vlthemes_appearance_effect();
		});
	}

	/////////////////////////////////////////////
	// APPEARANCE EFFECT
	/////////////////////////////////////////////

	function vlthemes_appearance_effect() {
		$('div[data-appearance-effect="1"] .post, div[data-appearance-effect="1"] .product').each(function(){
			$(this).one('inview', function(){
				$(this).addClass('animated fadeInUp');
			});

		});
	}

	/////////////////////////////////////////////
	// LOAD MORE
	/////////////////////////////////////////////

	function vlthemes_load_more_btn() {
		if (typeof load_more_btn === 'undefined') {
			return;
		}
		var startPage = parseInt(load_more_btn.startPage) + 1,
			maxPages = parseInt(load_more_btn.maxPages),
			nextLink = load_more_btn.nextLink,
			noMore = load_more_btn.noMore,
			text = load_more_btn.text,
			loading = load_more_btn.loading;

		$('.vlt-pagination--load-more a span').text(text);

		var loadMoreContainer = $('.vlt-pagination-load-more-container'),
			postsContainer = loadMoreContainer.find('.masonry'),
			itemSelector = '.grid-item';

		loadMoreContainer.on('click', '.vlt-pagination--load-more a', function(e) {
			e.preventDefault();

			if (nextLink === null) {
				return;
			}

			var $this = $(this);

			if(!$this.hasClass('disabled')){
				$this.addClass('loading');
				$this.find('span').text(loading);
			}

			if (startPage <= maxPages) {
				$.ajax({
					type: 'POST',
					url: nextLink,
					dataType: 'html',
					success: function (data) {
						var newElems = $(data).find(itemSelector);
						if (newElems.length > 0) {

							postsContainer.append(newElems);

							postsContainer.imagesLoaded(function() {
								postsContainer.masonry('appended', newElems);
								vlthemes_masonry_grid();
							});

							$this.removeClass('loading');
							$this.find('span').text(text);

						} else {
							$this.removeClass('loading').addClass('disabled');
							$this.find('span').html(noMore);
						}
						startPage++;
						nextLink = nextLink.replace(/\/page\/[0-9]+/, '/page/' + startPage);

						if(startPage <= maxPages) {
							$this.removeClass('loading');
						} else {
							$this.removeClass('loading').addClass('disabled');
							$this.find('span').html(noMore);
						}

					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
					}
				});
			}

		});
	}

	/////////////////////////////////////////////
	// SCROLL TO SECTION
	/////////////////////////////////////////////

	function vlthemes_scroll_to() {
		$('.vlt-scroll-to').on('click', function(e) {
			e.preventDefault();
			$('html').scrollTo($(this).attr('href'), 500);
		});
	}

	/////////////////////////////////////////////
	// BACK TO TOP
	/////////////////////////////////////////////

	function vlthemes_back_to_top() {
		var $window = $(window),
			offset = 300,
			duration = 300,
			lastScrollTop = 0;

		$window.on('scroll', function() {
			var st = $(this).scrollTop();
			if ($window.scrollTop() > offset) {
				if (st > lastScrollTop) {
					hide_btn();
				} else {
					show_btn();
				}
				lastScrollTop = st;
			} else {
				hide_btn();
			}
		}).trigger('scroll');

		function show_btn() {
			$('.vlt-back-to-top').removeClass('hidden').addClass('visible');
		}

		function hide_btn() {
			$('.vlt-back-to-top').removeClass('visible').addClass('hidden');
		}

		$(document).on('click', '.vlt-back-to-top', function(e) {
			e.preventDefault();
			$('html').scrollTo(0, 500);
		});
	}

	/////////////////////////////////////////////
	// SHORTCODE: IMAGE COLLAGE
	/////////////////////////////////////////////

	function shortcode_image_collage() {
		$('.vlt-justified-gallery').each(function(){
			var $this = $(this);
			$this.imagesLoaded(function(){
				$this.justifiedGallery({
					rowHeight: $this.data('height'),
					lastRow : $this.data('lastrow') ? $this.data('lastrow') : 'justify',
					margins: $this.data('gutter'),
					border: 0
				});

			});

		});
	}

	/////////////////////////////////////////////
	// SHORTCODE: COUNTER UP
	/////////////////////////////////////////////

	function shortcode_counter_up() {
		var element = $('.vlt-counter-up');
		element.each(function() {
			$(this).one('inview', function() {
				var $this = $(this),
					number = parseInt($this.find('.vlt-counter-up__number span').attr('data-value'), 10);
				$this.find('.vlt-counter-up__number span').countTo({
					from: 0,
					to: number,
					speed: 1200,
					refreshInterval: 30
				});
			});
		});
	}

	/////////////////////////////////////////////
	// SHORTCODE: PROGRESS BAR
	/////////////////////////////////////////////

	function shortcode_progress_bar() {
		var element = $('.vlt-progress-bar'),
			duration = 750;
		element.each(function() {
			$(this).one('inview', function() {
				var $this = $(this),
					percent = parseInt($this.find('.vlt-progress-bar__percent').text(), 10);

				$this.find('.vlt-progress-bar__bar span:not(.vlt-progress-bar__percent)').animate({
					width: percent + '%'
				}, duration);

				setTimeout(function() {
					$this.find('.vlt-progress-bar__percent').addClass('is-visible');
				}, duration);
			});
		});
	}

	/////////////////////////////////////////////
	// SHORTCODE: CIRCLE BAR
	/////////////////////////////////////////////

	function shortcode_circle_bar() {
		var element = $('.vlt-circle-bar'),
			duration = 750;

		element.each(function() {

			var $this = $(this),
				circle = $this.find('.vlt-circle-bar__circle'),
				percent = circle.data('percent'),
				thickness = circle.data('thickness'),
				trackcolor = circle.data('trackcolor'),
				barcolor = circle.data('barcolor'),
				size = circle.data('size');

			$this.find('.vlt-circle-bar__content').circleProgress({
				value: percent / 100,
				size: size,
				thickness: thickness,
				lineCap: 'round',
				startAngle: -(3 * Math.PI) / 2,
				fill: barcolor,
				emptyFill: trackcolor,
				animation: {
					duration: duration
				}
			});

			$this.one('inview', function() {
				$(this).find('.vlt-circle-bar__content').circleProgress('redraw');
				$(this).find('.vlt-circle-bar__circle span').countTo({
					from: 0,
					to: percent,
					speed: 1200,
					refreshInterval: 30
				});
			});
		});
	}

	var vlthemes_scripts = {
		init: function() {
			vlthemes_header_effect();
			vlthemes_header_fullscreen();
			vlthemes_header_aside();
			vlthemes_header_default();
			vlthemes_header_mobile_menu();
			vlthemes_fixed_footer();
			vlthemes_masonry_grid();
			vlthemes_post_navigation();
			vlthemes_load_more_btn();
			vlthemes_back_to_top();
			vlthemes_post_gallery();
			vlthemes_scroll_to();
		},
		thirdParty: function() {

			// Preloader
			setTimeout(function() {
				$('.vlt-site-preloader').fadeOut(500);
			}, 1000);

			// Sticky Sibebar
			var adminBarHeight = $('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0;
			var stickyHeaderHeight = $('.vlt-header').length ? $('.vlt-header').outerHeight() : 0;

			$('body').imagesLoaded(function() {
				$('.vlt-column-sticky-content, .vlt-column-sticky-sidebar').theiaStickySidebar({
					additionalMarginTop: 30 + adminBarHeight + stickyHeaderHeight,
					additionalMarginBottom: 30
				});
				$('.vlt-shortcode-column-sticky-sidebar').theiaStickySidebar({
					containerSelector: '.vlt-shortcode-column-sticky-wrap',
					additionalMarginTop: 30 + adminBarHeight + stickyHeaderHeight,
					additionalMarginBottom: 30
				});
			});

			// Fitvids
			$('body').fitVids();

			// Tooltip
			$('.tooltip').tooltipster({
				theme: 'tooltipster-noir',
				trigger: 'hover',
				delay: 0
			});

			// Jarallax
			$('.jarallax').jarallax({
				speed: 0.8
			});

			// Fancybox
			$().fancybox({
				selector: '[data-fancybox]',
				animationEffect: 'fade',
				transitionEffect: 'slide',
				buttons: [
					'zoom',
					'close'
				],
				youtube: {
					controls: 0,
					showinfo: 0
				},
				mobile: {}
			});

		},
		WpBakeryPageBuilder: function() {
			shortcode_image_collage();
			shortcode_counter_up();
			shortcode_progress_bar();
			shortcode_circle_bar();
		}
	};

	vlthemes_scripts.init();
	vlthemes_scripts.thirdParty();
	vlthemes_scripts.WpBakeryPageBuilder();

});