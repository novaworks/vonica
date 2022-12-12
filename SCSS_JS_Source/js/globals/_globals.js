(function($){

	"use strict";
	var $window = $(window),
			$document = $(document),
			$htmlbody = $('html,body'),
			$body = $('body');

	var Novaworks = {
			global:     {},
			core:     {},
			module:  {}
	}

	window.Novaworks = Novaworks;

	var defaultConfig = {
			rootMargin: '100px',
			threshold: 0,
			load: function load(element) {
					var base_src = element.getAttribute('data-src') || element.getAttribute('data-lazy') || element.getAttribute('data-lazy-src') || element.getAttribute('data-lazy-original'),
							base_srcset = element.getAttribute('data-src') || element.getAttribute('data-lazy-srcset'),
							base_sizes = element.getAttribute('data-sizes') || element.getAttribute('data-lazy-sizes');

					if (base_src) {
							element.src = base_src;
					}
					if (base_srcset) {
							element.srcset = base_srcset;
					}
					if (base_sizes) {
							element.sizes = base_sizes;
					}
					if (element.getAttribute('data-background-image')) {
							element.style.backgroundImage = 'url("' + element.getAttribute('data-background-image') + '")';
					}
					element.setAttribute('data-element-loaded', true);
					if ($(element).hasClass('jetpack-lazy-image')) {
							$(element).addClass('jetpack-lazy-image--handled');
					}
			},
			complete: function( $elm ){
					// this function will be activated when element has been loaded
			}
	};

	jQuery.exists = function(selector) {return ($(selector).length > 0);}
	//===============================================================
	// Global Debounce
	//===============================================================

	// Returns a function, that, as long as it continues to be invoked, will not
	// be triggered. The function will be called after it stops being called for
	// N milliseconds. If `immediate` is passed, trigger the function on the
	// leading edge, instead of the trailing.

	window.nova_js_debounce = function(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};


	//===============================================================
	// Global Throttle
	//===============================================================

	// Returns a function, that, as long as it continues to be invoked, will only
	// trigger every N milliseconds. If <code>immediate</code> is passed, trigger the
	// function on the leading edge, instead of the trailing.

	window.nova_js_throttle = function(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			if ( !timeout ) timeout = setTimeout( later, wait );
			if (callNow) func.apply(context, args);
		};
	};
	window.popup_createCookie = function(name, value, days) {
		var expires;
		if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toGMTString();
		} else {
				expires = "";
		}
		document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
	};
	window.popup_readCookie = function(name) {
			var nameEQ = escape(name) + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) === ' ') c = c.substring(1, c.length);
					if (c.indexOf(nameEQ) === 0) return unescape(c.substring(nameEQ.length, c.length));
			}
			return null;
	};
	window.popup_eraseCookie = function(name) {
			popup_createCookie(name, "", -1);
	};

	//===============================================================
	// Scroll Detection
	//===============================================================

	window.scroll_position = $(window).scrollTop();
	window.scroll_direction = 'fixed';

	function scroll_detection() {
		var scroll = $(window).scrollTop();
	    if (scroll > window.scroll_position) {
	        window.scroll_direction = 'down';
	    } else {
	        window.scroll_direction = 'up';
	    }
	    window.scroll_position = scroll;
	}

	$(window).scroll(function() {
        scroll_detection();
    });


	//===============================================================
	// Lazy load
	//===============================================================
	function markAsLoaded(element) {
			element.setAttribute('data-element-loaded', true);
	}

	var isLoaded = function isLoaded(element) {
			return element.getAttribute('data-element-loaded') === 'true';
	};

	var onIntersection = function onIntersection(load) {
			return function (entries, observer) {
					entries.forEach(function (entry) {
							if (entry.intersectionRatio > 0) {
									observer.unobserve(entry.target);

									if (!isLoaded(entry.target)) {
											load(entry.target);
											markAsLoaded(entry.target);
									}
							}
					});
			};
	};
	window.nova_lazyload = function () {
      var selector = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

      var _defaultConfig$option = $.extend({}, defaultConfig, options),
          rootMargin = _defaultConfig$option.rootMargin,
          threshold = _defaultConfig$option.threshold,
          load = _defaultConfig$option.load;

      var observer = void 0;

      if (window.IntersectionObserver) {
          observer = new IntersectionObserver(onIntersection(load), {
              rootMargin: rootMargin,
              threshold: threshold
          });
      }

      return {
          triggerSingleLoad: function triggerSingleLoad(){
              if(!$.exists(selector)){
                  return;
              }
              var element = selector.get(0);
              if(isLoaded(element)){
                  return;
              }
              if (observer) {
                  observer.observe(element);
                  return;
              }
              load(element);
              markAsLoaded(element);

          },
          observe: function observe() {

              if ( !$.exists(selector) ) {
                  return;
              }
              for (var i = 0; i < selector.length; i++) {
                  if (isLoaded(selector[i])) {
                      continue;
                  }
                  if (observer) {
                      observer.observe(selector[i]);
                      continue;
                  }
                  load(selector[i]);
                  markAsLoaded(selector[i]);
              }
          },
          triggerLoad: function triggerLoad(element) {
              if (isLoaded(element)) {
                  return;
              }
              load(element);
              markAsLoaded(element);
          }
      };
  };
	Novaworks.global.getBrowseInformation = function () {
			var name, version, platform_name, _tmp;

			var ua = navigator.userAgent.toLowerCase(),
					platform = navigator.platform.toLowerCase(),
					UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', '0'];

			function getInternetExplorerVersion() {
					var rv = -1,
							ua2,
							re2;

					if (navigator.appName == 'Microsoft Internet Explorer') {
							ua2 = navigator.userAgent;
							re2 = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
							if (re2.exec(ua2) != null) rv = parseFloat(RegExp.$1);
					} else if (navigator.appName == 'Netscape') {
							ua2 = navigator.userAgent;
							re2 = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
							if (re2.exec(ua2) != null) rv = parseFloat(RegExp.$1);
					}

					return rv;
			}

			_tmp = getInternetExplorerVersion();

			if (_tmp != -1) {
					name = 'ie';
					version = _tmp;
			} else {
					name = UA[1] == 'version' ? UA[3] : UA[1];
					version = UA[2].substring(0, 2);
			}

			platform_name = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0];
			return {
					name: name,
					version: version,
					platform: platform_name
			};
	};
	Novaworks.global.setBrowserInformation = function () {
			var information = Novaworks.global.getBrowseInformation();

			if ('ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0) {
					document.documentElement.classList.add('touchevents');
			} else {
					document.documentElement.classList.add('no-touchevents');
			}

			document.documentElement.classList.add(information.name);
			document.documentElement.classList.add(information.name + information.version);
			document.documentElement.classList.add('platform-' + information.platform);

			function setScrollbarWidth(){
					var _scrollbarwidth = window.innerWidth - document.documentElement.clientWidth;
					document.documentElement.style.setProperty('--scrollbar-width-o', _scrollbarwidth + 'px');
					if(_scrollbarwidth == 0){
							if(information.platform == 'mac'){
									_scrollbarwidth = 15;
							}
							else if(information.platform == 'ios'){
									_scrollbarwidth = 10;
							}
					}
					document.documentElement.style.setProperty('--scrollbar-width', _scrollbarwidth + 'px');
			}
			setScrollbarWidth();

			$(window).on('resize', setScrollbarWidth );
	};
	Novaworks.global.isPageSpeed = function () {
		return typeof navigator !== "undefined" && (/(lighthouse|gtmetrix)/i.test(navigator.userAgent.toLocaleLowerCase()) || /mozilla\/5\.0 \(x11; linux x86_64\)/i.test(navigator.userAgent.toLocaleLowerCase()));
	};
	Novaworks.global.loadDependencies = function( dependencies, callback ) {
			var _callback = callback || function() {};

			if( !dependencies ) {
					_callback();
					return;
			}

			var newDeps = dependencies.map( function( dep ) {
					if( _loadedDependencies.indexOf( dep ) === -1 ) {
							if( typeof _inQueue[ dep ] === 'undefined' ) {
									return dep;
							}
							else {
									_inQueue[ dep ].push( _callback );
									return true;
							}
					}
					else {
							return false;
					}
			});

			if( newDeps[0] === true ) {
					return;
			}

			if( newDeps[0] === false ) {
					_callback();
					return;
			}

			var queue = newDeps.map( function( script ) {
					_inQueue[ script ] = [ _callback ];
					return $.getCachedScript( script );
			});

			// Callbacks invoking
			var onLoad = function onLoad() {
					var index = 0;
					newDeps.map( function( loaded ) {
							index++;
							_inQueue[ loaded ].forEach( function( callback ) {
									if(index == newDeps.length){
											console.log(loaded);
											callback();
									}
							});
							delete _inQueue[ loaded ];
							_loadedDependencies.push( loaded );
					});
			};

			// Run callbacks when promise is resolved
			$.when.apply( null, queue ).done( onLoad );
	};

	Novaworks.global.loadJsFile = function(name){
			return nova_js_var.js_path + name + (nova_js_var.js_min ? '.min.js' : '.js');
	};
	Novaworks.global.AnimateLoadElement = function( effect_name, $elements, callback ){
		var _callback = callback || function() {};
		var animation_timeout = 0;

		// hide all element that not yet loaded
		$elements.css({ 'opacity': 0 });

		if ( effect_name == 'fade') {
				$elements.each(function () {
						$(this).stop().animate({
								'opacity': 1
						}, 1000 );
				});
				animation_timeout = 1000;
		}
		else if ( effect_name == 'sequencefade'){
				$elements.each(function (i) {
						var $elm = $(this);
						setTimeout(function () {
								$elm.stop().animate({
										'opacity': 1
								}, 1000 );
						}, 100 + (i * 50) );
				});
				animation_timeout = 500 + ($elements.length * 50);
		}
		else if ( effect_name == 'upfade'){

				$elements.each(function(){
						var $elm = $(this),
								t = parseInt($elm.css('top'), 10) + ( $elm.height() / 2);
						$elm.css({
								top: t + 'px',
								opacity: 0
						});
				});

				$elements.each(function () {
						var $el = $(this);
						$el.stop().animate({
								top: parseInt($el.css('top'), 10) - ( $el.height() / 2),
								opacity: 1
						}, 1500);
				});

				animation_timeout = 2000;
		}
		else if ( effect_name == 'sequenceupfade'){

				$elements.each(function(){
						var $elm = $(this),
								t = parseInt($elm.css('top'), 10) + ( $elm.height() / 2);
						$elm.css({
								top: t + 'px',
								opacity: 0
						});
				});

				$elements.each(function (i) {
						var $elm = $(this);
						setTimeout(function () {
								$elm.stop().animate({
										top: parseInt($elm.css('top'), 10) - ( $elm.height() / 2),
										opacity: 1
								}, 1000);
						}, 100 + i * 50);
				});

				animation_timeout = 1100 + ($elements.length * 50);
		}
		else{
				$elements.css({ 'opacity': 1 });
				animation_timeout = 1000;
		}

		/* run callback */
		setTimeout(function(){
				_callback.call();
		}, animation_timeout );
};
	Novaworks.global.LazyLoad = function () {
		var selector = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
		var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

		var _defaultConfig$option = $.extend({}, defaultConfig, options),
				rootMargin = _defaultConfig$option.rootMargin,
				threshold = _defaultConfig$option.threshold,
				load = _defaultConfig$option.load,
				complete = _defaultConfig$option.complete;

		// // If initialized, then disconnect the observer
		var observer = void 0;

		if ( "IntersectionObserver" in window ) {
				observer = new IntersectionObserver(onIntersection(load), {
						rootMargin: rootMargin,
						threshold: threshold
				});
		}

		return {
				observe: function observe() {
						if ( !$.exists(selector) ) {
								return;
						}
						for (var i = 0; i < selector.length; i++) {
								if (isLoaded(selector[i])) {
										continue;
								}
								if (observer) {
										observer.observe(selector[i]);
										continue;
								}
								load(selector[i]);
								markAsLoaded(selector[i]);
						}
						complete(selector);
				}
		};
};
Novaworks.global.InsightInitLazyEffects = function( selector, $container, load_immediately ){
		function _init_effect(){
				var _effect_name = false === !!$container.attr('data-nova-effect') ? 'sequenceupfade' : $container.attr('data-nova-effect');
				$container.addClass('InsightInitLazyEffects-inited');
				Novaworks.global.AnimateLoadElement(_effect_name, $(selector, $container), function(){
						$(selector, $container).addClass('showmenow');
						if($container.data('isotope')){
								$container.isotope('layout');
						}
				});
		}

		if($container.hasClass('InsightInitLazyEffects-inited')){
				return;
		}

		if(load_immediately){
				_init_effect();
		}
		else{
				Novaworks.global.LazyLoad($container, {
						load : function () {
								_init_effect();
						}
				}).observe();
		}

};
Novaworks.core.SitePreload = function () {
	var pbar = document.getElementById('wpadminbar');

	if (pbar) {
			pbar.classList.add('wpbar');
	}
	$body.removeClass('site-loading');
	$window.on('beforeunload', function (e) {
			var browser_information = Novaworks.global.getBrowseInformation();
			if (browser_information.name != 'safari' && window.self === window.top) {
					if (typeof window['hack_beforeunload_time'] === "undefined" || typeof window['hack_beforeunload_time'] !== "undefined" && e.timeStamp - window['hack_beforeunload_time'] > 1000) {
							$body.addClass('site-loading');
					}
			}
	});
	$document.on('click', 'a[href^="tel:"], a[href^="mailto:"], a[href^="callto"], a[href^="skype"], a[href^="whatsapp"], a.mail-link, a.noloading', function (e) {
			window['hack_beforeunload_time'] = parseInt(e.timeStamp);
	});
	$window.on('pageshow', function (e) {
			if (e.originalEvent.persisted) {
					$body.removeClass('site-loading body-loading');
			}
	});
};
Novaworks.core.initAll = function( $scope ) {

		var $el = $scope.find( '.js-el' ),
				$components = $el.filter( '[data-nova_call_module]' ),
				component = null;
		if($components.length <= 0 ){
				return;
		}
		// initialize  component
		var init_component = function (name, el) {
				var $el = $(el);

				if ( $el.data('init-' + name) ) return;

				if ( typeof Novaworks.module[ name ] !== 'function' ){
						console.log('[Novaworks Component ' + name + '] ---- init error')
				}else {
						component = new Novaworks.module[ name ]( el );
						component.init();
						$el.data('init-' + name, true);
						Novaworks.global.eventManager.publish('Novaworks:component_inited', [name, el]);
				}
		};

		$components.each( function() {
				var self = this,
						names =  $(this).data( 'nova_call_module' );

				if( typeof names === 'string' ) {
						var _name = names ;
						init_component( _name , self);
				}
				else {
						names.forEach( function( name ) {
								init_component(name, self);
						});
				}
		});

};

//===============================================================
// Add (+/-) Button Number Incrementers
//===============================================================

function nova_add_button_nummber_inc() {
	$(".quantity").append('<div class="qty-button inc">+</div><div class="qty-button dec">-</div>');
	$(".qty-button").on("click", function() {

		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
			if(oldValue == 0 ) {
				var newVal = 1;
			}else {
				var newVal = parseFloat(oldValue) + 1;
			}
		} else {
		 // Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}

		$button.parent().find("input").val(newVal);
		if ( $( ".woocommerce-cart-form" ).length ) {
			$( '.woocommerce-cart-form :input[name="update_cart"]' ).prop( 'disabled', false );
		}
	});
}
nova_add_button_nummber_inc();

//===============================================================
// Select 2
//===============================================================
if ( typeof $.fn.select2 === 'function' ) {

	$('.nova-topbar .currency-switcher select').select2({
		minimumResultsForSearch: -1,
		dropdownAutoWidth: true,
		dropdownParent: $('.nova-topbar__left--switcher'),
		allowClear: false
	});

}
//===============================================================
// Widget Toogle
//===============================================================

$('.widget .widget-title').click(function(e){
		e.preventDefault();
		$(this).toggleClass('close');
		$(this).next('div,ul').slideToggle();
});

})(jQuery);
