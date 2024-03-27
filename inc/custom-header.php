<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Read_Only_by_HTML5UP
 */

/**
 * Set up the WordPress core custom header feature.
 *
 */
function readonly_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'readonly_custom_header_args',
			array(
				'default-image'      => get_template_directory_uri() . '/assets/images/banner.jpg',
			)
		)
	);
}
add_action( 'after_setup_theme', 'readonly_custom_header_setup' );
