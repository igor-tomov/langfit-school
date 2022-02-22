<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page__full'); ?>>
	<header class="entry-header content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_title('<h1 class="entry-title title">', '</h1>'); ?>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="page__full-content content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'ieverly'),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->