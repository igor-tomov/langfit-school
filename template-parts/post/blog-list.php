<?php

/**
 * Template part for displaying blog list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

/* thumbnail */
if (has_post_thumbnail()) {
    $item__imgurl = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $item__imgurl = get_template_directory_uri() . '/assets/dist/img/img-default.png';
}

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$search_query = new WP_Query(
    array(
        'taxonomy'  => '',
        'post_type' => 'post',
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged
    )
);
?>

<!-- posts items -->
<section class="section__blog-list light-bg  content">
    <div class="loader light">
        <span><?php esc_html_e('loading...', 'ieverly'); ?></span>
    </div>
    <div id="posts__items" class="container">
        <div class="row">
            <?php
            if ($search_query->have_posts()) :
                while ($search_query->have_posts()) :
                    $search_query->the_post();

                    get_template_part('template-parts/post/item', get_post_format());

                endwhile;
            else :
                get_template_part('template-parts/notfound', get_post_format());
            endif;
            ?>
        </div>
    </div>

    <script>
        var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
        var posts = '<?php echo addslashes(wp_json_encode($search_query->query_vars)); ?>';
        var current_page = "<?php echo $search_query->query_vars['paged'] ? $search_query->query_vars['paged'] : 1; ?>";
        var max_page = '<?php echo $search_query->max_num_pages; ?>';
    </script>

    <?php
    if ($search_query->max_num_pages > 1)
        echo '<button type="button" class="button__white button__border button__dark loadmore" id="posts__loadmore" data-loading="' . __('Loading...', 'ieverly') . '" class="button__loadmore">' . esc_html('Load more', 'ieverly') . '</button>';
    wp_reset_postdata();
    ?>
</section>