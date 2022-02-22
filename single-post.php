<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ieverly
 */

/* thumbnail */
if (has_post_thumbnail()) {
	$item__imgurl = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
	$item__imgurl = get_template_directory_uri() . '/assets/dist/img/img-default.png';
}

$pdf = get_field('post')['pdf'];
$author = get_field('post')['author'];

get_header();
?>

<div class="single-post">
	<div class="cover">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/svg/single-post.svg" loading="lazy">
	</div>

	<section class="section__single-title">
		<div class="container-fluid">
			<div class="article-bar">
				<a class="button__back" href="/category/press-releases/">
					<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8.4142 1.96616L2.41438 7.9644L8.4142 13.9626L7.00017 15.377L0.292969 8.6716L0.292969 7.2572L7.00017 0.551758L8.4142 1.96616Z" fill="#7A49B8" />
					</svg>
					<?php esc_html_e('Back to posts', 'ieverly'); ?>
				</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<?php if (!empty($author['image'] || $author['name'])) : ?>
						<div class="single__author">
							<div class="author__img">
								<img src="<?php echo $author['image']['url']; ?>" loading="lazy">
							</div>
							<div class="author__name">
								<?php echo $author['name']; ?>
							</div>
						</div>
					<?php endif; ?>
					<h1 class="single__title"><?php wp_title(''); ?></h1>
					<div class="single__item-top">
						<div class="date"><?php echo get_the_date('j F Y'); ?></div>
						<?php if (!empty($pdf)) : ?>
							<div class="download"><a target="_blank" href="<?php echo $pdf['url']; ?>"><?php esc_html_e('Open in pdf', 'ieverly'); ?></a></div>
						<?php endif; ?>
					</div>
					<div class="single__image">
						<img loading="lazy" src="<?php echo esc_url($item__imgurl); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section__single-content content-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="footer__over">
		<?php get_template_part('/template-parts/home/footer'); ?>
	</div>

</div>

<?php
get_footer();
