<?php

/**
 * Template part for displaying home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

$home_slider = get_field('home_slider');
?>

<div class="fix-bg">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/svg/bg.svg" loading="lazy">
</div>

<div class="stars-bg">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/stars.png" loading="lazy">
</div>

<button class="button__scrolldown">
    <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.99998 0.878906L9.49998 7.37891L16 0.878906L18.1213 3.00023L9.49998 11.6215L0.878662 3.00023L2.99998 0.878906Z" fill="white" />
    </svg>
</button>

<section class="panel panel-0 first">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__zero-title"><?php echo $home_slider['slide_zero']['title']; ?></h1>
            </div>
        </div>
    </div>

    <div class="home__zero-image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/svg/zerobg.svg" loading="lazy">
    </div>
</section>

<section class="panel panel-1">
    <div class="home__head-image">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/bio1.png" loading="lazy">
    </div>

    <div class="home__slide-one">
        <h2><?php echo $home_slider['slide_one']['title']; ?></h2>
        <h3><?php echo $home_slider['slide_one']['description']; ?></h3>
    </div>
</section>

<section class="panel panel-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-mobile">
                <div class="molecule molecule-anim">
                    <div class="atom atom-1"></div>
                    <div class="atom atom-2"></div>
                    <div class="atom atom-3"></div>
                    <div class="atom atom-4"></div>
                    <div class="atom atom-5"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home__slide-text">
                    <h2><?php echo $home_slider['slide_two']['title']; ?></h2>
                    <div class="inner">
                        <div class="description"><?php echo $home_slider['slide_two']['description']; ?></div>
                        <?php
                        $link = $home_slider['slide_two']['button'];
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="button__line" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="panel panel-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-mobile">
                <div class="molecule molecule-2 molecule-anim">
                    <div class="atom atom-1"></div>
                    <div class="atom atom-2"></div>
                    <div class="atom atom-3"></div>
                    <div class="atom atom-4"></div>
                    <div class="atom atom-5"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home__slide-text">
                    <h2><?php echo $home_slider['slide_three']['title']; ?></h2>
                    <div class="inner">
                        <div class="description"><?php echo $home_slider['slide_three']['description']; ?></div>
                        <?php
                        $link = $home_slider['slide_three']['button'];
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="button__line" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="panel panel-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-mobile">
                <div class="molecule molecule-3 molecule-anim">
                    <div class="atom atom-1"></div>
                    <div class="atom atom-2"></div>
                    <div class="atom atom-3"></div>
                    <div class="atom atom-4"></div>
                    <div class="atom atom-5"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home__slide-text">
                    <h2><?php echo $home_slider['slide_four']['title']; ?></h2>
                    <div class="inner">
                        <div class="description"><?php echo $home_slider['slide_four']['description']; ?></div>
                        <?php
                        $link = $home_slider['slide_four']['button'];
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="button__line" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="panel panel-5 panel-footer" id="recent-news">
    <div class="recent-null"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title"><?php esc_html_e('Press releases', 'ieverly'); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date');
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : ?>
                <?php
                while ($loop->have_posts()) : $loop->the_post();
                    include get_template_directory() . '/template-parts/post/item.php';
                endwhile;
                ?>
            <?php else : ?>
                <?php include get_template_directory() . '/template-parts/notfound.php'; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="/category/press-releases/" class="button__line button__to-news"><?php esc_html_e('Explore Press Releases', 'ieverly'); ?></a>
            </div>
        </div>
    </div>

    <?php get_template_part('/template-parts/home/footer'); ?>
</section>

<div class="molecule-overflow">
    <svg width="416" height="1385" viewBox="0 0 416 1385" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.551758 0L0.551698 1377.54" stroke="white" stroke-width="0.929787" />
        <path d="M2.59473 1384.06V977.636C2.59473 746.692 85.7615 523.472 236.874 348.83L414.869 143.118" stroke="white" />
    </svg>
    <div class="molecule">
        <div class="atom atom-1 atom-anim-1"></div>
        <div class="atom atom-2 atom-anim-2"></div>
        <div class="atom atom-3 atom-anim-3"></div>
        <div class="atom atom-4 atom-anim-4"></div>
        <div class="atom atom-5 atom-anim-5"></div>
    </div>
</div>