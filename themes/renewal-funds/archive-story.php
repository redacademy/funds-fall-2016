<?php
/*
 *
 *
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container wrap">
			<!--<p>archive-story.php</p>-->

			<?php $user = wp_get_current_user(); 
				$story_posts = new WP_Query( array(
											'connected_type' => 'story_to_user',
											'connected_items' => $user->ID,
											'suppress_filters' => false,
											'nopaging' => true ) );
																
			if ( $story_posts->have_posts() ) : ?>
				<header class="page-header">
					<h1>Share Your Story</h1>
				</header><!-- .page-header -->

			<?php 
					get_template_part( 'template-parts/content', 'story-yes' );
			else :
					get_template_part( 'template-parts/content', 'story-no' );
			endif; ?>
			</div> <!-- content-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>