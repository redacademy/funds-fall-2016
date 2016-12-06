<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="content-container">
		<p>404.php</p>
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Ooops 404!' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<img src="<?php echo get_template_directory_uri().'/assets/icons/svg/404_icon.svg' ?>" class="404-logo" alt="404-logo" />
					<div class="error-content">
						<p><?php echo esc_html("Sorry about that, but the page you are looking for doesn't exit. Please head back to the home page and try again. If the problem exists, please")?> <a href="mailto:123@123.com"> <?php echo email ?></a><?php echo esc_html(" us."); ?></p>
					</div>
					<button class="error-home home-button"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a></button>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div> <!--content-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
