<?php
//echo 'hello index';
//bloginfo('description');
get_header(); ?>

<?php
if (have_posts()) : while (have_posts()): the_post(); ?>

    <!--    <h1>--><?php //the_title(); ?><!--</h1>-->

    <?php get_template_part('content', get_post_format()); ?>

<?php endwhile; ?>;

    <!--//pagination-->
    <?php lotus_pagination(); ?>;

<?php else: ?>;

    <?php get_template_part('content', 'none'); ?>

<?php endif; ?>

<?php
get_footer();
