<?php
$secInfoTitle = get_field('info_title_ujb');
$secInfoImg = get_field('info_global_icon');
$secTitle = get_field('title_ujb');
$secBgImg = get_field('section_background_ujb');

$secBgImgUrl = !empty($secBgImg['url']) ? $secBgImg['url'] : get_stylesheet_directory_uri() . '/assets/images/journey-section-bg.webp';

$buttonArrow = get_field('button_arrow_opl', 'option');
$buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';
$buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
$buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';

$hasJourneyRows = have_rows('journey_ujb');
?>

<?php if ( ! empty($secInfoTitle) || ! empty($secInfoImg) || ! empty($secTitle) || $hasJourneyRows ) : ?>
<section class="journey-section"
  style='background: url("<?php echo $secBgImgUrl; ?>") no-repeat center/cover;'>
  <div class="container text-center">

    <?php if ( ! empty($secInfoTitle) || ! empty($secInfoImg) ) : ?>
      <div class="icon-text">
        <?php if ( ! empty($secInfoImg) ) : ?>
          <img src="<?php echo $secInfoImg['url']; ?>"
            alt="<?php echo $secInfoImg['alt']; ?>"
            height="<?php echo $secInfoImg['height']; ?>"
            width="<?php echo $secInfoImg['width']; ?>">
        <?php endif; ?>
        <?php if ( ! empty($secInfoTitle) ) : ?>
          <span><?php echo $secInfoTitle; ?></span>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty($secTitle) ) : ?>
      <h2><?php echo $secTitle; ?></h2>
    <?php endif; ?>

    <?php if ( $hasJourneyRows ) : ?>
      <div class="row mt-5">
        <?php
        $i = 1;
        while ( have_rows('journey_ujb') ) :
            the_row();
            $cardTitle = get_sub_field('title_sin_ujb');
            $cardDescription = get_sub_field('description_ujb');
            $cardBtn = get_sub_field('button_ujb_sin');
        ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card-box">
              <h3><?php echo str_pad((string) $i, 2, '0', STR_PAD_LEFT); ?>.</h3>

              <?php if ( ! empty($cardTitle) ) : ?>
                <h4><?php echo $cardTitle; ?></h4>
              <?php endif; ?>

              <?php if ( ! empty($cardDescription) ) : ?>
                <p><?php echo $cardDescription; ?></p>
              <?php endif; ?>

              <?php if ( ! empty($cardBtn) ) : ?>
                <div class="btn_wrapper">
                  <a href="<?php echo $cardBtn['url']; ?>" target='<?php echo $cardBtn['target'] ? $cardBtn['target'] : '_self'; ?>' class="btn">
                    <?php echo $cardBtn['title']; ?>
                    <img
                      src="<?php echo $buttonArrowUrl; ?>"
                      height="<?php echo $buttonArrowHeight; ?>"
                      width="<?php echo $buttonArrowWidth; ?>"
                      alt="button arrow">
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php
        $i++;
        endwhile;
        ?>
      </div>
    <?php endif; ?>

  </div>
</section>
<?php endif; ?>
