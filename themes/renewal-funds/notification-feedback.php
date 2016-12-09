<?php 
/*
*
* Template Name: Notification Feedback 
*
*/ 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--<p>notification-feedback.php</p>-->

        <div class="thanks-page-wrapper">

        <div class="thanks-msg">
            <p>Thanks for your Feedback!</p>
        </div>

        <div class="thanks-image-wrapper">
            <img src="<?php echo get_template_directory_uri()?>/assets/icons/png/leafs.png" alt="Add portfolio logo">
        </div>

        <div class="home-button">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a>
        </div>

    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
