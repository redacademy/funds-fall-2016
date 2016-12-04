<?php 
/* 
* Template Name: Notification Questionnaire 
*/ 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<p>notification-questionnaire.php</p>

        <h2>Thanks for Filling in the Questionnaire!</h2>

        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-leaf.png' ?>" class="" alt="Leaf Image" />

        <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
