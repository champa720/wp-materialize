(function ($) {
	"use strict";
	$(function () {
        
        $('.accordion').on('click', '.toggle', function( event ){
                jQuery( this ).toggleClass('down');
                jQuery( this ).next().slideToggle();
        });
        // Place your administration-specific JavaScript here
	});
}(jQuery));

jQuery(document).on('widget-updated', function(e, widget){
       
        jQuery('.accordion').on('click', '.toggle', function( event ){
                jQuery( this ).toggleClass('down');
                jQuery( this ).next().slideToggle();
        });
               
});