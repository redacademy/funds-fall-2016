<?php
/**
 * Template Name: Story Upload
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			
				<header class="page-header">
					<h1>Share Your Story</h1>
				</header><!-- .page-header -->

				<?php get_template_part( 'template-parts/content', 'story-yes' ); ?>
					
			</div> <!-- content-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>