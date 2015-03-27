/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr*/

var j$ = jQuery.noConflict();
j$(document).ready(function () {
	"use strict";

	
  (function initScrollToFixed() {
    j$('.content aside .fixedscroll').scrollToFixed();
    console.log('scroll to fixed initialized...');
  }());
  
  (function initSlick() {
    j$('.home-slick').slick({
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
    
    j$('.home-slick').find('[data-slick-index="0"]').addClass('slowZoom');
    j$('.home-slick').on('afterChange', function (slick, currentSlide) {
      var currSlide = j$('.home-slick').slick('slickCurrentSlide'),
        currSlideIndex = j$('.home-slick').find("[data-slick-index='" + currSlide + "']");
      j$('.home-slick div').removeClass('slowZoom');
      currSlideIndex.addClass('slowZoom');
    });
  }());
  
  (function initSlides() {
    // initialize simple image slider using slides.js
    j$("#slides").slidesjs({
      width: 940,
      height: 528,
			play: {
				active: false,
				auto: true,
				interval: 7000,
				swap: true
			}
    });
  }());
  
  // init isotope
  (function galleryInit() {
    
    var $container = j$('.gallery');
    $container.isotope({
      itemSelector: '.gallery-item',
      layoutMode: 'packery'
    });
    j$(window).resize(function () {
      $container.isotope('layout');
    });
  }());
	
});
