/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr*/

var j$ = jQuery.noConflict();
j$(document).ready(function () {
	"use strict";

	// init fixed sidebar
  (function initScrollToFixed() {
    j$('.content aside .fixedscroll').scrollToFixed();
  }());
  
  // init homepage slideshow
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
  
  // init simple image slider using slides.js
  (function initSlides() {
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
  
  // init mobile menu
  (function mobmenuInit() {
    j$('#mobmenu').css('visibility', 'visible');
    j$("#mobmenu").mmenu({
      // options
    }, {
      // configuration
      offCanvas: {
        pageNodetype: "section"
      }
    });
    
    // When the browser / device is resized, the menu will close
    var API = j$("#mobmenu").data("mmenu");
		j$(window).resize(function () {
		  API.close();
		});
  }());
	
});
