<?php 
/*
 *
 * The template for displaying all pages.
 *
 */    

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!--<p>taxonomy-portfolio-company-year.php</p>-->

        <div class="wrap">

        <?php if ( have_posts() ) : ?>
		<header class="page-header">	
			<h1>History</h1>

			<?php 
				$user = wp_get_current_user(); 

				$arg = array( 'taxonomy' => 'portfolio-company-year',
								'hide_empty' => true, );
								
				$terms = get_terms( $arg );
                
                $initial_year = (int)2015;
                $search_year = (int)get_the_archive_title();
                $flickity_index = $search_year - $initial_year;
			?>
		
			<div class="portfolio-company-year-style">
				<ul class="main-carousel"  data-flickity='{ "cellAlign": "center", "contain": true, "initialIndex": <?php echo $flickity_index; ?> }'>
					<?php foreach ( $terms as $term ) : ?>
						<li class="carousel-cell"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>		
		</header>

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
                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'portfolio-company-year',
                                                                        'field' => 'slug',
                                                                        'terms' => get_the_archive_description(),
                                                                    ),
                                                                ),
                                                ) );

                wp_reset_postdata();

                // quesionnaires
                $questionnaire_posts = new WP_Query( array(
                                                'connected_type' => 'questionnaire_to_user',
                                                'connected_items' => $user->ID,
                                                'suppress_filters' => false,
                                                'nopaging' => true,
                                                'orderby' => 'post_date',
                               			        'order' => 'DESC',
                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'portfolio-company-year',
                                                                        'field' => 'slug',
                                                                        'terms' => get_the_archive_description(),
                                                                    ),
                                                                ),
                                                ) ); 
                                                
                wp_reset_postdata(); ?>

                <!-- portfolio company items by user id and taxonomy -->
                <div class="stories">
                    
                <?php if ( $story_posts->have_posts() ) : ?>
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
                    
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_footer(); ?>