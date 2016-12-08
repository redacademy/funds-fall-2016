<?php
/**
 *
 * Template Name: Questionnaire
 *
**/?>

<?php acf_form_head(); ?>
<?php get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
			<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<p>single-questionnaire.php</p>

			<?php //get_template_part( 'template-parts/content', 'single' ); ?>

			<h1><?php the_title(); ?></h1>

			<?php 

			// check if the flexible content field has rows of data
			if( have_rows('questionnaire_item') ):
				//echo '<form>';
				// loop through the rows of data
				while ( have_rows('questionnaire_item') ) : the_row();
					// check current row layout
					if( get_row_layout() === 'questionnaire_question' ):
						$question = get_sub_field('question_name');
						//echo '<label>' . $question . '</label>';

						//echo '<p>' . $question . '</p>';

						$answer = get_sub_field('question_response');
						//echo '<textarea rows="4">' . $answer . '</textarea>';

						//echo '<p>' . $answer . '</p>';
					endif;
				endwhile;
				//echo '<button>Submit</button>';
				//echo '</form>';
			else :
				// no layouts found
			endif;

			?>			

			<?php
			
				acf_form( array( 'submit_value' => 'Submit',
									'return' => get_template_directory_uri() . '/notification-questionnaire/') ); ?>

		<?php endwhile; // End of the loop. ?>
			</div> <!-- container -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

