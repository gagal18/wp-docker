<?php
/**
 * Block styles.
 *
 * @package bojan
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function bojan_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'bojan-flat-button',
			'label' => __( 'Flat button', 'bojan' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'bojan-shadow-button',
			'label' => __( 'Button with shadow', 'bojan' ),
		)
	);
}
add_action( 'init', 'bojan_register_block_styles' );
