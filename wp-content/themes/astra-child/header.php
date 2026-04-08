<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
		?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php
	}
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content">
		<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
	</a>

	<div <?php
	echo wp_kses_post(
		astra_attr(
			'site',
			array(
				'id' => 'page',
				'class' => 'hfeed site',
			)
		)
	);
	?>>
		<?php
		astra_header_before();

		astra_header();

		astra_header_after();

		astra_content_before();
		?>


		<header class="main-header">
			<div class="container">

				<!-- LEFT MENU -->
				<nav class="menu">
					<div class="menu-close">✕</div>

					<a href="#">Home</a>
					<a href="#">About</a>
					<a href="#">Book</a>
					<a href="#">Membership</a>
					<a href="#">Blog</a>
				</nav>

				<!-- LOGO -->
				<div class="logo">
					<a href="index.html"><img src="./assets/images/site-logo.svg" alt="site logo"></a>
				</div>

				<!-- RIGHT SIDE -->
				<div class="right">

					<!-- LANGUAGE DROPDOWN -->
					<div class="lang-dropdown">
						<div class="selected">
							<img src="./assets/images/usa-flag.svg" alt="usa flag">
							<span>English</span>
						</div>

						<ul>
							<li>
								<img src="./assets/images/usa-flag.svg" alt="usa flag"> English
							</li>
							<li>
								<img src="./assets/images/france.webp" alt="france"> French
							</li>
							<li>
								<img src="./assets/images/spain.webp" alt="spain"> Spanish
							</li>
						</ul>
					</div>

					<!-- BUTTON -->
					<div class="btn_wrapper">
						<a href="#" class="btn">Contact Us <img src="./assets/images/button-arrow.svg"
								alt="button arrow"></a>
					</div>
					<!-- TOGGLE BUTTON -->
					<div class="menu-toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>

			</div>

	</div>
	</header>



	<div id="content" class="site-content">
		<div class="ast-container">
			<?php astra_content_top(); ?>