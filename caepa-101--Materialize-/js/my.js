/**
 * my.js
 *
 *
 *
 */
jQuery(document).ready(function ($) {

	$('.button-collapse').sideNav({
		menuWidth: 300, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
	});

	// Full Primary Menu Dropdown
	// Full About
	$("#main-nav [title='about']").addClass("about dropdown-button").attr('data-activates', 'about').append("<i class='mdi-navigation-arrow-drop-down right'></i>");
	$("#main-nav .about ul.sub-menu").removeClass('sub-menu').addClass("dropdown-content").attr('id', 'about');

	// Full Committees
	$("#main-nav [title='committees']").addClass("committees dropdown-button").attr('data-activates', 'committees').append("<i class='mdi-navigation-arrow-drop-down right'></i>");
	$("#main-nav .committees ul.sub-menu").removeClass('sub-menu').addClass("dropdown-content").attr('id', 'committees');

	// Full Resources
	$("#main-nav [title='resources']").addClass("resources dropdown-button").attr('data-activates', 'resources').append("<i class='mdi-navigation-arrow-drop-down right'></i>");
	$("#main-nav .resources ul.sub-menu").removeClass('sub-menu').addClass("dropdown-content").attr('id', 'resources');

	// Initialization for Dropdown Menu Button | http://materializecss.com/navbar.html#navbar-dropdown
	$(".dropdown-button").dropdown({
		hover: true,
		constrain_width: false,
		belowOrigin: true,
	});

	// Side-Nav Primary Menu Dropdown
	// Side-Nav About        
	$("#mobile-nav li.about.no-padding").wrapInner("<ul class='collapsible collapsible-accordion'><li></li></ul>");
	$("#mobile-nav [title='about']").addClass("collapsible-header").append("<i class='mdi-navigation-arrow-drop-down'></i>");
	$("#mobile-nav .about ul.sub-menu").removeClass('sub-menu').wrap("<div class='collapsible-body'></div>");

	// Side-Nav Committees        
	$("#mobile-nav li.committees.no-padding").wrapInner("<ul class='collapsible collapsible-accordion'><li></li></ul>");
	$("#mobile-nav [title='committees']").addClass("collapsible-header").append("<i class='mdi-navigation-arrow-drop-down'></i>");
	$("#mobile-nav .committees ul.sub-menu").removeClass('sub-menu').wrap("<div class='collapsible-body'></div>");

	// Side-Nav Resources        
	$("#mobile-nav li.resources.no-padding").wrapInner("<ul class='collapsible collapsible-accordion'><li></li></ul>");
	$("#mobile-nav [title='resources']").addClass("collapsible-header").append("<i class='mdi-navigation-arrow-drop-down'></i>");
	$("#mobile-nav .resources ul.sub-menu").removeClass('sub-menu').wrap("<div class='collapsible-body'></div>");

	// Initialization for Accordian Menu | http://materializecss.com/collapsible.html#intialization
	$('.collapsible').collapsible({
		accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	});

	// Adds class to footer anchors 
	$('.site-footer #main-nav a').addClass("white-text");

	// Initialization for Materialize Slider | http://materializecss.com/media.html#slider
	$('.slider').slider({
		full_width: true,
		indicators: true,
		height: 500
	});

	// Initialization for Materizlize Select | http://materializecss.com/forms.html#select
	$('select').material_select();

	// Initialization for Materialize Tabs | http://materializecss.com/tabs.html#initialization
	$('ul.tabs').tabs();

	// Initialization for Parallax Container |  http://materializecss.com/parallax.html#initialization
	$('.parallax').parallax();

	// Initialization for modals | http://materializecss.com/modals.html#initialization
	$('.modal-trigger').leanModal();

	// Removes WP-Generated Page Titles
	$('.entry-header').remove();

	// Pods Form Fields
	$('#modal-links .modal-content').prepend('<h3>Link Information</h3>');
	$('.pods-form-fields textarea').addClass('materialize-textarea').attr('length', '300');

	// Initialization for Character Count | http://materializecss.com/forms.html#character-counter
	$('input, textarea').characterCounter();

	// Authors Avatars: https://wordpress.org/support/plugin/author-avatars
	$(".widget_author_avatars ").wrapInner("<div class='collection with-header'></div>");
	$(".widget_author_avatars h5").wrap("<div class='collection-header'></div>");
	//$(".widget_author_avatars [class='author-list']").addClass("collection");
	$(".widget_author_avatars [class='user with-name with-biography bio-length- biography-missing with-email']").addClass("collection-item avatar");
	$(".widget_author_avatars [class='user with-name with-biography bio-length- with-email']").addClass("collection-item avatar");
	//$(".widget_author_avatars [class='avatar']").addClass("circle");
	$(".widget_author_avatars [class='avatar avatar-128 photo']").addClass("circle");
	$(".widget_author_avatars [class='name']").addClass("title");
	$(".widget_author_avatars [class='email']").addClass("card-action");

	// Links Library: http://ylefebvre.ca/wordpress-plugins/link-library/
	//$(".LinkLibraryCat li").addClass("col s6");
	//$(".LinkLibraryCat li").wrapInner("<div class='card hoverable'></div>");
	//$(".LinkLibraryCat .card-content").prepend("<span class='card-title activator grey-text text-darken-4'><button class='activator btn-floating btn-large waves-effect waves-light teal'><i class='fa fa-info'></i></button></span>");
	//$(".LinkLibraryCat .card-content a").wrap("<p></p>");

	//I was working here to match all other card reveals
	//$(".LinkLibraryCat .card-reveal").prepend("<i class='card-title grey-text text-darken-4 fa fa-close right'></i>");
	// Links Library Category Dropdown Field
	//$("#linktable .select-wrapper").addClass("input-field");
	//$("#linktable input").addClass("col").addClass("s12").addClass("m4").addClass("btn-large").addClass("teal").addClass("lighten-1").css( { height: "54px" } );
	//$("#linktable ul").prepend("<li class='disabled selected'><span>Choose A Link Category</span></li>");

	// WP RSS Multi-Importer: http://www.wprssimporter.com/
	$(".news-wrapper .imagefix img").addClass("circle"); // widget
	$(".rssmi_wrap .imagefix img").addClass("circle"); // shortcode
	$(".rssmi_pagination").addClass("rssmi pagination").removeClass("rssmi_pagination"); // shortcode
	$(".rssmi.pagination li").addClass("waves-effect"); // shortcode
	$(".rssmi.pagination li.prev a").empty().wrapInner("<i class='fa fa-chevron-left'></i>"); // shortcode
	$(".rssmi.pagination li.next a").empty().wrapInner("<i class='fa fa-chevron-right'></i>"); // shortcode

	// WP Bussiness Directory, wpbdp: http://businessdirectoryplugin.com/
	// Directory Actions
	$(".wpbdp-main-links").addClass("col").addClass("s12").addClass("no-padding");
	$(".wpbdp-bar.cf").addClass("no-padding");
	$(".wpbdp-bar.cf .button").addClass("btn-large").addClass("col").addClass("s12").addClass("m4").removeClass(".button");
	// Directory Categories
	$(".wpbdp-page-content #wpbdp-categories ul").addClass("collection");
	$(".wpbdp-page-content #wpbdp-categories ul li").addClass("collection-item");
	// Submit a listing to Directory
	$(".wpbdp-listing-form [type='submit']").addClass("btn");

	$(".wpbdp-thumbnail").unwrap().unwrap();
	$(".wpbdp-listing.excerpt").removeClass("odd").removeClass("even");

	// Maps enable / disable pointer events
	$('.parallax-container').click(function () {
		$('.parallax-container iframe').css("pointer-events", "auto");
	});

	$(".parallax-container").mouseleave(function () {
		$('.parallax-container iframe').css("pointer-events", "none");
	});
    
    // Caldera Form
    $(".caldera-grid .row input").unwrap();
    $(".caldera-grid .row textarea").unwrap();
    $(".caldera-grid .row textarea").addClass("materialize-textarea");

    // jquery validator | jqueryvalidation.org/


    //

    
/// END
});