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
        $multiple_currencies = get_sub_field('multiple_currencies');
        $pricing_list = ($_GET['pricing'] === 'legacy') ? 'list_legacy' : 'list';
    ?>
        <section class="section__price content" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><?php echo $title; ?></h2>
                    </div>
                </div>

                <?php if ($multiple_currencies && in_array('Show multiple currencies', $multiple_currencies)) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="prices__list">
                            <button type="button" class="button__price active" data-price="uah"><?php esc_html_e('UAH', 'ieverly'); ?></button>
                            <button type="button" class="button__price" data-price="usd"><?php esc_html_e('USD', 'ieverly'); ?></button>
                            <button type="button" class="button__price" data-price="eur"><?php esc_html_e('EUR', 'ieverly'); ?></button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (have_rows($pricing_list)) : ?>
                    <div class="row price__box-list">
                        <?php while (have_rows($pricing_list)) : the_row();
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
                            <?php if (isset($uah)) : ?>
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
                                    <div class="price" data-uah="<?php echo $uah; ?>" data-usd="<?php echo $usd; ?>" data-eur="<?php echo $eur; ?>"><?php echo $uah; ?></div>
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
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
