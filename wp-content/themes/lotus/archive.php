<?php
echo '<h1 class="" style="">hello main Archive </h1>';
//die;
//bloginfo('description');

get_header(); ?>

    <div class="content">

        <div id="main-content">

            <!-- Title archive here -->
            <div class="archive-title 1212">
                <?php
                // check page current is tag, or not
                if (is_tag()):
                    printf(__('Posts Tagged: %1$s', 'lotus'), single_tag_title(', ', false));

                elseif (is_category()):
                    printf(__('Posts Categorized: %1$s', 'lotus'), single_cat_title(', ', false));

                elseif (is_day()):
                    printf(__('Daily Archives: %1$s', 'lotus'), get_the_time('l, F j , Y', null));

                elseif (is_month()):
                    printf(__('Monthly Archives: %1$s', 'lotus'), get_the_time('F Y'));

                elseif (is_year()):
                    printf(__('Yearly Archives: %1$s', 'lotus'), get_the_time('Y'));

                endif;
                ?>
            </div>

            <!--Kế tiếp, chúng ta nên viết thêm một đoạn code nữa để nó hiển thị mô tả của category và tag nếu có nhé.-->
            <?php
            if (is_tag() || is_category()): ?>
                <div class="archive-description">
<!--                    hahahahahahah-->
                    <?php echo term_description(); ?>

                </div>
            <?php endif;
            ?>

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
