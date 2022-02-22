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

$header = get_field('header', 'options');
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

		<!-- Preloader -->
		<div class="preloader">
			<div class="preloader__top"></div>
			<div class="preloader__logo">
				<svg width="204" height="32" viewBox="0 0 204 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.9795 18.1625C23.9732 19.4461 24.4701 21.0194 24.4701 22.9654C24.4701 25.5325 23.4764 27.5199 21.5303 28.9277C19.5843 30.3354 17.3485 30.9979 13.6221 30.9979H0V3.42252C0 2.18039 0.952303 1.18668 2.19444 1.18668H12.8354C16.2306 1.18668 18.5492 1.93196 20.4124 3.29831C22.2756 4.66466 22.9795 6.81769 22.9795 9.26056C22.9795 10.8339 22.6069 12.1589 21.903 13.3182C21.1991 14.4361 20.7437 14.9744 19.5429 15.5954C21.2405 16.0095 21.9858 16.879 22.9795 18.1625ZM3.685 4.87168V12.3245C3.685 13.3182 4.51309 14.1463 5.5068 14.1463H12.4214C14.6158 14.1463 16.272 13.7322 17.4727 12.9456C18.632 12.1175 19.2531 10.9581 19.2531 9.38477C19.2531 7.8114 18.6734 6.65207 17.4727 5.82398C16.3134 4.99589 14.6158 4.87168 12.4214 4.87168H3.685ZM18.9219 26.1122C20.1226 25.3255 20.7437 24.3318 20.7437 22.6342C20.7437 19.3219 18.3008 17.6657 13.4565 17.6657H3.685V25.6567C3.685 26.5676 4.43028 27.3129 5.34118 27.3129H13.4565C15.8993 27.3129 17.7211 26.8989 18.9219 26.1122Z" fill="white" />
					<path d="M43.5989 28.4308C43.5989 29.8386 42.4396 30.9979 41.0319 30.9979H39.3343V3.29831C39.3343 2.13898 40.2866 1.18668 41.4459 1.18668H43.5575V28.4308H43.5989Z" fill="white" />
					<path d="M204 29.5902V31.0393H182.884V1.22808H204V2.80145C204 3.96078 203.048 4.91308 201.888 4.91308H186.651V14.0635H198.659V15.5126C198.659 16.7134 197.707 17.6657 196.506 17.6657H186.651V27.3129H201.764C202.965 27.3129 204 28.3066 204 29.5902Z" fill="white" />
					<path d="M73.1204 0.399994C68.3588 0.399994 64.1356 2.51162 61.2373 5.86539L58.5046 4.33342L58.546 4.49904C58.5046 5.32713 58.5046 6.19662 58.5874 7.06612C58.8772 9.79882 59.8709 12.6971 61.3615 14.8088C61.8169 10.5855 64.4668 7.06612 68.1518 5.36853C68.3588 5.28573 68.5659 5.20292 68.7729 5.12011C68.8143 5.12011 68.8143 5.0787 68.8557 5.0787C69.0627 4.99589 69.2283 4.91308 69.4354 4.87168C69.4768 4.87168 69.4768 4.87168 69.5182 4.83027C69.9736 4.70606 70.3877 4.58185 70.8431 4.49904C70.8845 4.49904 70.9673 4.45764 71.0087 4.45764C71.1743 4.41623 71.34 4.41623 71.5056 4.37483C71.5884 4.37483 71.6712 4.37483 71.7126 4.33342C71.8782 4.33342 72.0438 4.29202 72.2095 4.29202C72.2923 4.29202 72.3337 4.29202 72.4165 4.29202C72.6649 4.29202 72.8719 4.25061 73.1204 4.25061C74.1555 4.25061 75.1492 4.37483 76.0601 4.62325C77.0124 4.87168 77.9233 5.24432 78.7514 5.69977C78.917 5.78258 79.0826 5.86539 79.2482 5.9896C80.863 6.98331 82.2293 8.34966 83.2231 9.96443C83.3059 10.1301 83.4301 10.2957 83.5129 10.4613C83.9683 11.2894 84.341 12.2003 84.5894 13.1526C84.8378 14.1049 84.962 15.0986 84.962 16.0923C84.962 16.2993 84.962 16.5063 84.962 16.7134C84.962 17.1274 84.9206 17.5001 84.8378 17.9141C84.7136 18.7008 84.5066 19.4461 84.2582 20.1913C83.3473 22.717 81.5669 24.8701 79.2896 26.2364C79.124 26.3192 78.9584 26.4434 78.7928 26.5262C77.9647 26.9817 77.0538 27.3543 76.1015 27.6028C75.1492 27.8512 74.1555 27.9754 73.1618 27.9754C72.9547 27.9754 72.7477 27.9754 72.5821 27.9754C72.4993 27.9754 72.4579 27.9754 72.3751 27.9754C72.2509 27.9754 72.1266 27.9754 72.0024 27.934C71.9196 27.934 71.8368 27.934 71.754 27.8926C71.6298 27.8926 71.5056 27.8512 71.4228 27.8512C71.34 27.8512 71.2571 27.8098 71.1743 27.8098C71.0501 27.8098 70.9673 27.7684 70.8431 27.7684C70.7603 27.7684 70.6775 27.727 70.5947 27.727C70.5119 27.6856 70.3877 27.6856 70.3048 27.6442C70.222 27.6028 70.1392 27.6028 70.0564 27.5613C69.9736 27.5199 69.8494 27.5199 69.7666 27.4785C69.6838 27.4371 69.601 27.4371 69.5182 27.3957C69.4353 27.3543 69.3111 27.3129 69.2283 27.3129C69.1455 27.2715 69.0627 27.2715 68.9799 27.2301C68.8971 27.1887 68.8143 27.1473 68.6901 27.1059C68.6073 27.0645 68.5245 27.0231 68.4416 26.9817C68.3588 26.9403 68.276 26.8989 68.1932 26.8575C68.1104 26.8161 68.0276 26.7747 67.9448 26.7333C67.862 26.6919 67.7792 26.6504 67.6964 26.609C67.6136 26.5676 67.5307 26.5262 67.4479 26.4848C67.3651 26.4434 67.2823 26.402 67.1995 26.3606C67.1167 26.3192 67.0339 26.2778 66.9511 26.2364C66.8683 26.195 66.8269 26.1536 66.7441 26.1122C66.6612 26.0708 66.5784 25.988 66.4956 25.9466C66.4542 25.9052 66.3714 25.8638 66.33 25.8224C65.9574 25.5739 65.6261 25.2841 65.2949 24.9943L65.2535 24.9529C65.1707 24.8701 65.0465 24.7872 64.9637 24.7044C64.9223 24.663 64.8809 24.6216 64.8395 24.5802C64.7566 24.4974 64.6738 24.4146 64.591 24.3318C64.5496 24.2904 64.5082 24.249 64.4668 24.2076C64.384 24.1248 64.3012 24.042 64.2184 23.9178C64.177 23.8763 64.1356 23.8349 64.0942 23.7935C64.0114 23.7107 63.9286 23.5865 63.8457 23.5037C63.8043 23.4623 63.7629 23.4209 63.7215 23.3795C63.6387 23.2967 63.5559 23.1725 63.5145 23.0897C63.4731 23.0483 63.4317 23.0069 63.4317 22.9654C63.3489 22.8826 63.3075 22.7584 63.2247 22.6756C63.1833 22.6342 63.1833 22.5928 63.1419 22.5514C63.0591 22.4272 63.0177 22.3444 62.9348 22.2202C62.8934 22.1788 62.8934 22.1374 62.852 22.096C62.7692 21.9717 62.7278 21.8475 62.645 21.7647C62.6036 21.7233 62.6036 21.6819 62.5622 21.6405C62.5208 21.5163 62.438 21.3921 62.3966 21.2679C62.3966 21.2265 62.3552 21.1851 62.3552 21.1437C62.3138 21.0194 62.231 20.8952 62.1896 20.7296C62.1896 20.6882 62.1482 20.6882 62.1482 20.6468C62.1068 20.4812 62.0239 20.357 61.9825 20.1913C61.6927 19.3633 61.4857 18.4524 61.3615 17.5415C59.8709 16.0923 58.6702 14.3533 57.9249 12.4073C57.6351 13.6494 57.4695 14.933 57.4695 16.2579C57.4695 24.9115 64.5082 31.9502 73.1618 31.9502C81.8153 31.9502 88.8541 24.9115 88.8541 16.2579C88.8127 7.43876 81.7739 0.399994 73.1204 0.399994Z" fill="white" />
					<path d="M116.14 1.18668H114.111C113.448 1.18668 112.827 1.55932 112.537 2.18039L99.495 30.9979H101.896C103.097 30.9979 104.215 30.294 104.712 29.1761L114.483 6.98331C114.732 6.44505 115.519 6.44505 115.767 6.98331L125.538 29.1761C126.035 30.294 127.112 30.9979 128.354 30.9979H130.838L117.754 2.18039C117.423 1.55932 116.802 1.18668 116.14 1.18668Z" fill="white" />
					<path d="M167.191 15.8853H168.765V27.8512C167.316 29.0933 165.618 30.087 163.713 30.7495C161.809 31.412 159.78 31.7432 157.71 31.7432C154.77 31.7432 152.079 31.0807 149.719 29.7144C147.359 28.348 145.495 26.4848 144.129 24.1248C142.763 21.7647 142.1 19.0734 142.1 16.0923C142.1 13.1112 142.763 10.4199 144.129 8.05983C145.495 5.65837 147.359 3.79516 149.719 2.47022C152.12 1.14527 154.77 0.441398 157.751 0.441398C160.111 0.441398 162.223 0.855443 164.127 1.64213C166.032 2.42881 167.647 3.62955 169.013 5.16151L167.895 6.36224C167.109 7.19033 165.866 7.27314 164.914 6.56926C162.885 5.0787 160.567 4.33342 157.917 4.33342C155.681 4.33342 153.694 4.83028 151.913 5.82398C150.133 6.81769 148.766 8.22544 147.731 10.0058C146.738 11.7862 146.241 13.8151 146.241 16.0509C146.241 18.2867 146.738 20.2742 147.731 22.0545C148.725 23.8349 150.133 25.2427 151.913 26.2778C153.694 27.3129 155.681 27.8098 157.875 27.8098C160.484 27.8098 162.803 27.1473 164.749 25.8224V18.4938C164.749 17.0446 165.825 15.8853 167.191 15.8853Z" fill="white" />
				</svg>
				<h6><?php esc_html_e('loading...', 'ieverly'); ?></h6>
			</div>
			<div class="preloader__percent">10%</div>
		</div>

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