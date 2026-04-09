<?php
$secInfoTitle = get_field('info_title_hm');
$secInfoImg = get_field('info_global_icon', 'option');
$secTitle = get_field('title_hm');
$secDescription = get_field('description_hm');
$secBottomLine = get_field('bottom_line_hm');
$secBtn = get_field('section_button_btn_hm');
$secBgImg = get_field('section_image_hm');

$secBgImgUrl = !empty($secBgImg['url']) ? $secBgImg['url'] : get_stylesheet_directory_uri() . '/assets/images/membership-section-bg.webp';

$buttonArrow = get_field('button_arrow_opl', 'option');
$buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';
$buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
$buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';

$listItems = [];

if (have_rows('list_items_hm')) {
    while (have_rows('list_items_hm')) {
        the_row();
        $rowValues = get_row(true);
        $itemText = '';

        foreach ($rowValues as $rowValue) {
            if (is_string($rowValue) && trim(wp_strip_all_tags($rowValue)) !== '') {
                $itemText = $rowValue;
                break;
            }
        }

        if ($itemText !== '') {
            $listItems[] = $itemText;
        }
    }
}
?>

<?php if (!empty($secInfoTitle) || !empty($secInfoImg) || !empty($secTitle) || !empty($secDescription) || !empty($listItems) || !empty($secBottomLine) || !empty($secBtn)) : ?>
  <section class="membership-section"
    style='background: url("<?php echo esc_url($secBgImgUrl); ?>") no-repeat center/cover;'>
    <div class="container text-center">

      <?php if (!empty($secInfoTitle) || !empty($secInfoImg)) : ?>
        <div class="icon-text">
          <?php if (!empty($secInfoImg)) : ?>
            <img src="<?php echo esc_url($secInfoImg['url']); ?>"
              alt="<?php echo esc_attr($secInfoImg['alt']); ?>"
              height="<?php echo esc_attr($secInfoImg['height']); ?>"
              width="<?php echo esc_attr($secInfoImg['width']); ?>">
          <?php endif; ?>

          <?php if (!empty($secInfoTitle)) : ?>
            <span><?php echo esc_html($secInfoTitle); ?></span>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($secTitle)) : ?>
        <h2><?php echo esc_html($secTitle); ?></h2>
      <?php endif; ?>

      <?php if (!empty($secDescription)) : ?>
        <div class="top-content">
          <?php echo wp_kses_post($secDescription); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($listItems)) : ?>
        <ul class="list">
          <?php foreach ($listItems as $listItem) : ?>
            <li><?php echo wp_kses_post($listItem); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if (!empty($secBottomLine)) : ?>
        <?php echo wp_kses_post($secBottomLine); ?>
      <?php endif; ?>

      <?php if (!empty($secBtn)) : ?>
        <div class="btn_wrapper">
          <a href="<?php echo esc_url($secBtn['url']); ?>" target="<?php echo esc_attr($secBtn['target'] ? $secBtn['target'] : '_self'); ?>" class="btn">
            <?php echo esc_html($secBtn['title']); ?>
            <img
              src="<?php echo esc_url($buttonArrowUrl); ?>"
              height="<?php echo esc_attr($buttonArrowHeight); ?>"
              width="<?php echo esc_attr($buttonArrowWidth); ?>"
              alt="button arrow">
          </a>
        </div>
      <?php endif; ?>

    </div>
  </section>
<?php endif; ?>