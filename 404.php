<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ieverly
 */

get_header();
?>

<div class="fix-bg error-bg">
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dist/svg/404bg.svg" loading="lazy">
</div>

<div class="fix-bg error-bg">
	<svg width="897" height="372" viewBox="0 0 897 372" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M277.255 245.76V300.544H236.295V365.056H176.903V300.544H0.775391V245.76L124.167 6.65601H188.167L64.7754 245.76H176.903V152.576H236.295V245.76H277.255Z" fill="url(#paint0_linear_651_10683)" />
		<path d="M550.703 321.024C526.127 354.816 491.653 371.712 447.279 371.712C402.906 371.712 368.261 354.816 343.343 321.024C318.767 287.232 306.479 242.176 306.479 185.856C306.479 129.536 318.767 84.48 343.343 50.688C368.261 16.896 402.906 0 447.279 0C491.653 0 526.127 16.896 550.703 50.688C575.621 84.48 588.079 129.536 588.079 185.856C588.079 242.176 575.621 287.232 550.703 321.024ZM447.279 314.368C473.903 314.368 494.213 303.275 508.207 281.088C522.202 258.901 529.199 227.157 529.199 185.856C529.199 144.555 522.202 112.811 508.207 90.624C494.213 68.4374 473.903 57.344 447.279 57.344C420.997 57.344 400.687 68.4374 386.351 90.624C372.357 112.811 365.359 144.555 365.359 185.856C365.359 227.157 372.357 258.901 386.351 281.088C400.687 303.275 420.997 314.368 447.279 314.368Z" fill="url(#paint1_linear_651_10683)" />
		<path d="M896.755 245.76V300.544H855.795V365.056H796.403V300.544H620.275V245.76L743.667 6.65601H807.667L684.275 245.76H796.403V152.576H855.795V245.76H896.755Z" fill="url(#paint2_linear_651_10683)" />
		<defs>
			<linearGradient id="paint0_linear_651_10683" x1="448.765" y1="-1.47082e-06" x2="438.999" y2="413" gradientUnits="userSpaceOnUse">
				<stop stop-color="#1F2840" />
				<stop offset="1" stop-color="#1C2438" stop-opacity="0" />
			</linearGradient>
			<linearGradient id="paint1_linear_651_10683" x1="448.765" y1="-1.47082e-06" x2="438.999" y2="413" gradientUnits="userSpaceOnUse">
				<stop stop-color="#1F2840" />
				<stop offset="1" stop-color="#1C2438" stop-opacity="0" />
			</linearGradient>
			<linearGradient id="paint2_linear_651_10683" x1="448.765" y1="-1.47082e-06" x2="438.999" y2="413" gradientUnits="userSpaceOnUse">
				<stop stop-color="#1F2840" />
				<stop offset="1" stop-color="#1C2438" stop-opacity="0" />
			</linearGradient>
		</defs>
	</svg>
</div>

<div class="separator"></div>

<section class="error-404 not-found">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'ieverly'); ?></h1>

				<div class="page-content">
					<p><?php esc_html_e('It looks like nothing was found at this location.', 'ieverly'); ?></p>
				</div><!-- .page-content -->
			</div>
		</div>
	</div>
</section><!-- .error-404 -->

<div class="footer__over">
	<?php get_template_part('/template-parts/home/footer'); ?>
</div>

<?php
get_footer();
