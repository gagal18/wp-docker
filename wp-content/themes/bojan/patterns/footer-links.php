<?php
/**
 * Title: Footer links
 * Slug: bojan/footer-links
 * Categories: text
 * Inserter: no
 *
 * @package bojan
 * @since 1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"fontSize":"extra-small"} -->
	<p class="has-extra-small-font-size"><?php echo esc_html__( 'Copyright', 'bojan' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'bojan' ) ); ?></p><!-- /wp:paragraph -->
	<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
	<!-- wp:social-links {"className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
