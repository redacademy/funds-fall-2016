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
			
			<h2>Stories: </h2>

			<?php if ( $story_posts->have_posts() ) : ?>

				<header class="page-header">
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php while( $story_posts->have_posts() ) : $story_posts->the_post(); ?>
					<div class="story-section container">
						<div class="story-image-wrapper">
							<a class="story-thumbnail" href="<?php echo get_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail('large'); ?>
								<?php endif; ?>
							</a>
						</div>

						<div class="story-wrapper">
							
							<ul>
								
								<li>
									<a class="story-title" href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
									</a>
									<p class="story-text">With so many different ways to find information online, it can sometimes be hard...
									Sasha wishes he had a big black cock in his ear. But for Christmas he wants it in his nose. For his 
									New Years Resolution, he wants to challenge and beat the World Guiness Record to masturbate 40 plus time  
									within 24 hours on camera. 
									</p>
								</li>
							
								<li>
									<a class="story-title" href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
									</a>
									<p class="story-text">Ringo on the hand, wants to buy the $150,000 new realistic sex doll to pleqasure himself without getting a girl friend. 
									Ringo now is a 54year old Virgin.
									</p>
								</li>

							</ul>
							
							
						</div>
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
