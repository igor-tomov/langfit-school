<?php if (have_rows('courses')) : ?>
<?php while (have_rows('courses')) : the_row();
    $title = get_sub_field('title');
?>
<section class="section__courses content" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title"><?php echo $title; ?></h2>
            </div>
        </div>

        <?php if (have_rows('list')) : ?>
        <?php while (have_rows('list')) : the_row();
            $title = get_sub_field('title');
            $info = get_sub_field('info');
            $keyPointsTitle = get_sub_field('key_points_title');
            $cover = get_sub_field('cover');
            $pricing = get_sub_field('pricing_string');
        ?>
        <div class="lf-course">
            <div class="row">
                <div class="col-md-6">
                    <div class="lf-course__left-part">
                        <h3><?php echo $title; ?></h3>
                        <div class="lf-course__cover">
                            <img src="<?php echo $cover['url']; ?>" loading="lazy" alt="<?php echo $title; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lf-course__right-part">
                        <div class="lf-course__info"><?php echo $info; ?></div>
                        <h4><?php echo $keyPointsTitle; ?>:</h4>
                        <ul class="lf-course__key-points">
                            <?php while (have_rows('key_points')) : the_row();
                                $title = get_sub_field('title');
                            ?>
                            <li><?php echo $title; ?></li>
                            <?php endwhile; ?>
                        </ul>
                        <h4><?php echo $pricing; ?></h4>
                        <button class="button__cta button__get" type="button">
                            <a href="#try-for-free">Спробувати безкоштовно</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
