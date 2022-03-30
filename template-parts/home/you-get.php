<?php

/**
 * Template part for displaying home you get box
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('you_get')) : ?>
    <?php while (have_rows('you_get')) : the_row();
        $title = get_sub_field('title');
        $link = get_sub_field('button');
    ?>
        <section class="section__you-get content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><?php echo $title; ?></h2>
                    </div>
                </div>

                <?php if (have_rows('list')) : ?>
                    <?php while (have_rows('list')) : the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                    ?>
                        <div class="get__box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3><?php echo $title; ?></h3>
                                    <p><?php echo $description; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="get__cover">
                                        <img src="<?php echo $image['url']; ?>" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="row">
                    <div class="col-12">
                        <?php
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                            <button class="button__cta button__get" data-form="<?php echo $title; ?>" type="button" data-modal="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>