<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
	//$portfolio_company = get_queried_object(); ?>

	<div id="primary" class="content-area">

		<!--<header class="archive-header">
			<h1 class="archive-title">
				<?php //echo $portfolio_company->name; ?>
			</h1>
		</header><!-- .archive-header -->

		<main id="main" class="site-main" role="main">
		<p>archive-portfolio-company.php</p>

		<div class="history-page-wrapper">
			<h1>History</h1>

		<?php 
			$user = wp_get_current_user(); 

			// stories
			$story_posts = new WP_Query( array(
										'connected_type' => 'story_to_user',
										'connected_items' => $user->ID,
										'suppress_filters' => false,
										'nopaging' => true,
										));	?>
										
			<!--<pre>
				<?php //print_r( $story_posts );?>	
			</pre>-->					
			
			<h2 class="container">Stories:</h2>

			<?php if ( $story_posts->have_posts() ) : ?>

				<header class="page-header">
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php while( $story_posts->have_posts() ) : $story_posts->the_post(); ?>
					<div class="container">

						<ul class="story-section-wrapper">
							<li class="story-section">
								<div class="story-image-wrapper">
									<?php
									$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
									?>
									<a href="<?php echo get_permalink(); ?>">
									<div class="story-thumbnail" style="background-image:url(<?php echo $thumbnail[0]; ?>);background-repeat:no-repeat;">
									</div>
									</a>
								</div>
								
								<div class="story-wrapper">
									<a class="story-title" href="<?php echo get_permalink(); ?>">
										<?php the_title(); ?>
									</a>
									<p class="story-text"><?php the_field('story_body'); ?></p>
								</div>
							</li>
						</ul>

					</div>
				<?php endwhile; 	

				wp_reset_postdata();

			endif;

			// questionnaires
			$questionnaire_posts = new WP_Query( array(
											'connected_type' => 'questionnaire_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging' => true,
											));	?>

			<h2>Questionnaires</h2>

			<?php while( $questionnaire_posts->have_posts() ) : $questionnaire_posts->the_post(); ?>
				<div>
					<a href="<?php echo get_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</div>
				</div>
			<?php endwhile;

			wp_reset_postdata();
		
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
