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
					$pc_fund_year = $terms[0]->name; //get_the_time('Y'); //new post

					$pc_company_name = get_the_title();
					$pc_fund_name = get_field('pc_fund');
					$pc_contact_name = get_field('pc_contact_name');
					$pc_contact_email = get_field('pc_contact_email'); 
			?>

			<div>
				<p><?php echo $pc_fund_year ?></p>
				<p><?php echo $pc_company_name ?></p>
				<p><?php echo $pc_fund_name ?></p>
				<p><?php echo $pc_contact_name ?></p>
				<p><?php echo $pc_contact_email ?></p>
			</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>