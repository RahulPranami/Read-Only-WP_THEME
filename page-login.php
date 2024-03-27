<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

		<form name="loginform" id="loginform" action="<?php echo admin_url('admin-ajax.php') ?>" method="post">

			<div class="row gtr-uniform">
				<div class="col-12">
					<input type="text" name="log" id="user_login" aria-describedby="login-message" class="input" value="" size="20" autocapitalize="none" autocomplete="username" required="required" placeholder="Username or Email Address">
				</div>
				<div class="col-12">
					<input type="password" name="pwd" id="user_pass" aria-describedby="login-message" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required" placeholder="Password">
					<!-- <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password"> -->
					<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					<!-- </button> -->
				</div>

				<div class="col-12">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Remember Me</label>
				</div>


				<input type="hidden" name="action" value="login">

				<?php
				// add a wordpress nounce
				wp_nonce_field('ajax-login-nonce', 'security');

				?>

				<div class="col-12">
					<ul class="actions">
						<li>
							<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
						</li>
						<!-- <li><input type="submit" value="Send Message"></li> -->
						<li><input type="reset" value="Reset" class="alt"></li>
					</ul>
				</div>
			</div>
		</form>

	</div>
</section>

<?php
get_footer();
