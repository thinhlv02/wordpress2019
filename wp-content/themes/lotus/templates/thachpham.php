<?php
/*
 Template Name: Thachpham
 */
echo 'thạch phạm author';
//
if (have_posts()) : while (have_posts()) : the_post();
    the_content();
endwhile;
endif;
