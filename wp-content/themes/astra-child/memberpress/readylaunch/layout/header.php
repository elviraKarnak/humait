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
		// astra_header_before();

		// astra_header();

		// astra_header_after();

		// astra_content_before();
		?>

	<div id="content" class="site-content">
		<div class="ast-container-main">
			<?php astra_content_top(); ?>

			<header class="main-header">
				<div class="container">

					<!-- LEFT MENU -->
					<nav class="menu">
						<div class="menu-close">✕</div>
						<?php
							wp_nav_menu(
							array(
								'container' => '',
								'container_class' => '',
								'container_id' => '',
								'items_wrap' => '<ul id="%1$s menu" class="%2$s primary_menu ">%3$s</ul>',
								'theme_location' => 'menu-1',
							)
							);
						?>
					</nav>

					 <?php if(has_custom_logo()){
                        echo "<div class='logo'>";
                		the_custom_logo(); 
						echo "</div>";
              		}

              			?>
					<!-- LOGO -->
			
					<!-- RIGHT SIDE -->
					<div class="right">

					<!-- LANGUAGE DROPDOWN -->
					<div class="lang-dropdown">
						<div class="selected">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/usa-flag.svg" alt="usa flag">
							<span>English</span>
						</div>

						<ul>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/usa-flag.svg" alt="usa flag"> English
							</li>
							<!-- <li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/france.webp" alt="france"> French
							</li>
							<li>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spain.webp" alt="spain"> Spanish
							</li> -->
						</ul>
					</div>

					<!-- BUTTON -->
					<div class="btn_wrapper">
						<?php
							wp_nav_menu(
							array(
								'container' => '',
								'container_class' => '',
								'container_id' => '',
								'items_wrap' => '<ul id="%1$s menu" class="%2$s primary_menu ">%3$s</ul>',
								'theme_location' => 'primary',
							)
							);
						?>
						<!-- <a href="#" class="btn">Get the Book <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg" alt="button arrow"></a> -->
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