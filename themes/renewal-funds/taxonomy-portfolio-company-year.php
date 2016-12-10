<?php 
/*
 *
 * The template for displaying all pages.
 *
 */    

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <p>taxonomy-portfolio-company-year.php</p>

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    //the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <div class="stories">
                <h2>Stories:</h2>
                <?php 
                $user = wp_get_current_user();
                $story_posts = new WP_Query( array(
                                                'connected_type' => 'story_to_user',
                                                'connected_items' => $user->ID,
                                                'suppress_filters' => false,
                                                'nopaging' => true,
                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'portfolio-company-year',
                                                                        'field' => 'slug',
                                                                        'terms' => get_the_archive_description(),
                                                                    ),
                                                                ),
                                                ) );
            
                while ( $story_posts->have_posts() ) : $story_posts->the_post(); ?>

                    <div class="">
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
                                <div class="">
                                    <div class=""><?php the_title(); ?></div>
                                </div>
                            </header><!-- .entry-header -->
                        </article><!-- #post-## -->
                    </div><!--  -->

                <?php endwhile; ?>
            </div><!-- stories -->

            <div class="questionnaires">
                <h2>Questionnaires:</h2>
                <?php 
                $user = wp_get_current_user();
                $story_posts = new WP_Query( array(
                                                'connected_type' => 'questionnaire_to_user',
                                                'connected_items' => $user->ID,
                                                'suppress_filters' => false,
                                                'nopaging' => true,
                                                'tax_query' => array(
                                                                    array(
                                                                        'taxonomy' => 'portfolio-company-year',
                                                                        'field' => 'slug',
                                                                        'terms' => get_the_archive_description(),
                                                                    ),
                                                                ),
                                                ) );
            
                    while ( $story_posts->have_posts() ) : $story_posts->the_post(); ?>

                    <div class="">
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
                                <div class="">
                                    <div class=""><?php the_title(); ?></div>
                                </div>
                            </header><!-- .entry-header -->
                        </article><!-- #post-## -->
                    </div><!--  -->

                <?php endwhile; ?>
            </div><!-- stories -->
            
            <?php //the_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>