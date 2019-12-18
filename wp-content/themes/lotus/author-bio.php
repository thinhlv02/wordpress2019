<div class="entry-footer dcm121212">
    <div class="author-box">
        <div class="author-avatar">
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </div>
        <h3>
            <?php
            printf('Written by <a href="%1$s">%2$s</a>', get_author_posts_url(get_the_author_meta('ID')), get_the_author());
            ?>
        </h3>
        <h4><?php echo 'description: ' . get_the_author_meta('description'); ?></h4>
        <h5><?php echo 'user_email: ' . get_the_author_meta('user_email'); ?></h5>
    </div>
</div>