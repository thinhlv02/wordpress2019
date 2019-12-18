<?php
echo '<h1>hello main Search.php </h1>';
//bloginfo('description');

get_header(); ?>

    <div class="content">

        <div id="main-content">

            <div class="search-info">
                <?php
                $search_query = new WP_Query('s=' . $s . '&shoposts=-1');
                $search_keyword = wp_specialchars($s, 1);
                $search_count = $search_query->post_count;
                //                 var_dump( $search_query );
                //                echo '<pre>',print_r($search_query,1),'</pre>';
                printf(__('Search results for <strong>%1$s</strong>. We found <strong>%2$s</strong> articles for you.', 'lotus'),
                    $search_keyword, $search_count);
                ?>

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
