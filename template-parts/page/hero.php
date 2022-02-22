<?php

/**
 * Template part for displaying page Hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

if (has_post_thumbnail()) {
    $item__imgurl = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $item__imgurl = get_template_directory_uri() . '/assets/dist/img/img-default.png';
}
?>

<section class="section__page-hero">
    <div class="cover dark">
        <img loading="lazy" src="<?php echo esc_url($item__imgurl); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page__hero">
                    <?php $hero = get_field('hero');
                    if ($hero) : ?>
                        <h6><?php echo $hero['before_title']; ?></h6>
                    <?php endif; ?>
                    <h1><?php wp_title(''); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>