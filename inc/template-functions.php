<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gina_Marie
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gina_marie_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gina_marie_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gina_marie_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gina_marie_pingback_header' );
