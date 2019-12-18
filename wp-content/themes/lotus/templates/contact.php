<?php
/*
 Template Name: Contact
*/
echo '<h1>hello Main Contact custom page</h1>';
//
//if (have_posts()): while (have_posts()) : the_post();
//    the_content();
//endwhile;
//endif;

//start page
get_header(); ?>

    <div class="content">

        <div id="main-content">

            <div class="contact-info">
                <h4>Địa chỉ liên lạc</h4>
                <p>85 vũ trọng phung, Quận Thanh Xuân, TP Hà Nội</p>
                <p>0988 282986</p>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1916" title="Contact form 1"]'); ?>
            </div>

        </div>

        <div id="sidebar">

            <?php get_sidebar(); ?>

        </div>

    </div>

<?php

get_footer();

