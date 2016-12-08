<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">		
        
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="single-page-wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>

							<?php
								$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
							?>
								<div class="single-image-wrapper">
								<div class="single-image" style="<?php echo $thumbnail[2]; ?>px;background-image:url( <?php echo $thumbnail[0]; ?> );background-repeat:no-repeat;">
								</div>
								</div>
								
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="single-story-wrapper wrap">
						<div class="single-title">
							<?php the_title(); ?>
						</div>
					
					
						<div class="entry-content">
							<div class="single-story-text">
								<?php the_field('story_body'); ?>
							</div>
						</div><!-- .entry-content -->
					</div>
				</article><!-- #post-## -->
				
			<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>