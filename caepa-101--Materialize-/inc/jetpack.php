<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package CAEPA-101
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function caepa_101_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'caepa_101_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function caepa_101_jetpack_setup
add_action( 'after_setup_theme', 'caepa_101_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function caepa_101_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function caepa_101_infinite_scroll_render
