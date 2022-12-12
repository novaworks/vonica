(function($) {

  "use strict";

  // =============================================================================
  // Foundation
  // =============================================================================

  $(document).foundation();
  
  $('.js_mobile_menu_back').each(function(){
    var backTxt = $(this).parent().closest('.is-drilldown-submenu-parent').find('> a').text();
    $(this).text(backTxt);
  });

  $(function(){
    Novaworks.core.initAll($(document));
  });
})(jQuery);
