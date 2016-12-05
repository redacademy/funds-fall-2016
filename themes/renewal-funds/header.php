<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
				<div class="header-bar">
					<div class="site-branding">

						<!--<h1 class="site-title screen-reader-text">-->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri() . '/assets/icons/svg/renewal_funds_icon.svg' ?>" class="header-logo" alt="header-logo" />
							</a>
						<!--</h1>-->

					</div><!-- .site-branding -->
					<div class="nav-btn">
						<i class="fa fa-bars fa-fw" aria-hidden="true"></i>
					</div>
					<div class="nav-cancel">
						<img src="<?php echo get_template_directory_uri().'/assets/icons/svg/cancel_icon.svg' ?>" />
					</div>
				</div>

				<div class="nav-option">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php
							if( current_user_can( 'rf_user' ) || current_user_can( 'administrator' )):
								wp_nav_menu( array ( 'menu' => 'Renewal Fund Menu' ) );
							elseif ( current_user_can( 'pc_user') ) :
								wp_nav_menu( array ( 'menu' => 'Portfolio Company Menu' ) );
							endif;
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
