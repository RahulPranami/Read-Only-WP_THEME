<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Read_Only_by_HTML5UP
 */

get_header();
?>


<section>
	<?php if (has_post_thumbnail()) : ?>
		<div class="image main" data-position="center">
			<img src="<?php echo has_post_thumbnail() ? wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0] : esc_url(get_header_image()); ?>" alt="" />
		</div>
	<?php endif; ?>
	<div class="container">

		<header class="major">
			<h2><?php the_title(); ?></h2>
		</header>

		<?php the_content(); ?>

		<?php if (get_edit_post_link()) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Edit <span class="screen-reader-text">%s</span>', 'readonly'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer>
		<?php endif; ?>

		<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="button alt">' . esc_html__('Previous : ', 'readonly') . '%title</span>',
				'next_text' => '<span class="button alt">' . esc_html__('Next : ', 'readonly') . '%title</span>',
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;
		?>
	</div>
</section>

<?php
get_footer();
