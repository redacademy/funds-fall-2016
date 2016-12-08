<?php
    $user = wp_get_current_user(); 

    //echo print_r($user);

    //$user_login = $user->ID;

    //echo $user_login;

    $posts = get_posts( array(
                        'connected_type' => 'portfolio_to_user',
                        'connected_items' => $user->ID,
                        'suppress_filters' => false,
                        'nopaging' => true
                ) );

    //echo print_r($posts[0]);

    $pc_company_name;

    //foreach ($posts as $post) {
        //$pc_company_name = $post->post_title;
    //}

    $pc_company_name = get_the_title($posts[0]);

    //echo $pc_company_name;

?>
    <section class="container">
        <div class="welcome-page-wrapper wrap">
            <div class="welcome-wrapper">
                <div class="welcome">
                    <p>Welcome Back,</p>
                    <span class="green-text"><p><?php echo $pc_company_name ?></p></span>
                </div>
            </div>

            <div class="main-nav-wrapper">
                <div class="main-dashboard-nav">
                    <div class="nav-icon-wrapper">
                        <a href="<?php echo get_post_type_archive_link('story'); ?>"><div class="nav-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/png/add_portfolio_company_icon.png" alt="Add portfolio logo">
                        </div></a>
                        <p>Share your Story</p>
                    </div>

                    <div class="nav-icon-wrapper">
                        <a href="<?php echo get_post_type_archive_link('questionnaire'); ?>"><div class="nav-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/png/fill_questionnaire_icon.png" alt="Fill Quest logo">
                        </div></a>
                        <p>Respond Questionnaire</p>
                    </div>

                    <div class="nav-icon-wrapper">
                        <a href="<?php echo get_post_type_archive_link('portfolio-company'); ?>"><div class="nav-icon">
                            <img class="history-logo" src="<?php echo get_template_directory_uri()?>/assets/icons/png/history_icon.png" alt="History logo">
                        </div></a>
                        <p>View History</p>
                    </div>

                    <div class="nav-icon-wrapper">
                        <a href="<?php echo get_page_link( get_page_by_title('Feedback')->ID ); ?>"><div class="nav-icon">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/png/contact_icon.png" alt="Contact logo">
                        </div></a>
                        <p>Feedback</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Trademark Section only in desktop-->
        <div class="trademark-section">
            <div class="trademark-image-wrapper">
                <img class="trademark-image" src="<?php echo get_template_directory_uri()?>/assets/images/dashboard-background.png" alt="Renewal Slogan logo">
            </div>

            <div class="trademark-wrapper">
                <div class="trademark-logo-wrapper">
                    <img class="trademark-logo" src="<?php echo get_template_directory_uri()?>/assets/images/trademark.png" alt="Renewal Slogan logo">
                </div>

                <!--<div class="trademark-text-wrapper">
                    <p class="trademark-text">We want to help tell your story, showing the difference our partners make in the world is important to us. Here, you will be able to respond to questionnaires, edit your profile, view your history, share your story, and stay in touch with us.</p>
                </div>-->
            </div>
        </div>
        
    </section>