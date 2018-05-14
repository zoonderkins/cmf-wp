$(document).ready(function() {
  	var hamburger = $('#hamburger-icon');
  	hamburger.click(function() {
	    hamburger.toggleClass('active');
	    $('.menu').toggleClass('toggle');
	    $('.container').toggleClass('menu-toggle');
	    return false;
  	});
});