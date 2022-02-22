<?php

/**
 * Template part for displaying team content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

$terms = get_terms('team_category', [
    'parent' => $parent_id,
    'hide_empty' => true,
]);
?>

<div class="fix-bg">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/agingbg.png" loading="lazy">
</div>

<section class="section__team-title content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="entry-content">
                    <?php the_content(); ?>

                    <a target="_blank" href="https://jobs.lever.co/bioage" class="button__arrow button__careers">
                        <span><?php esc_html_e('See Job Postings', 'ieverly'); ?></span>
                        <svg width="15" height="23" viewBox="0 0 15 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82206 11.5001L0.966797 3.0876L3.03305 0.912598L14.1778 11.5001L3.03305 22.0876L0.966797 19.9126L9.82206 11.5001Z" fill="#7A49B8" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section__team-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team__menu">
                    <ul>
                        <?php
                        $i = 0;
                        foreach ($terms as $term) : ?>
                            <li class="term">
                                <button class="<?php if ($i == 0) : ?>active<?php endif; ?>" data-tab-target="<?php echo $term->name; ?>"><?php echo $term->name; ?></button>
                            </li>
                        <?php
                            $i++;
                        endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="team__content">
            <?php
            $i = 0;
            foreach ($terms as $term) : ?>
                <div class="team__box <?php if ($i == 0) : ?>active<?php endif; ?> <?php echo $term->slug; ?>" data-tab-content="<?php echo $term->name; ?>">
                    <?php
                    $termSlug = $term->slug;



                    $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team_category',
                                'field'    => 'slug',
                                'terms'    => $termSlug
                            )
                        )
                    );

                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) : ?>
                        <div class="row">
                            <?php
                            while ($loop->have_posts()) : $loop->the_post();
                            ?>
                                <?php if ($loop->current_post + 1 === $loop->post_count) { ?>
                                    <?php
                                    $current_post = $loop->current_post + 1;
                                    $post_array = array(
                                        '4', '7', '10', '13', '16', '19', '22'
                                    );
                                    ?>
                                    <?php if (!(in_array($current_post, $post_array))) { ?>
                                        <div class="col-md-4">
                                            <?php include get_template_directory() . '/template-parts/team/item-latest.php'; ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-12 team__item-last">
                                            <?php include get_template_directory() . '/template-parts/team/item-latest.php'; ?>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <div class="col-md-4">
                                        <?php include get_template_directory() . '/template-parts/team/item-latest.php'; ?>
                                    </div>
                                <?php } ?>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php else : ?>
                        <?php include get_template_directory() . '/template-parts/notfound.php'; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            <?php
                $i++;
            endforeach; ?>
        </div>

    </div>
</section>

<div class="footer__over">
    <?php get_template_part('/template-parts/home/footer'); ?>
</div>