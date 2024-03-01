(function($) {
  "use strict";
  jQuery(document).ready(function($) {
    $("#primary-menu,.paira-header__button");
    $("#primary-menu,.paira-header__button").KeyboardAccessibleDropDown();
  });
  
  $.fn.KeyboardAccessibleDropDown = function() {
    var nav = $(this);
    $("a,.paira-header__button--icon", nav).focus(function() {
      $(this).parents("li,.paira-header__button ").addClass("active-focus")
    }).blur(function() {
      $(this).parents("li,.paira-header__button ").removeClass("active-focus")
    });
  };
})(jQuery);
