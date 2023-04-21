/**
 * File main.js.
 *
 * Theme main script.
 *
 * Contains all theme custom features.
 */
var ss;
(function ($) {
	ss = {
		init: function () {
			this.img();
			this.nav();
			this.form();
			this.misc();
			this.slider();
			this.gallery();
		},
		ie: function () {
			try {
				if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
					$('body').addClass('ie-user');
					return true;
				}
			} catch (err) {
				console.log(err);
			}
			return false;
		},
		img: function (context) {
			if (!context) context = $('body');
			context.find('.bg-cover,[data-fix="image"]').each(function () {
				var wrap = $(this), image = wrap.find('>img');
				if (image.attr('src')) {
					if (wrap.data('fix') != 'image') {
						image.hide();
						wrap.css({ 'background-image': 'url(\'' + image.attr('src') + '\')' });
					} else {
						wrap.find('.svg.img-fluid').css({ 'background-image': 'url(\'' + image.attr('src') + '\')' });
					}
				}
				if (ss.ie()) {
					wrap.find('.svg').removeClass('img-fluid');
				}
			});
		},
		nav: function () {
			//sticky header
			function stickyHeader() {
				var height = $(window).scrollTop();
				var header = $(".site-header");
				var headerTopHeight = $(".header-top").outerHeight();
				if (height > 60) {
					header.addClass("sticky");
					header.css("top", "-" + headerTopHeight + "px");
				} else {
					header.css("top", 0);
					header.removeClass("sticky");
				}
			}
			jQuery(window).resize(stickyHeader);
			jQuery(window).scroll(stickyHeader);
			stickyHeader();

			//site-content padding
			// function siteContentPadding(){
			// 	var headerHeight = jQuery(".header-top").outerHeight();
			// 	var mainContent = jQuery(".site-content");
			// 	mainContent.css("padding-top", headerHeight);
			// }
			// siteContentPadding();
			// jQuery(window).resize(siteContentPadding);

			//dropdown toggle
			$(".navbar-nav .menu-item-has-children .caret").on(
				"click",
				function () {
					$(this).next(".dropdown-menu").slideToggle();
				}
			);
		},
		form: function () {
			try {
				$('.input-text.qty').each(function () {
					var elm = $(this);
					$('<span class="qty-des"><i class="icon-angle-left"></i></span>').insertBefore($(this));
					$('<span class="qty-ins"><i class="icon-angle-right"></i></span>').insertAfter($(this));
					elm.prev('.qty-des').on('click', function () {
						var val = parseInt(elm.val());
						if (val > 1) {
							elm.val(val - 1);
						}
					});
					elm.next('.qty-ins').on('click', function () {
						var val = parseInt(elm.val());
						elm.val(val + 1);
					});
				});
			} catch (err) {
				console.log(err);
			}
		},
		misc: function () {
			try {
				$('[data-fix="height"]').matchHeight();
			} catch (err) {
				console.log(err);
			}
		},
		slider: function () {

		},
		gallery: function () {
			try {
				$('.fancybox').fancybox({
					openEffect: 'none',
					closeEffect: 'none'
				});
			} catch (err) {
				console.log(err);
			}
			try {
				var fix = function () {
					var t = $('.woocommerce-product-gallery__trigger'), h = t.next('.flex-viewport').outerHeight() - 16;
					t.height(h);
				}
				$(window).bind('load resize', fix);
				$('.woocommerce-product-gallery .flex-control-nav li').on('click', function () {
					setTimeout(fix, 500);
				});
			} catch (err) {
				console.log(err);
			}
		}
	};
	$(function () {
		ss.init();

		//site-content padding
		// var headerHeight = $('.site-header').innerHeight();
		// var siteContent = $('.site-content');

		// siteContent.css("padding-top", headerHeight + 'px');

		// $(window).resize(function () {
		// 	//site-content padding
		// 	var headerHeight = $('.site-header').innerHeight();
		// 	var siteContent = $('.site-content');

		// 	siteContent.css("padding-top", headerHeight + 'px');
		// });
	});


	$('.tab-content').hide();
	//show the first tab content
	$('#tab-1').show();

	$('#select-box').change(function () {
		dropdown = $('#select-box').val();
		//first hide all tabs again when a new option is selected
		$('.tab-content').hide();
		//then show the tab content of whatever option value was selected
		$('#' + "tab-" + dropdown).show();
	});


	$('.tab-menu li a').on('click', function () {
		var target = $(this).attr('data-rel');
		$('.tab-menu li a').removeClass('active');
		$(this).addClass('active');
		$("#" + target).fadeIn('slow').siblings(".tab-box").hide();
		return false;
	});

})(jQuery);




