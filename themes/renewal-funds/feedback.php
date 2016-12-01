
<?php /* Template Name: Feedback Page */ ?>
<?php get_header(); ?>
<div id="primary-feedback" class="content-area-feedback">
 <main id="main" class="site-main" role="main">

     <p>feedback.php</p>
     <div class="feedback-page-wrapper">

        <div class="feedback-image-wrapper">
            <div class="feedback-image"
            style="background-image: url('<?php echo CFS()->get('feedback_image');?>')">
                <div class="feedback-title">
                    <p>Investing For Change</p>
                </div>
            </div>
        </div>

        <div class="feedback-form-wrapper">
            <?php echo CFS()->get('feedback_form');?>
        </div>

     </div>
     
 </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>