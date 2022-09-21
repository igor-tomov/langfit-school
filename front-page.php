<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

get_header(null, array('nav_menu' => 'header'));
get_template_part('/template-parts/home/hero');
get_template_part('/template-parts/home/you-get');
get_template_part('/template-parts/home/reviews');
get_template_part('/template-parts/home/price');
get_template_part('/template-parts/home/free');
get_footer();
