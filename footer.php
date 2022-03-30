<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ieverly
 */

?>
<?php if (have_rows('footer', 'options')) : ?>
    <?php while (have_rows('footer', 'options')) : the_row();
        $title = get_sub_field('contact_us');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email');
        $copyright = get_sub_field('copyright');
        $menu_one = get_sub_field('menu_one');
        $menu_two = get_sub_field('menu_two');
        $slogan = get_sub_field('slogan');
    ?>
        <footer id="colophon" class="site__footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><?php echo $title; ?></h3>
                        <a class="phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        <a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>

                    <div class="col-md-3">
                        <nav class="site__footer-menu">
                            <h4><?php echo $menu_one ?></h4>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer_menu_one',
                                )
                            );
                            ?>
                        </nav>
                    </div>

                    <div class="col-md-3">
                        <nav class="site__footer-menu">
                            <h4><?php echo $menu_two ?></h4>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer_menu_two',
                                )
                            );
                            ?>
                        </nav>
                    </div>

                    <div class="col-md-2">
                        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                    </div>
                </div>

                <div class="sep"></div>

                <div class="row center">
                    <div class="col-6">
                        <div class="copyright">
                            <?php echo $copyright; ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php if (have_rows('social_menu')) : ?>
                            <nav class="footer__social">
                                <ul>
                                    <?php while (have_rows('social_menu')) : the_row();
                                        $link = get_sub_field('link');
                                        $icon = get_sub_field('icon');
                                    ?>
                                        <li>
                                            <a href="<?php echo $link; ?>" target="_blank">
                                                <?php echo file_get_contents($icon['url']); ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="footer__slogan"><?php echo $slogan; ?></div>
        </footer>
    <?php endwhile; ?>
<?php endif; ?>


</div>

<?php
get_template_part('/template-parts/modal');
wp_footer();
?>

</body>

</html>