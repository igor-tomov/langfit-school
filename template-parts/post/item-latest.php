<article class="col-md-4">
    <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="latest-post__item">
        <div class="latest-post__item-inner">
            <div class="date"><?php echo get_the_date('j F Y'); ?></div>
            <h3><?php echo esc_attr(get_the_title()); ?></h3>
        </div>
    </a>
</article>