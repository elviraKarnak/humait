<?php

$lpBannerTitle = get_field('title_lpb');
$lpBannerDescription = get_field('description_lpb_1');
$lpBannerDescription_2 = get_field('description_lpb_2');
$lpBannerDescription_3 = get_field('description_lpb_2');
$lpBannerRightBtn = get_field('button_right_lb_bl');
$lpBannerLeftBtn = get_field('button_left_lb_bl');
$lpBannerBookImg = get_field('book_image_lb_bl');
$lpBannerCoverImg = get_field('background_image_lb_bl');

$lpBannerCoverImgUrl = !empty($lpBannerCoverImg['url']) ? $lpBannerCoverImg['url'] : get_stylesheet_directory_uri() . 'assets/images/landing-hero-banner.webp';

$buttonArrow = get_field('button_arrow_opl', 'option');
$buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';

$buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
$buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';

?>

<?php if (!empty($lpBannerTitle) || !empty($lpBannerDescription) || !empty($lpBannerDescription_2) || !empty($lpBannerRightBtn) || !empty($lpBannerLeftBtn) || !empty($lpBannerBookImg) || !empty($lpBannerCoverImgUrl)): ?>
  <section class="hero-section landing-hero-section" style="
        background: url('assets/images/landing-hero-banner.webp')
          no-repeat center/cover;
      ">
    <div class="container">
      <div class="row align-items-end hero-content justify-content-between">
        <!-- LEFT -->
        <div class="col-lg-5 text-md-start text-center">
          <h1>HumAIT - Building the Future of Human + AI Systems
          </h1>

          <p>
            Before humanity reaches new worlds, we must build a system worthy of them.
          </p>
          <div class="grad-border2">
            <p>A mission to redesign human systems for a truthful, balanced, and unified future.</p>
          </div>
          <div class="text">
            <p>
              HumAIT is a forward-thinking initiative focused on redefining how humans and artificial intelligence work
              together. By combining ethical AI systems, transparent governance, and decentralized participation, this
              mission lays the foundation for a sustainable and unified future of humanity.
            </p>
          </div>
          <div class="btns d-flex align-items-center flex-column flex-md-row gap-3">
            <div class="btn_wrapper">
              <a href="#" class="btn">Explore the Roadmap
                <img src="./assets/images/button-arrow.svg" alt="button arrow" /></a>
            </div>
            <div class="btn_wrapper">
              <a href="#" class="btn">Join the Movement
                <img src="./assets/images/button-arrow.svg" alt="button arrow" /></a>
            </div>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-lg-6 text-end books">
          <img src="assets/images/books2.webp" alt="books" />
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>