jQuery(function($) {

	"use strict";
	var $window = $(window),
			$document = $(document),
			$htmlbody = $('html,body'),
			$body = $('body');

  Novaworks.core.DomLoadEvent = function () {
    function LoadLazyScripts() {
        if (!Novaworks.global.isPageSpeed()) {
            $('body').addClass('body-completely-loaded');
        }
    }
    if( document.readyState !== 'loading' ) {
      LoadLazyScripts();
    } else {
        document.addEventListener('DOMContentLoaded', function () {
            LoadLazyScripts();
        });
    }
  };
  Novaworks.core.DomLoadEvent();

	Novaworks.core.OnLoadEvent = function () {
		$body.removeClass('site-loading body-loading').addClass('body-loaded');
		try{
				Pace.stop();
		}catch (e) {

		}
};

Novaworks.global.setBrowserInformation();
$(function () {
		$(document).trigger('Novaworks:Document:BeforeRunScript');
		Novaworks.core.SitePreload();
});
window.addEventListener('load', Novaworks.core.OnLoadEvent);
$(document).trigger('Novaworks:Document:AfterInitAllScript');

});
