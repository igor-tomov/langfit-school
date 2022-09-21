<?php

/**
 * Template part for displaying home hero box
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('hero')) : ?>
    <?php while (have_rows('hero')) : the_row();
        $title = get_sub_field('title');
        $after_title = get_sub_field('after_title');
        $image = get_sub_field('image');
        $list_title = get_sub_field('list_title');
        $link = get_sub_field('button');
        $anchor_link = get_sub_field('button_anchor');
    ?>
        <section class="section__hero content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php echo $title; ?></h1>
                        <h2><?php echo $after_title; ?></h2>

                        <?php if (have_rows('list')) : ?>
                            <div class="hero__list">
                                <h3><?php echo $list_title; ?></h3>
                                <ul>
                                    <?php while (have_rows('list')) : the_row();
                                        $title = get_sub_field('title');
                                    ?>
                                        <li><?php echo $title; ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php
                        if ($link && $link['url']) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                            <button class="button__cta button__hero" data-form="<?php echo $title; ?>" type="button" data-modal="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></button>
                        <?php elseif ($anchor_link && $anchor_link['url']) :
                            $link_url = $anchor_link['url'];
                            $link_title = $anchor_link['title'];
                        ?>
                            <button class="button__cta button__hero" type="button">
                                <a href="<?php echo $link_url; ?>"><?php echo esc_html($link_title); ?></a>
                            </button>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="hero__cover">
                            <img src="<?php echo $image['url']; ?>" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
