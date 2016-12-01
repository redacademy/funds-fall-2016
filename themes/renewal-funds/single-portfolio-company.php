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

		<?php //gravity_form( 1, false, false, false, '', true ); ?>


		<?php echo gravity_form( $id_or_title = 1, $display_title = true, $display_description = true, $display_inactive = true, $field_values = null, $ajax = false, $tabindex, $echo = true ); ?>

		<?php //while ( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'template-parts/content', 'single' ); ?>
			<?php //the_post_navigation(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
					//comments_template();
				//endif;
			?>
		<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>