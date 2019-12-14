<?php
/*
 Template Name: Contact
*/
echo 'hello contact 1121212';

if (have_posts()): while (have_posts()) : the_post();
    the_content();
endwhile;
endif;