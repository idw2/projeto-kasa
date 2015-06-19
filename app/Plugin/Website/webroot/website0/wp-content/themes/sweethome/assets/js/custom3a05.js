// jQuery
(function($) {
  "use strict";
	$(document).ready(function(){
		$('.comment-form-wrapper #commentform').attr("class","contact-form");
		
		$('.widget_recent_entries > ul > li > a').each(function(){
			jQuery(this).prepend('<i class="fa fa-arrow-circle-right"></i>&nbsp;');
		});
		$('.widget_contact-form-wrapper').addClass('contact-form-wrapper');
		$('.sidebar-widget select').addClass('form-control');
		$('.sidebar-widget table').addClass('table');
		
		/** Active tabbed widget li **/
		$( "div.tabbed-content ul li" ).first().addClass('active');
		$( "div.tab-content div" ).first().addClass('active in');
	})
})(jQuery);