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
                printf('<h5><a href="%1$s", title="%2$s">%3$s</a></h5>', get_bloginfo('url'), get_bloginfo('description'), get_bloginfo('url'));
            }
            ?>
        </div>

        <div class="site-description"><?php echo bloginfo('description'); ?></div>

        <?php
    }
}