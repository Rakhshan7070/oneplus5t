(function ($) {
  "use strict";
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".fotawp-scrollto-top a").fadeIn();
    } else {
      jQuery(".fotawp-scrollto-top a").fadeOut();
    }
  });
  jQuery(".fotawp-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
