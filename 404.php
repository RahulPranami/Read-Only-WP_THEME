<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Read_Only_by_HTML5UP
 */

get_header();
?>

<section class="error-404 not-found">
	<div class="container">

		<header class="major">
			<h2><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'readonly'); ?></h2>
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'readonly'); ?></p>
		</header>
		<?php get_search_form(); ?>

	</div>
</section>

<?php
get_footer();
