<?php
/**
 * The template for displaying archive pages.
 *
 */

get_header(); 

	
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<p>archive-questionnaire.php</p>

		<?php 
			$user = wp_get_current_user();

			// quesionnaires
			$questionnaire_posts = new WP_Query( array(
											'connected_type' => 'questionnaire_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging' => true,
											'orderby' => 'post_date',
											'order' => 'DESC',
											) ); 
											
			wp_reset_postdata(); ?>

		<?php if ( $questionnaire_posts->have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php while ( $questionnaire_posts->have_posts() ) : $questionnaire_posts->the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
