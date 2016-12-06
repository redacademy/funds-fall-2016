<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<p>single-story.php</p>

			<div class="single-story-wrapper container">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="single-image" style="background-image: url('<?php echo $thumb['0'];?>')">
			</div>
			
        
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<div class="single-story-text">
				<?php the_field('story_body'); ?>
				</div>
			<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>