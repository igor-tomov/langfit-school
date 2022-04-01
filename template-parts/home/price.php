<?php

/**
 * Template part for displaying home price
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('price')) : ?>
    <?php while (have_rows('price')) : the_row();
        $title = get_sub_field('title');
    ?>
        <section class="section__price content" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><?php echo $title; ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="prices__list">
                            <button type="button" class="button__price active" data-price="eur"><?php esc_html_e('EUR', 'ieverly'); ?></button>
                            <button type="button" class="button__price" data-price="usd"><?php esc_html_e('USD', 'ieverly'); ?></button>
                            <button type="button" class="button__price" data-price="uah"><?php esc_html_e('UAH', 'ieverly'); ?></button>
                        </div>
                    </div>
                </div>

                <?php if (have_rows('list')) : ?>
                    <div class="row">
                        <?php while (have_rows('list')) : the_row();
                            $num = get_sub_field('number_of_lessons');
                            $desc = get_sub_field('description_lessons');
                            $time = get_sub_field('time');
                            $uah = get_sub_field('price_uah');
                            $usd = get_sub_field('price_usd');
                            $eur = get_sub_field('price_eur');
                            $after = get_sub_field('after_price');
                            $link = get_sub_field('button');
                            $discount = get_sub_field('discount');
                        ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="price__box">
                                    <?php if (!empty($discount)) : ?>
                                        <div class="discount">
                                            <span><?php esc_html_e('Discount', 'ieverly'); ?></span>
                                            <p><?php echo $discount; ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="num"><?php echo $num; ?></div>
                                    <div class="desc"><?php echo $desc; ?></div>
                                    <div class="time"><?php echo $time; ?></div>
                                    <div class="price" data-uah="<?php echo $uah; ?>" data-usd="<?php echo $usd; ?>" data-eur="<?php echo $eur; ?>"><?php echo $eur; ?></div>
                                    <div class="after"><?php echo $after; ?></div>
                                    <?php
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                    ?>
                                        <button class="button__cta button__inprice" type="button" data-modal="<?php echo esc_url($link_url); ?>" data-form="<?php echo $num; ?> <?php echo $desc; ?>"><?php echo esc_html($link_title); ?></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>