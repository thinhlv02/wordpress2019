<?php
/*
 Template Name: News
 */
echo 'i am news page custom';

if (have_posts()) : while (have_posts()): the_post();
    the_content();
endwhile;
endif;
