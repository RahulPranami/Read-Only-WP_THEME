<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

			<?php if (is_home() && !is_front_page()) : ?>
				<header class="major">
					<h2><?php single_post_title(); ?></h2>
					<!-- <p>Just an incredibly simple responsive site<br />
					template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p> -->
				</header>
			<?php endif; ?>

			<div class="features">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

				endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>
		<?php endif; ?>

	</div>
</section>

<?php
get_footer();
