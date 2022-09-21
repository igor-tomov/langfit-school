<?php

/**
 * Template part for displaying home you free form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('free')) : ?>
    <?php while (have_rows('free')) : the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $form = get_sub_field('form_shortcode');
        $cover = get_sub_field('cover');
    ?>
        <section class="section__free content" id="try-for-free">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><?php echo $title; ?></h2>
                    </div>
                </div>

                <?php if (have_rows('roadmap')) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="lf-roadmap">
                            <?php while (have_rows('roadmap')) : the_row();
                                $title = get_sub_field('title');
                                $icon = get_sub_field('icon');
                            ?>
                                <div class="lf-roadmap__step">
                                    <img class="lf-roadmap__step-icon" src="<?php echo $icon['url']; ?>" loading="lazy">
                                    <span class="lf-roadmap__step-circle"><?php echo get_row_index(); ?></span>
                                    <p class="lf-roadmap__step-desc"><?php echo $title; ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section__description"><?php echo $description; ?></h3>
                        <div class="free__form">
                            <?php echo do_shortcode($form, 'ieverly'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="free__cover">
                            <img src="<?php echo $cover['url']; ?>" loading="lazy" alt="<?php echo $title; ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
