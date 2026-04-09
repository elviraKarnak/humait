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

// Footer Middle
$footerButtons = get_field('buttons_footer_humait', 'option');

// Footer Right
$titleFr = get_field('title_fr_footer_humait', 'option');
$descriptionFr = get_field('description_fr_footer_humait', 'option');
$newsLetter = get_field('form_shortcode_footer_humait', 'option');
$newsLetterText = get_field('form_description_footer_humait', 'option');

$footerBackgroundImg = get_field('footer_background_img');

$footerBackgroundImg = !empty($footerBackgroundImg['url']) ? $footerBackgroundImg['url'] : get_stylesheet_directory_uri() . '/assets/images/footer-bg.webp';





$copyrightText = get_field('copyright_footer_humait', 'option');
$developerText = get_field('developer_text', 'option');
$developerLink = get_field('developer_link', 'option');
$developerImage = get_field('developer_image', 'option');

$buttonArrow = get_field('button_arrow_opl', 'option');
$buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';

$buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
$buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';



if(!empty($footerLogo) || !empty($title) || !empty($footerSocials) || !empty($description) || !empty($titleFr) || !empty($descriptionFr) || !empty($newsLetter) || !empty($newsLetterText) || !empty($copyrightText) || !empty($developerText) || !empty($developerLink) || !empty($developerImage)): ?>

  <footer class="main-footer" style=' background: url("<?php echo $footerBackgroundImg; ?>") no-repeat center/cover;'>
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
                'theme_location' => 'menu-2',
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
              <?php echo $description; ?>
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

              <?php
          if(!empty($footerButtons)): ?>

          <!-- CENTER -->
          <div class="col-lg-4 mb-4">
            <div class="contact">
              <ul>

                  <?php while (have_rows('buttons_footer_humait', 'option')) : the_row(); 
                  
                      $ftrBtn = get_sub_field('button_footer_humait');
                  ?>
                <li>
                  <div class="btn_wrapper">
                        <a href="<?php echo $ftrBtn['url']; ?>" target='<?php echo $ftrBtn['target'] ? $ftrBtn['target'] : '_self'; ?>' class="btn">
                            <?php echo $ftrBtn['title']; ?> 
                            <img
                                    src="<?php echo $buttonArrowUrl; ?>"
                                    height="<?php echo $buttonArrowHeight; ?>"
                                    width="<?php echo $buttonArrowWidth; ?>"
                                    alt="button arrow" >
                        </a>
                    </div>
                </li>
                <?php endwhile; ?>
               
              </ul>
            </div>
          </div>
          <?php endif; ?>

          <?php if(!empty($titleFr) || !empty($descriptionFr) || !empty($newsLetter) || !empty($newsLetterText) || !empty($copyrightText)): ?>

            <!-- RIGHT -->
            <div class="col-lg-3">
              <?php if (!empty($titleFr)) : ?>
                <h4><?php echo $titleFr; ?></h4>
              <?php endif; ?>

              <?php if (!empty($descriptionFr)) : ?>
                  <p><?php echo $descriptionFr; ?></p>
              <?php endif; ?>
            
              <?php if (!empty($newsLetter)) : ?>
                <div class="newsletter">
                  <?php echo $newsLetter; ?>
                </div>
              <?php endif; ?>
              <?php if (!empty($newsLetterText)) : ?>
              <p><?php echo $newsLetterText; ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        </div>
      <?php endif; ?>
      
      <?php if (!empty($copyrightText) || !empty($developerText) || !empty($developerLink) || !empty($developerImage)) : ?>
      <!-- BOTTOM -->
          <div class="bottom d-flex justify-content-between mt-5">
            <?php if (!empty($copyrightText)) : ?>
              <p><?php echo $copyrightText; ?></p>
            <?php endif; ?>
            <?php if (!empty($developerText) || !empty($developerLink) || !empty($developerImage)) : ?>
              <span>
                <?php echo esc_html($developerText); ?>
                <?php if (!empty($developerLink) && !empty($developerImage)) : ?>
                  <a href="<?php echo esc_url($developerLink); ?>" target="_blank">
                    <img src="<?php echo esc_url($developerImage['url']); ?>" alt="<?php echo esc_attr($developerImage['alt']); ?>" height="<?php echo esc_attr($developerImage['height']); ?>" width="<?php echo esc_attr($developerImage['width']); ?>">
                  </a>
                <?php endif; ?>
              </span>
             <?php endif; ?>
          </div>
        <?php endif; ?>
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