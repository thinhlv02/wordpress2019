<?php
echo '<h1>hello main Search.php </h1>';
//bloginfo('description');

get_header(); ?>

    <div class="content">

        <div id="main-content">

            <div class="search-info">

            </div>

            <?php if (have_posts()) : while (have_posts()): the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>

                <!--//pagination-->
                <?php lotus_pagination(); ?>

            <?php else: ?>;

                <?php get_template_part('content', 'none'); ?>

            <?php endif; ?>

        </div>

        <div id="sidebar">

            <?php get_sidebar(); ?>

        </div>

    </div>

<?php

get_footer();
