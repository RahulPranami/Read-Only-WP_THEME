<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Read_Only_by_HTML5UP
 */

get_header();
?>

<section>
	<div class="image main" data-position="center">
		<?php if (is_home() && !is_front_page()) : ?>
			<img src="<?php echo has_post_thumbnail() ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] : get_template_directory_uri() . '/assets/images/banner.jpg'; ?>" alt="" />
		<?php else : ?>
			<img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php echo esc_attr(get_bloginfo('title')); ?>" />
		<?php endif; ?>
	</div>
	<div class="container">
		<?php if (have_posts()) : ?>
			<header class="major">
				<h2>
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'readonly'), '<span>' . get_search_query() . '</span>');
					?>
				</h2>
				<!-- <p>Just an incredibly simple responsive site<br />
		template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p> -->
			</header>

			<div class="features">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());
				endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>
		<?php

		else :

			get_template_part('template-parts/content', 'none');

		endif; ?>
	</div>
</section>

<?php
get_footer();
