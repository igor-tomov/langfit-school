<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ieverly
 */

$army = get_field('army_support', 'options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NBNMV83');
	</script>
	<!-- End Google Tag Manager -->


</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBNMV83" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<?php if ($army && in_array('Show badge', $army)) : ?>
			<a style="position: absolute; top: 0;left: 0; z-index: 10" target="_blank" href="https://bank.gov.ua/en/news/all/natsionalniy-bank-vidkriv-spetsrahunok-dlya-zboru-koshtiv-na-potrebi-armiyi">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/stop-war-in-ukraine.png" loading="lazy">
			</a>
		<?php endif; ?>

		<header id="masthead" class="site__header">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<div class="site__header-branding">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="col-8">
						<?php
						wp_nav_menu(
							array(
								'container_class' => 'site__header-menu',
								'theme_location' => $args['nav_menu'],
							)
						);
						?>
					</div>
				</div>
			</div>
		</header>
