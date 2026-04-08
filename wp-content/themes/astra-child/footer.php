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

?>

<footer class="main-footer" style=' background: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-bg.webp") no-repeat center/cover;'>
  <div class="container">

    <!-- TOP BAR -->
    <div class="row align-items-center top-bar">

      <div class="col-md-3 col-12">
        <div class="logo text-md-start text-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/site-logo.svg" alt="">
        </div>
      </div>

      <div class="col-md-9 col-12 text-end">
        <nav class="menu">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Book</a>
          <a href="#">Membership</a>
          <a href="#">Blog</a>
          <a href="#">Contact Us</a>
        </nav>
      </div>

    </div>

    <hr>

    <!-- CONTENT -->
    <div class="row justify-content-between mt-md-5 mt-3">

      <!-- LEFT -->
      <div class="col-lg-4 mb-4">
        <h4>The Future Begins With You</h4>
        <div class="footer-content">
          <p>
            This is not just a platform.
          </p>
          <p> This is a new way of thinking.</p>
          <p>Human + AI - growing side by side.</p>
          <p>The question is simple:</p>
          <p>Will you be part of what comes next?</p>
        </div>


        <div class="social">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/x.svg" alt="X"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/in.svg" alt="In"></a>

        </div>
      </div>

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

    <!-- BOTTOM -->
    <div class="bottom d-flex justify-content-between mt-5">
      <p>© Copyright 2025 All rights reserved.</p>
      <span>Designed & Developed by <a href="https://elvirainfotech.com/" target="_blank"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/elvira-logo.svg" alt="Elvira Logo"></a></span>
    </div>

  </div>
</footer>


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