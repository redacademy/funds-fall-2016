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

			<?php  
			
			$pc_fund_name = '';//mega fund';
			$pc_contact_name = '';//great contact';
			$pc_contact_email = '';//great.contact@bob.com';
			
			gravity_form( $id_or_title = 1, 
										$display_title = true, 
										$display_description = false, 
										$display_inactive = true, 
										$field_values = array( 'pc_fund' => $pc_fund_name, 'pc_contact_name' => $pc_contact_name, 'pc_contact_email' => $pc_contact_email ), 
										$ajax = false, 
										$echo = false ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>