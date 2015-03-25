/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').addClass('active');
	}());
	
  $('.content aside .fixedscroll').scrollToFixed();
  
  (function initSlick() {
    $('.home-slick').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrow: false,
      draggable: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 8000,
      pauseOnHover: false,
      speed: 1000
    });
    
    $('.home-slick').find('[data-slick-index="0"]').addClass('slowZoom');
    $('.home-slick').on('afterChange', function (slick, currentSlide) {
      var currSlide = $('.home-slick').slick('slickCurrentSlide'),
        currSlideIndex = $('.home-slick').find("[data-slick-index='" + currSlide + "']");
      $('.home-slick div').removeClass('slowZoom');
      currSlideIndex.addClass('slowZoom');
    });
  }());
	
});
