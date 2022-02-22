<?php

/**
 * Template part for displaying blog latest
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

?>

<section class="section__latest-articles content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e('What’s the latest?', 'ieverly'); ?></h3>
            </div>
        </div>
    </div>

    <?php
    $args = array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date');
    $loop = new WP_Query($args);
    if ($loop->have_posts()) : ?>
        <div class="drag-cursor button__accent"><?php esc_html_e('Drag', 'ieverly'); ?></div>
        <div class="swiper-container latest-articles">
            <div class="swiper-wrapper">
                <?php
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <div class="swiper-slide">
                        <?php
                        include get_template_directory() . '/template-parts/post/latest-item.php';
                        ?>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    <?php else : ?>
        <?php include get_template_directory() . '/template-parts/notfound.php'; ?>
    <?php endif;
    wp_reset_postdata(); ?>
    <a href="<?php echo get_permalink( get_page_by_path( 'news-blog' ) ); ?>" class="button__accent button__news-blog"><?php esc_html_e('Read more', 'ieverly'); ?></a>
</section>