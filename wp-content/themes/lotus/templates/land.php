<?php
/*
 Template Name: Land
 */

echo 'land page';

if (have_posts()): while (have_posts()): the_post();
    the_content();
endwhile;
endif;