<?php
/*
 *
 * Template Name: Feedback Page
 *
 */
get_header(); ?>

<div id="primary-feedback" class="content-area-feedback">
    <main id="main" class="site-main" role="main">
        <!--<p>feedback.php</p>-->
        <div class="feedback-page-wrapper container">
            <div class="feedback-image-wrapper">
                <div class="feedback-image" style="background-image: url('<?php echo get_field('feedback_image');?>')">
                    <div class="feedback-title">
                        <p>Investing For Change</p>
                    </div>
                </div>
            </div>

        <div class="feedback-page container">

            <div class="feedback-wrapper">
                <h1 class="feedback-green-text">How Can We Improve?</h1>
                <p class="feedback-info">We are constantly looking to improve our platform. Your feedback is valuable to us.</p>

                <div class="feedback-form-wrapper">
                    <?php echo get_field('feedback_form');?>
                </div>
            </div>

        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>