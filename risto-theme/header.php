<?php
/**
 * The header for our theme.
 * @package risto-theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://ristojovanovic.in.rs">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="manifest" href="/manifest.json">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:700|Gentium+Basic:400,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class();?> >
<div id="page" class="hfeed site mCustomScrollbar"  data-mcs-theme="dark">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'risto-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="group-fixed visible-lg">

			
				<img src="<?php bloginfo('template_directory');  ?>/img/JRisto.jpg" alt="" class="group-responsive">
				<div class="social-button">
					    <a href="https://www.facebook.com/ristoj1" target="_blank"><span class="hb hb-xs spin-icon hb-facebook"><i class="fa fa-facebook"></i></span></a>
					    <a href="# " target="_blank"><span class="hb hb-xs spin-icon hb-twitter"><i class="fa fa-twitter"></i></span></a>
					    <a href="https://rs.linkedin.com/pub/risto-jovanovic/b0/b72/79b" target="_blank"><span class="hb hb-xs spin-icon hb-linkedin"><i class="fa fa-linkedin-square"></i></span></a>
				</div>
			

			<nav  class="navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'risto-theme' ); ?></button>
					
					<?php if (is_front_page()) {
						 wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
					}else {
						 wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); 
					} ?>

					
			</nav><!-- #site-navigation -->

			<div class="site-info">
					<p class="small">&copy; Copyright <?php echo date('Y'); ?>. - 
									 Portfolio theme by Risto Jovanovic. All rights reserved.
					</p>
			</div><!-- .site-info -->

		</div> <!-- end .group-fixed -->
<div id="home" class="background container clear">
			<nav id="site-navigation" class="main-navigation visible-xs" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primarius-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php if (is_front_page()): ?>
				
			
			<div class="site-branding">
				<h1 class="site-title">
					Risto Jovanovic Web Developer, Wordpress/PHP  
					<img src="<?php bloginfo('template_directory');  ?>/img/risto_jovanovic.png" alt="" class="responsive">
				</h1>
				<div class="more clear">	
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

					<span class="aligncenter">Find more about me</span>
					<a href="#about-me"><i class="fa fa-hand-o-down"></i></a>
				</div>

			</div><!-- .site-branding -->
			<?php endif; ?>	
		</div>

	</header><!-- #masthead -->
