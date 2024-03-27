<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Read_Only_by_HTML5UP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a class="image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<?php the_post_thumbnail(); ?>
	</a>

	<div class="inner">

		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h4 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>');
		endif;
		?>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'readonly'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'readonly'),
				'after'  => '</div>',
			)
		);
		?>
		<?php if ('post' === get_post_type()) : ?>
			<!-- <div class="entry-meta"> -->
				<?php
				// readonly_posted_on();
				// readonly_posted_by();
				?>
			<!-- </div> -->
		<?php endif; ?>

		<?php // readonly_entry_footer(); ?>

	</div>
</article>
