jQuery(function($) {

	"use strict";

	window.product_card_animation = function(action, delay) {

		if (typeof action === "undefined" || action === null) action = '';
		if (typeof delay === "undefined" || delay === null) delay = 150;

		$('ul.products:not(.novaworks-carousel)').addClass('js_animated');

		if (action == 'reset') $('ul.products.js_animated li.product').removeClass('visible nova_start_animation animated');

		$('ul.products.js_animated li.product:not(.visible)').each(function() {
	    	if ( $(this).visible("partial") ) {
                $(this).addClass('visible');
			}
		});

		$('ul.products.js_animated li.product.visible:not(.nova_start_animation)').each(function(i) {
	    	$(this).addClass('nova_start_animation');
	    	$(this).delay(i*delay).queue(function(next) {
                $(this).addClass('animated');
                next();
            });
		});

		$('ul.products.js_animated li.product.visible:first').prevAll().addClass('visible').addClass('nova_start_animation').addClass('animated');

	}

	$('ul.products.js_animated').imagesLoaded( function() {
		product_card_animation();
	});

	$(window).resize(function() {
		nova_js_throttle(product_card_animation(), 300);
	});

    $(window).scroll(function() {
    	nova_js_throttle(product_card_animation(), 300);
    });

	$(document).ajaxComplete(function() {
		$('ul.products.js_animated').imagesLoaded( function() {
			product_card_animation();
		});
	});

});
