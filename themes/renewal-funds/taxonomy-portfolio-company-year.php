<?php 
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */    
    
    get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <p>taxonomy-portfolio-company-year.php</p>

            <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <div class="">
                <?php 
                    $user = wp_get_current_user();
                    //$query = new WP_Query( 'p2p_to=' . $user->id );
                    
                    $story_posts = new WP_Query( array(
										'connected_type' => 'story_to_user',
										'connected_items' => $user->ID,
										'suppress_filters' => false,
										'nopaging' => true,
										)); ?>

                    <!--<pre>                         
                        <?php //print_r($story_posts); ?>
                    </pre>-->

                    <?php /*$args = array(
                                        'post_type' => 'story',
                                        'p2p_to' => $user->id,
                                        'post_status' => 'publish',
                                        'orderby' => 'asc',
                                        'posts_per_page' => 15
                                        );*/

                    //$story_posts = new WP_Query( $args ); ?>

                    <pre>                         
                        <?php print_r($story_posts); ?>
                    </pre>
                
                    <?php while ( $story_posts->have_posts() ) : $story_posts->the_post(); 
                    
                    ?>

                    <div class="single-product-block">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <!--images and url-->
                                <div class="thumbnail-wrapper">
                                    <a href="<?php //echo get_permalink(); ?> ">
                                        <?php //if ( has_post_thumbnail() ) : ?>
                                            <?php //the_post_thumbnail( 'large' ); ?>
                                        <?php //endif; ?>
                                    </a>
                                </div>

                                <!--title and price-->
                                <div class="product-info">
                                    <div class="product-title"><?php the_title(); ?></div>
                                </div>
                            </header><!-- .entry-header -->
                        </article><!-- #post-## -->
                    </div><!-- .single-product-block -->
                <?php endwhile; ?>
            </div><!--  -->
                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

        </main><!-- #main -->
	</div><!-- #primary -->

    <?php get_footer(); ?>