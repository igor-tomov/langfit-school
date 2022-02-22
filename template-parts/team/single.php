<?php

/**
 * Template part for displaying team content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

/* thumbnail */
if (has_post_thumbnail()) {
    $item__imgurl = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $item__imgurl = get_template_directory_uri() . '/assets/dist/img/img-default.png';
}

$position = get_field('position');

?>

<div class="fix-bg">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/agingbg.png" loading="lazy">
</div>

<div class="separate"></div>

<section class="section__team-single">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a class="button__back" href="<?php echo get_permalink(get_page_by_path('team')); ?>">
                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.4142 1.96616L2.41438 7.9644L8.4142 13.9626L7.00017 15.377L0.292969 8.6716L0.292969 7.2572L7.00017 0.551758L8.4142 1.96616Z" fill="#7A49B8" />
                    </svg>
                    <?php esc_html_e('Return to the team', 'ieverly'); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if(has_post_thumbnail()) : ?>
            <div class="col-md-5">
                <div class="team__single-image">
                    <img loading="lazy" src="<?php echo esc_url($item__imgurl); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                </div>
            </div>
            <?php endif; ?>

            <div class="<?php if(has_post_thumbnail()) { ?>col-md-7<?php } else { ?>col-md-8 offset-md-2<?php } ?>">
                <div class="team__single-content">
                    <div class="title">
                        <h1><?php echo get_the_title(); ?></h1>
                        <?php if (!empty($position)) : ?>
                            <h4><?php echo $position; ?></h4>
                        <?php endif; ?>
                    </div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="footer__over">
    <?php get_template_part('/template-parts/home/footer'); ?>
</div>