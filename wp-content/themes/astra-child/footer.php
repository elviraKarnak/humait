<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Footer Top

$footerLogo = get_field('logo_footer_humait', 'option');
$title = get_field('title_footer_humait', 'option');
$description = get_field('description__footer_humait', 'option');
$footerSocials = get_field('social__footer_humait', 'option');

// Footer Right
$titleFr = get_field('title_fr_footer_humait', 'option');
$descriptionFr = get_field('description_fr_footer_humait', 'option');
$newsLetter = get_field('form_shortcode_footer_humait', 'option');
$newsLetterText = get_field('form_description_footer_humait', 'option');

$copyrightText = get_field('copyright_footer_humait', 'option');
$developerText = get_field('developer_text', 'option');
$developerLink = get_field('developer_link', 'option');
$developerImage = get_field('developer_image', 'option');



if(!empty($footerLogo) || !empty($title) || !empty($footerSocials) || !empty($description) || !empty($titleFr) || !empty($descriptionFr) || !empty($newsLetter) || !empty($newsLetterText) || !empty($copyrightText) || !empty($developerText) || !empty($developerLink) || !empty($developerImage)): ?>

  <footer class="main-footer" style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-bg.webp") no-repeat center/cover;'>
    <div class="container">

      <!-- TOP BAR -->
      <div class="row align-items-center top-bar">

        <?php if (!empty($footerLogo)) : ?>
          <div class="col-md-3 col-12">
            <div class="logo text-md-start text-center">
              <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo esc_url($footerLogo['url']); ?>" alt="<?php echo esc_attr($footerLogo['alt']); ?>" height="<?php echo esc_attr($footerLogo['height']); ?>" width="<?php echo esc_attr($footerLogo['width']); ?>">
              </a>
            </div>
          </div> 
        <?php endif; ?>
  

        <div class="col-md-9 col-12 text-end">
          <nav class="menu">

          <?php
              wp_nav_menu(
              array(
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'items_wrap' => '<ul id="%1$s menu" class="%2$s footer_menu ">%3$s</ul>',
                'theme_location' => 'menu-3',
              )
              );
          ?>
          </nav>
        </div>

      </div>


      <hr>

      
    <?php
      if(!empty($title) || !empty($description) || !empty($footerSocials) || !empty($titleFr) || !empty($descriptionFr) || !empty($newsLetter) || !empty($newsLetterText)): ?>

        <!-- CONTENT -->
        <div class="row justify-content-between mt-md-5 mt-3">

        <?php
          if(!empty($title) || !empty($description) || !empty($footerSocials)): ?>

          
          <!-- LEFT -->
          <div class="col-lg-4 mb-4">
            <?php if (!empty($title)) : ?>
              <h4><?php echo esc_html($title); ?></h4>
            <?php endif; ?>
          
            <?php if (!empty($description)) : ?>
            
            <div class="footer-content">
              <?php echo esc_html($description); ?>
            </div>
            <?php endif; ?>

         <?php if (!empty($footerSocials)) : ?>
            <div class="social">
             <?php foreach ($footerSocials as $social) : ?>
                <a href="<?php echo esc_url($social['social_links_footer_humait']); ?>" target="_blank">
                  <img src="<?php echo esc_url($social['social_icons_footer_humait']['url']); ?>" alt="<?php echo esc_attr($social['social_icons_footer_humait']['alt']); ?>" height="<?php echo esc_attr($social['social_icons_footer_humait']['height']); ?>" width="<?php echo esc_attr($social['social_icons_footer_humait']['width']); ?>">
                </a>
             <?php endforeach; ?>

            </div>
          <?php endif; ?>
          </div>
          <?php endif; ?>

          <!-- CENTER -->
          <div class="col-lg-4 mb-4">
            <div class="contact">
              <ul>
                <li>
                  <div class="btn_wrapper">
                    <a href="#" class="btn">Join the Movement <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                        alt="button arrow"></a>
                  </div>
                </li>
                <li>
                  <div class="btn_wrapper">
                    <a href="#" class="btn">Get the Book <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg" alt="button arrow"></a>
                  </div>
                </li>
                <li>
                  <div class="btn_wrapper">
                    <a href="#" class="btn">Listen to the Audio <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.svg"
                        alt="button arrow"></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- RIGHT -->
          <div class="col-lg-3">
            <h4>Be Part of What Comes Next</h4>
            <p>Get early access to ideas, insights, and the evolution of HumAIT.</p>

            <div class="newsletter">
              <input type="text" placeholder="Your email address">
              <button><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/newsletter-arrow.svg" alt="newsletter arrow"></button>
            </div>
            <p>No spam. No noise. Just truth.</p>
          </div>

        </div>
      <?php endif; ?>
      <!-- BOTTOM -->
      <div class="bottom d-flex justify-content-between mt-5">
        <p>© Copyright 2025 All rights reserved.</p>
        <span>Designed & Developed by <a href="https://elvirainfotech.com/" target="_blank"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/elvira-logo.svg" alt="Elvira Logo"></a></span>
      </div>

    </div>
  </footer>

<?php endif; ?>


<?php // astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php
	// astra_content_after();

	// astra_footer_before();

	// astra_footer();

	// astra_footer_after();
?>
	</div><!-- #page -->
<?php
	// astra_body_bottom();
	// wp_footer();
?>



	</body>
</html>