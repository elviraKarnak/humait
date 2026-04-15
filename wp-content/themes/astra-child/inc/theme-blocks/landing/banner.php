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
        background: url('<?php echo $lpBannerCoverImgUrl; ?>')
          no-repeat center/cover;
      ">
    <div class="container">
      <div class="row align-items-end hero-content justify-content-between">
        <!-- LEFT -->
        <div class="col-lg-5 text-md-start text-center">
          <?php if (!empty($lpBannerTitle)): ?>
            <h1><?php echo esc_html($lpBannerTitle); ?></h1>
          <?php endif; ?>
          <?php if (!empty($lpBannerDescription)): ?>
            <p>
              <?php echo esc_html($lpBannerDescription); ?>
            </p>    
          <?php endif; ?>
          
          <?php if (!empty($lpBannerDescription_2)): ?>
      
          <div class="grad-border2">
            <p> <?php echo esc_html($lpBannerDescription_2); ?></p>
          </div>
          <?php endif; ?>
          <?php if (!empty($lpBannerDescription_3)): ?>
          <div class="text">
            <p>
              <?php echo esc_html($lpBannerDescription_3); ?>
            </p>
          </div>
          <?php endif; ?>
          <?php if (!empty($lpBannerRightBtn) || !empty($lpBannerLeftBtn)): ?>
          <div class="btns d-flex align-items-center flex-column flex-md-row gap-3">
            <?php if (!empty($lpBannerLeftBtn)): ?>
              <div class="btn_wrapper">
                <a href="<?php echo esc_url($lpBannerLeftBtn['url']); ?>"
                  target='<?php echo esc_attr($lpBannerLeftBtn['target'] ? $lpBannerLeftBtn['target'] : '_self'); ?>'
                  class="btn">
                  <?php echo esc_html($lpBannerLeftBtn['title']); ?>
                  <img src="<?php echo esc_url($buttonArrowUrl); ?>" height="<?php echo esc_attr($buttonArrowHeight); ?>"
                    width="<?php echo esc_attr($buttonArrowWidth); ?>" alt="button arrow">
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($lpBannerRightBtn)): ?>
              <div class="btn_wrapper">
                <a href="<?php echo esc_url($lpBannerRightBtn['url']); ?>"
                  target='<?php echo esc_attr($lpBannerRightBtn['target'] ? $lpBannerRightBtn['target'] : '_self'); ?>'
                  class="btn">
                  <?php echo esc_html($lpBannerRightBtn['title']); ?>
                  <img src="<?php echo esc_url($buttonArrowUrl); ?>" height="<?php echo esc_attr($buttonArrowHeight); ?>"
                    width="<?php echo esc_attr($buttonArrowWidth); ?>" alt="button arrow">
                </a>
              </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>

      <!-- RIGHT -->
        <?php if (!empty($lpBannerBookImg)): ?>
          <div class="col-lg-6 text-end books">
            <img src="<?php echo esc_url($lpBannerBookImg['url']); ?>" alt="<?php echo esc_attr($lpBannerBookImg['alt']); ?>"
              height="<?php echo esc_attr($lpBannerBookImg['height']); ?>"
              width="<?php echo esc_attr($lpBannerBookImg['width']); ?>">
          </div>  
     <?php endif; ?>
       
      </div>
    </div>
  </section>
  <?php endif; ?>