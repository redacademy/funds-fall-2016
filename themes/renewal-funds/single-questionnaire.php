<?php
/**
 *
 * Template Name: Questionnaire
 *
**/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<p>single-questionnaire.php</p>

			<?php //get_template_part( 'template-parts/content', 'single' ); ?>

			<h1><?php the_title(); ?></h1>

			<?php 

			// check if the flexible content field has rows of data
			if( have_rows('questionnaire') ):
				echo '<form>';
				// loop through the rows of data
				while ( have_rows('questionnaire') ) : the_row();
					// check current row layout
					if( get_row_layout() === 'questionnaire_question' ):
						$question = get_sub_field('question_name');
						echo '<label>' . $question . '</label>';

						$answer = get_sub_field('question_response');
						echo '<textarea rows="4">' . $answer . '</textarea>';
					endif;
				endwhile;
				echo '<button>Submit</button>';
				echo '</form>';
			else :
				// no layouts found
			endif;

			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>