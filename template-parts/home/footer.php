<?php

/**
 * Template part for displaying footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('footer', 'options')) : ?>
    <?php while (have_rows('footer', 'options')) : the_row();
        $address = get_sub_field('address');
        $media = get_sub_field('media');
        $general = get_sub_field('general');
        $development = get_sub_field('development');
        $copyright = get_sub_field('copyright');
    ?>
        <footer class="site__footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="footer__inner">
                            <?php if (have_rows('social')) : ?>
                                <nav class="socail__list">
                                    <?php while (have_rows('social')) : the_row();
                                        $logo = get_sub_field('logo');
                                        $link = get_sub_field('link');
                                    ?>
                                        <a href="<?php echo $link; ?>" target="_blank">
                                            <img src="<?php echo $logo['url']; ?>" loading="lazy">
                                        </a>
                                    <?php endwhile; ?>
                                </nav>
                            <?php endif; ?>

                            <?php if (!empty($copyright)) : ?>
                                <div class="copyright copyright-desktop d-mobile-hidden">
                                    <?php echo $copyright; ?>
                                </div>
                            <?php endif; ?>

                            <div class="footer__address address-mobile d-mobile">
                                <?php echo $address['description']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__box footer__address d-mobile-hidden">
                            <div class="title"><?php echo $address['title']; ?></div>
                            <div class="description"><?php echo $address['description']; ?></div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer__box footer__email footer__media">
                            <div class="title"><?php echo $media['title']; ?></div>
                            <a href="mailto:<?php echo $media['email']; ?>" class="email"><?php echo $media['email']; ?></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer__box footer__email">
                            <div class="title"><?php echo $general['title']; ?></div>
                            <a href="mailto:<?php echo $general['email']; ?>" class="email"><?php echo $general['email']; ?></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer__box footer__email">
                            <div class="title"><?php echo $development['title']; ?></div>
                            <a href="mailto:<?php echo $development['email']; ?>" class="email"><?php echo $development['email']; ?></a>
                        </div>
                    </div>

                    <div class="col-12 d-mobile">
                        <?php if (!empty($copyright)) : ?>
                            <div class="copyright copyright-mobile">
                                <?php echo $copyright; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </footer>
    <?php endwhile; ?>
<?php endif; ?>