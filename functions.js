jQuery(document).ready(function() {
	var top = jQuery('div#comments-form').offset().top;
	jQuery(window).scroll(function () {
		var scrollNow = jQuery(this).scrollTop();
		if(scrollNow > top) {
			jQuery('div#comments-form').css({'position':'fixed','top':'0'});
		}
		else {
			jQuery('div#comments-form').css({'position':'relative'});
		}
	});
});