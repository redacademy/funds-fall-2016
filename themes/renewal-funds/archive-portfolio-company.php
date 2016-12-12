<?php
/**
 * The template for displaying archive pages.
 *
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<!--portfolio company year -->
	<div class="history-page-wrapper wrap container">
		<header class="page-header">	
			<h1>History</h1>

			<?php 
				$user = wp_get_current_user(); 

				$arg = array( 'taxonomy' => 'portfolio-company-year',
								'hide_empty' => true, );
								
				$terms = get_terms( $arg );
			?>

			<div class="portfolio-company-year-style">
				<ul>
					<?php foreach ( $terms as $term ) : ?>
						<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?><span>-</span></a></li>
					<?php endforeach; ?>
				</ul>

				<?php
					the_archive_description( '<div e="taxonomy-description">', '</div>' );
				?>
			</div>		
		</header>

		<!-- portfolio company items by user id -->
		<?php 
			$user = wp_get_current_user(); 

			// stories
			$story_posts = new WP_Query( array(
										'connected_type' => 'story_to_user',
										'connected_items' => $user->ID,
										'suppress_filters' => false,
										'nopaging' => true,
										'orderby' => 'post_date',
                               			'order' => 'DESC',
										'posts_per_page' => 5,
										));	
										
			wp_reset_postdata();

			// questionnaires
			$questionnaire_posts = new WP_Query( array(
											'connected_type' => 'questionnaire_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging' => true,
											'orderby' => 'post_date',
                               				'order' => 'DESC',
											'posts_per_page' => 5,
											));	

			wp_reset_postdata();								
			
			if ( $story_posts->have_posts() ) : ?>
				<h2 class="history-title container">Stories:</h2>

				<?php while( $story_posts->have_posts() ) : $story_posts->the_post(); ?>
					<div class="container">

						<ul class="story-section-wrapper">
							<li class="story-section">
								<div class="story-image-wrapper">
									<?php
										$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
									?>
									<a href="<?php echo get_permalink(); ?>">
										<div class="story-thumbnail" style="background-image:url(<?php echo $thumbnail[0]; ?>);background-repeat:no-repeat;"></div>
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
			endif; 

			// questionnaires ?>

			<div class="questionnaire-wrapper container">
				<?php if( $questionnaire_posts->have_posts() ) : ?>
					<h2 class="history-title container">Questionnaires:</h2>

					<?php while( $questionnaire_posts->have_posts() ) : $questionnaire_posts->the_post(); ?>
						<div class="container">
							<ul class="questionnaire-section-wrapper">
								<li class="questionnaire-section">
									<div class="quest-wrapper">
										<a class="story-title" href="<?php echo get_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</div>
								</li>
							</ul>
						</div>
					<?php endwhile;
				endif; ?>	
			</div>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
