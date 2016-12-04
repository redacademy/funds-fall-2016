
<?php /* Template Name: Feedback Page */ ?>
<?php get_header(); ?>
<div id="primary-feedback" class="content-area-feedback">
 <main id="main" class="site-main" role="main">

     <p>feedback.php</p>
    <div class="feedback-page-wrapper container">

    <div class="feedback-page">

        <div class="feedback-image-wrapper">
            <div class="feedback-image" style="background-image: url('<?php echo get_field('feedback_image');?>')">

                <div class="feedback-title">
                    <p>Investing For Change</p>
                </div>
            </div>
        </div>

        <div class="feedback-page container">
            <div class="feedback-wrapper">
                <p class="feedback-green-text">How Can We Improve?</p>
                <p class="feedback-text">We are constantly looking to improve our platform. Your feedback is valuable to us.</p>
            </div>

            <div class="feedback-form-wrapper">
                <?php echo get_field('feedback_form');?>
            </div>
            
        </div>

    </div>
     
 </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>