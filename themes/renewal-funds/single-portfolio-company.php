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
				while ( have_posts() ) : the_post();
					$terms =  get_the_terms(get_the_ID(), 'portfolio-company-year');

					$pc_fund_year = $terms[0]->name;  //get_the_time('Y'); //new post
					$pc_company_name = get_the_title();
					$pc_fund_name = get_field('pc_fund');
					$pc_contact_name = get_field('pc_contact_name');
					$pc_contact_email = get_field('pc_contact_email');
					
					gravity_form( $id_or_title = 1, 
									$display_title = true, 
									$display_description = false, 
									$display_inactive = true, 
									$field_values = array( 'pc_fund_year' => $pc_fund_year,
															'pc_company_name' => $pc_company_name,
															'pc_fund' => $pc_fund_name, 
															'pc_contact_name' => $pc_contact_name, 
															'pc_contact_email' => $pc_contact_email ), 
									$ajax = false, 
									$echo = false );
				endwhile; // End of the loop. 
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>