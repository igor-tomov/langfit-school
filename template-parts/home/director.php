<?php

/**
 * Template part for displaying home director
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<?php if (have_rows('director')) : ?>
    <?php while (have_rows('director')) : the_row();
        $name = get_sub_field('name');
        $position = get_sub_field('position');
        $photo = get_sub_field('photo');
        $description = get_sub_field('description');
    ?>
        <section class="section__director content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="director__about">
                            <img src="<?php echo $photo['url']; ?>" loading="lazy">
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $position; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="director__description">
                            <svg xmlns="http://www.w3.org/2000/svg" width="213.525" height="143.517" viewBox="0 0 213.525 143.517">
                                <path id="Path_39989" data-name="Path 39989" d="M79.108-83.41,91.943-140H47.021C24.268-95.078,12.6-69.992,12.6-44.906c0,29.17,19.252,48.422,47.839,48.422s48.422-19.252,48.422-45.505C108.861-62.408,97.193-77.576,79.108-83.41Zm117.847,0L209.79-140H164.284c-22.753,44.922-34.421,70.008-34.421,95.094,0,29.17,19.252,48.422,48.422,48.422,28,0,47.839-19.252,47.839-45.505C226.125-61.824,215.04-77.576,196.955-83.41Z" transform="translate(-12.6 140)" fill="#fff" />
                            </svg>
                            <?php echo $description; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>