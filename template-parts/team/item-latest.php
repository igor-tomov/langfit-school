<?php
$position = get_field('position');
?>
<a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="team__item <?php if (!(has_post_thumbnail())) : ?>no-photo<?php endif; ?>">
    <?php if (has_post_thumbnail()) : ?>
        <div class="team__item-image">
            <img class="team-image" loading="lazy" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            <div class="see"><span><?php esc_html_e( 'See Profile', 'ieverly' ); ?></span></div>
        </div>
    <?php endif; ?>

    <div class="team__item-inner">
        <h3><?php echo esc_attr(get_the_title()); ?></h3>
        <?php if (!empty($position)) : ?>
            <h4><?php echo $position; ?></h4>
        <?php endif; ?>
    </div>
</a>