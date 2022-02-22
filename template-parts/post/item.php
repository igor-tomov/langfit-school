<?php if ($post->post_type == 'news') {
    if (get_field('news_file')) {
        $news_link = get_field('news_file')['url'];
    } elseif (get_field('news_link')) {
        $news_link = get_field('news_link');
    }
?>
    <article class="col-md-4">
        <a target="_blank" href="<?php echo esc_url($news_link); ?>" class="latest-post__item">
            <?php if (has_post_thumbnail()) : ?>
                <div class="latest-post__logo">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" loading="lazy">
                </div>
            <?php endif; ?>
            <div class="latest-post__item-inner">
                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                <h3><?php echo esc_attr(get_the_title()); ?></h3>
            </div>
        </a>
    </article>
<?php } else { ?>
    <article class="col-md-4">
        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="latest-post__item">
            <div class="latest-post__item-inner">
                <div class="date"><?php echo get_the_date('j F Y'); ?></div>
                <h3><?php echo esc_attr(get_the_title()); ?></h3>
            </div>
        </a>
    </article>
<?php } ?>