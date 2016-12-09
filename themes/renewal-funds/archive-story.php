<?php
/**
 * The template for displaying archive pages.
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			<!--<p>archive-story.php</p>-->

			<?php //$connected = new WP_Query(array('connected_type' => 'portfolio_company_to_story',
													//'connected_items' => get_queried_object(),
													//'nopaging' => true,)); 
			?>

			<?php $user = wp_get_current_user(); 
				/*$story_posts = get_posts( array(
											'connected_type' => 'story_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging' => true
											) ); */

				$story_posts = new WP_Query( array(
											'connected_type' => 'story_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging'  => true ) ); ?>
																	
			<?php if ( $story_posts->have_posts() ) : ?>
				
				<header class="page-header">
					<h1>Share Your Story</h1>
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php //while ( have_posts() ) : the_post(); ?>
					<?php
						get_template_part( 'template-parts/content', 'story-yes' );
					?>
				<?php //endwhile; ?>

				<?php //the_posts_navigation(); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'story-no' ); ?>
			<?php endif; ?>
			</div> <!-- content-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>