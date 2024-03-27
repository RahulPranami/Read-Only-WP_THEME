<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Read_Only_by_HTML5UP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'readonly' ); ?></a>

	<!-- Header -->
	<section id="header">
		<header>
			<span class="image avatar">
				<?php the_custom_logo(); ?>
			</span>

			<?php // if (is_front_page() && is_home()) : ?>
			<h1 id="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>


			<?php if ( get_bloginfo( 'description', 'display' ) || is_customize_preview() ) : ?>
				<p><?php echo get_bloginfo( 'description', 'display' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</header>

		<?php if (has_nav_menu('primary')) : ?>
            <nav id="nav" aria-label="<?php esc_attr_e('Primary Menu', 'twentysixteen'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                    )
                );
                ?>
            </nav>
        <?php endif; ?>
		<!--
		<nav id="nav">
			<ul>
				<li><a href="#one" class="active">About</a></li>
				<li><a href="#two">Things I Can Do</a></li>
				<li><a href="#three">A Few Accomplishments</a></li>
				<li><a href="#four">Contact</a></li>
			</ul>
		</nav>
		-->
		<!--
			-->
		<!-- <footer>
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
		</footer> -->

		<?php if (has_nav_menu('social')) : ?>
            <footer aria-label="<?php esc_attr_e('Social Links Menu', 'twentysixteen'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social',
                        'menu_class' => 'icons',
                        'container' => false,
                        'link_before' => '<span class="label">',
                        'link_after' => '</span>',
                        'walker' => new Social_Media_Nav_Walker(),
                    )
                );
                ?>
            </footer>
        <?php endif; ?>

	</section>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
