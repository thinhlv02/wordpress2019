<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php lotus_thumbnail('thumbnail'); ?>
    </div>

    <div class="entry-header">
        <?php lotus_entry_header(); ?>
        <?php lotus_entry_meta(); ?>
    </div>

    <div class="entry-content">
        <?php lotus_entry_content(); ?>
    </div>
</article>