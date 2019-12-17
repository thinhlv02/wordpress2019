<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php lotus_thumbnail('large'); ?>
    </div>

    <div class="entry-header">
        <?php lotus_entry_header(); ?>
    </div>

    <div class="entry-content">
        <?php lotus_entry_content(); ?>
        <?php is_single() ? lotus_entry_tag() : ''; ?>
    </div>
</article>