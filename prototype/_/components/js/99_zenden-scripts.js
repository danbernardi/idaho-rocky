/*jslint browser: true*/
/*global $, jQuery, alert, console, Modernizr*/

$(document).ready(function () {
	"use strict";
	
	// apply active class to anchors that match current page
	(function addActive() {
		$('a[href^="' + location.pathname.split("/")[2] + '"]').addClass('active');
	}());
	
  	$('.content aside .fixedscroll').scrollToFixed();
	
});
