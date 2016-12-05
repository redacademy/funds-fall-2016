<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<p>archive-portfolio-company.php</p>

		<?php 
			 $user = wp_get_current_user(); 

			 // stories
			 $story_posts = get_posts( array(
										'connected_type' => 'story_to_user',
										'connected_items' => $user->ID,
										'suppress_filters' => false,
										'nopaging' => true
                						) ); ?>

			<h2>Stories</h2>

			<?php foreach ( $story_posts as $story_post ) :
				//echo print_r($story_post); 
				
				?>
				<?php if( has_post_thumbnail( $story_post->ID) ) : ?>
					<p><?php echo get_the_post_thumbnail($story_post->ID, 'large'); ?></p>
				<?php endif; ?>

				<a href="<?php echo get_post_permalink($story_post->ID); ?>"><?php echo get_the_title($story_post->ID); ?></a>
				<p><?php echo get_field('story_body', $story_post->ID); ?></p>
			<?php endforeach; 

			wp_reset_postdata();

			// questionnaires
			$questionnaire_posts = get_posts( array(
										'connected_type' => 'questionnaire_to_user',
										'connected_items' => $user->ID,
										'suppress_filters' => false,
										'nopaging' => true
                					) ); ?>

			<h2>Questionnaires</h2>

			<?php foreach ($questionnaire_posts as $questionnaire_post) : 
        		//echo 'questionnaire - ' . $questionnaire_post->post_title; ?>
				
				<a href="<?php echo $questionnaire_post->guid; ?>"><?php echo $questionnaire_post->post_title; ?></a>
    		<?php endforeach;

			wp_reset_postdata();
		
			//echo print_r($posts[0]);
		
			/*if ( have_posts() ) : ?>
            
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php  ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; */?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
