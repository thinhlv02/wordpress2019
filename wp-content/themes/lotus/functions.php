<?php

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');

require_once(CORE . '/init.php');

/**
 * @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
if (!isset($content_width))
{
    $content_width = 620;
}

/**
 * @ Thiết lập các chức năng sẽ được theme hỗ trợ
 **/

if (!function_exists('lotus_theme_setup'))
{
    function lotus_theme_setup()
    {
        /*
        * Thiết lập theme có thể dịch được
        */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('lotus', $language_folder);

        /*
        * Tự chèn RSS Feed links trong <head>
        */
        add_theme_support('automatic-feed-links');

        /*
        * Thêm chức năng post thumbnail
        */
        add_theme_support('post-thumbnails');

        /*
        * Thêm chức năng post format
        */
        add_theme_support('post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );

        /*
        * Thêm chức năng title-tag để tự thêm <title>
        */
        add_theme_support('title-tag');

        /*
         * 		case 'custom-background':
         */

        $defaults_background = array(
            'default-color' => '#e8e8e8'
        );

        add_theme_support('custom-background', $defaults_background);

        /*
        * Tạo menu cho theme
        */
        register_nav_menu('primary-menu', __('Primary Menu', 'lotus'));
        register_nav_menu('land-menu', __('Land Menu', 'land'));

        /*
        * Tạo sidebar cho theme
        */
        $sidebar = array(
            'name' => __('Main Sidebar', 'lotus'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for Lotus theme 121212',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );

        register_sidebar($sidebar);

    }

    add_action('init', 'lotus_theme_setup');

}

/*------------
TEMPLATE FUNCTIONS */

if (!function_exists('lotus_header'))
{
    function lotus_header()
    { ?>
        <div class="site-name">
            <?php
            if (is_home())
            {
                printf('<h1><a href="%1$s", title="%2$s">%3$s</a></h1>', get_bloginfo('url'), get_bloginfo('description'), get_bloginfo('url'));
            }
            else
            {
                printf('<p><a href="%1$s", title="%2$s">%3$s</a></p>', get_bloginfo('url'), get_bloginfo('description'), get_bloginfo('url'));
            }
            ?>
        </div>

        <div class="site-description"><?php echo bloginfo('description'); ?></div>

        <?php
    }
}

/*--------
Function menu nav in header view */

if (!function_exists('lotus_menu'))
{
    function lotus_menu($args) // arguments list // danh sach doi so
    {
        $args = array(
            'theme_location' => $args,
            'container' => 'nav',
            'container_class' => $args
        );

        wp_nav_menu($args);

    }

}

/**
 * @ Tạo hàm phân trang cho index, archive.
 * @ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
 * @ lotus_pagination()
 **/

if (!function_exists('lotus_pagination'))
{
    function lotus_pagination()
    {
//        echo $GLOBALS['wp_query']->max_num_pages ;
        if ($GLOBALS['wp_query']->max_num_pages < 2)
        {
            return '';
        } ?>
        <!--        --><?php //echo $GLOBALS['wp_query']->max_num_pages
        ?>
        <nav class="pagination" role="navigation">

            <?php if (get_next_posts_link()): ?>
                <div class="next"><?php next_posts_link(__('Older Posts', 'lotus')); ?></div>
            <?php endif; ?>

            <?php if (get_previous_posts_link()): ?>
                <div class="pre"><?php previous_posts_link(__('Newer Posts', 'lotus')); ?></div>
            <?php endif; ?>

        </nav>
        <?php

    }
}

/**
 * @ Hàm hiển thị ảnh thumbnail của post.
 * @ Ảnh thumbnail sẽ không được hiển thị trong trang single
 * @ Nhưng sẽ hiển thị trong single nếu post đó có format là Image
 * @ lotus_thumbnail( $size )
 **/

if (!function_exists('lotus_thumbnail'))
{
    function lotus_thumbnail($size)
    {
        if (!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure>

        <?php endif; ?>

        <?php

    }
}