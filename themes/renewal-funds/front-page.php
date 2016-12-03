<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
				// conditional logic to migrate to custom teplate part on user role
				if( current_user_can( 'rf_user' ) || current_user_can( 'administrator' ) ):
					get_template_part( 'template-parts/content', 'renewal-fund' );
				elseif ( current_user_can( 'pc_user') ) :
					get_template_part( 'template-parts/content', 'portfolio-company' );
				endif; 
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>