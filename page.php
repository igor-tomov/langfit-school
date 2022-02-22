<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

get_header();
?>

<section id="primary" class="site-main content section__page">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<h1 class="section__title"><?php wp_title(''); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section><!-- #main -->

<?php
get_footer();
