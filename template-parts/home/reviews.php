<?php

/**
 * Template part for displaying home reviews
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('reviews')) : ?>
    <?php while (have_rows('reviews')) : the_row();
        $title = get_sub_field('title');
    ?>
        <section class="section__reviews content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><?php echo $title; ?></h2>
                    </div>
                </div>

                <?php if (have_rows('list')) : ?>
                    <div class="swiper reviews__swiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('list')) : the_row();
                                $name = get_sub_field('name');
                                $position = get_sub_field('position');
                                $description = get_sub_field('description');
                                $photo = get_sub_field('photo');
                                $fb = get_sub_field('facebook');
                            ?>
                                <div class="swiper-slide">
                                    <div class="review__slide">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="review__description">
                                                    <h3><?php echo $name; ?></h3>
                                                    <div class="position"><?php echo $position; ?></div>
                                                    <div class="description"><?php echo $description; ?></div>

                                                    <?php if (!empty($fb)) : ?>
                                                        <a class="fb" target="_blank" href="<?php echo $fb; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40.392" height="40.392" viewBox="0 0 40.392 40.392">
                                                                <path id="Path_39408" data-name="Path 39408" d="M-1006.114,243.052a20.194,20.194,0,0,0-20.2-20.2,20.194,20.194,0,0,0-20.2,20.2,20.194,20.194,0,0,0,20.2,20.2c.118,0,.237,0,.356-.008V247.525h-4.339v-5.057h4.339v-3.723c0-4.316,2.634-6.667,6.484-6.667a35.222,35.222,0,0,1,3.889.2v4.512h-2.65c-2.091,0-2.5.994-2.5,2.454v3.219h5.009l-.654,5.057h-4.355v14.95a20.2,20.2,0,0,0,14.618-19.415Zm0,0" transform="translate(1046.506 -222.856)" />
                                                            </svg>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="review__photo">
                                                    <img src="<?php echo $photo['url']; ?>" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="reviews__swiper-arrows">
                            <button type="button" class="arrow-left">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M58 58H0V0H58V58ZM34.354 12.066L37.401 15.112L23.408 29.105L37.4 43.099L34.354 46.145L17.315 29.105L34.354 12.066Z" fill="#111111" />
                                </svg>
                            </button>
                            <button type="button" class="arrow-right">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 58H58V0H0V58ZM23.646 12.066L20.599 15.112L34.592 29.105L20.6 43.099L23.646 46.145L40.685 29.105L23.646 12.066Z" fill="#111111" />
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>