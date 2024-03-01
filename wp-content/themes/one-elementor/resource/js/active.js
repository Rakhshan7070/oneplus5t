(function($) {
    "use strict";

    $(document).on('ready', function() {	
		
		// Menu Click JS
		$('.menu-click,.close-menu a').on('click', function(){
			$('.menu-inner').toggleClass('active');
		});

		$(".close-menu a").focusout(function(){
			$("#side-menu > li:first-child > a").focus();
			$(".menu-click").addClass('active');

		});

		// Search Form JS
		$('.one-elementor-search-icon,.one-elementor-search-close').on('click', function(){
			$('.search-form-main').toggleClass('active');
		});
	
		$(".one-elementor-search-close").focusout(function(){
			$(".search-form label input").focus();
			$(".one-elementor-search-icon").addClass('active');

		});
	});	
	
	
	jQuery(window).on('load', function() {
	    // init Masonry
		var $grid = $('.one-elementor-masonry').masonry({
			// options
			itemSelector: '.one-elementor-masonry-item',
		});
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
			$grid.masonry('layout');
		});
	});

	
	
})(jQuery);


