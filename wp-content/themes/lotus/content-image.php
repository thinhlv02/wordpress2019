<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php lotus_thumbnail('large'); ?>
    </div>

    <div class="entry-header">
        <?php lotus_entry_header(); ?>
        <?php
        /*
        * Đếm số lượng attachment có trong post
        */
        $attachments = get_children(array('post_parent' => $post->ID));
        $attachment_number = count($attachments);
        //        var_dump($attachment_number);
        printf(__('This image post contains %1$s photos', 'lotus'), $attachment_number);
        ?>
    </div>

    <div class="entry-content">
        <?php lotus_entry_content(); ?>
        <?php is_single() ? lotus_entry_tag() : ''; ?>
    </div>
</article>