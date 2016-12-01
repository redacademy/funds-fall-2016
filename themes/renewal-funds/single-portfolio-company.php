<?php
 /**
 *
 * Template Name: Portfolio Company
 *
**/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<p>single-portfolio-company.php</p>

			<?php echo gravity_form( $id_or_title = 1, 
										$display_title = true, 
										$display_description = true, 
										$display_inactive = true, 
										$field_values = null, 
										$ajax = false, 
										$tabindex, 
										$echo = true ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>