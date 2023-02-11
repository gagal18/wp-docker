<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bojan
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'BOJAN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support.
 */
function bojan_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "bojan-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}
}
add_action( 'after_setup_theme', 'bojan_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function bojan_styles() {
	wp_enqueue_style(
		'bojan-style',
		get_stylesheet_uri(),
		[],
		BOJAN_VERSION
	);
	wp_enqueue_style(
		'bojan-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		BOJAN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'bojan_styles' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );
