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

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a style="position: absolute; top: 0;left: 0; z-index: 10" target="_blank" href="https://bank.gov.ua/en/news/all/natsionalniy-bank-vidkriv-spetsrahunok-dlya-zboru-koshtiv-na-potrebi-armiyi">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/img/stop-war-in-ukraine.png" loading="lazy">
		</a>

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
								'theme_location' => 'header',
							)
						);
						?>
					</div>
				</div>
			</div>
		</header>