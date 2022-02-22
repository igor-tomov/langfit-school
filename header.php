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

		<header id="masthead" class="site__header">
			<div class="site__header-branding">
				<?php the_custom_logo(); ?>
			</div>

			<div id="site-navigation" class="site__header-navigation">
				<button class="site__header-menu-button" aria-controls="primary-menu" aria-expanded="false">
					<div class="line"></div>
					<div class="line"></div>
				</button>

				<div class="site__header-nav-box">
					<?php
					wp_nav_menu(
						array(
							'container_class' => 'site__header-menu menu-left',
							'theme_location' => 'header_left',
						)
					);

					wp_nav_menu(
						array(
							'container_class' => 'site__header-menu menu-right',
							'theme_location' => 'header_right',
						)
					);
					?>
				</div>
			</div>
		</header>