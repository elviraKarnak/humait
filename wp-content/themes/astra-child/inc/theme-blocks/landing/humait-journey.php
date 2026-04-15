<?php

$lplwhTitle = get_field('title_lwh');
$lplwhDescription = get_field('description_lwh');
$lplwhListTitle = get_field('list_title_lwh');
$lplwhListDescription = get_field('list_description_lwh');
$lplwhListItems = get_field('list_items_lwh');

$lpsecImg = get_field('section_image_lwh');
$lpBannerCoverImg = get_field('section_cover_image_lwh');

$lpBannerCoverImgUrl = !empty($lpBannerCoverImg['url']) ? $lpBannerCoverImg['url'] : get_stylesheet_directory_uri() . 'assets/images/humai-section-bg.webp'; 
  
  ?>

  <?php if (!empty($lplwhTitle) || !empty($lplwhDescription) || !empty($lplwhListTitle) || !empty($lplwhListDescription) || !empty($lplwhListItems) || !empty($lpsecImg) || !empty($lpBannerCoverImgUrl)): ?>
  <section class="truth-section humai-section" style="
        background: url('<?php echo $lpBannerCoverImgUrl; ?>')
          no-repeat center/cover;
      ">
    <div class="container">

    <?php if (!empty($lplwhTitle) || !empty($lplwhDescription)): ?>
      <!-- Top Heading -->
      <div class="row text-center">
        <div class="col-lg-10 mx-auto">
          <div class="top-bar">
            <?php if (!empty($lplwhTitle)): ?>
              <h2><?php echo esc_html($lplwhTitle); ?></h2> 
            <?php endif; ?>
            <?php if (!empty($lplwhDescription)): ?>
              <p><?php echo esc_html($lplwhDescription); ?></p> 
            <?php endif; ?>
          </div>
        </div>
      </div>
        <?php endif; ?>

      <!-- Content Row -->
      <div class="row align-items-center justify-content-between mt-5">

      <?php if (!empty($lpsecImg)): ?>
        <!-- Image -->
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div class="humai-img">
            <img src="<?php echo esc_url($lpsecImg['url']); ?>" alt="<?php echo esc_attr($lpsecImg['alt']); ?>" height="<?php echo esc_attr($lpsecImg['height']); ?>" width="<?php echo esc_attr($lpsecImg['width']); ?>">
          </div>
        </div>
        <?php endif; ?>

        <!-- Text Content -->
        <div class="col-lg-6">
          <div class="humai-content">
            <?php if (!empty($lplwhListTitle)): ?>
              <h3><?php echo esc_html($lplwhListTitle); ?></h3>
            <?php endif; ?>
            <?php if (!empty($lplwhListDescription)): ?>
              <p><?php echo esc_html($lplwhListDescription); ?></p>
                
            <?php endif; ?>
   
   
                <?php if (!empty($lplwhListItems)): ?>
                             <div class="list">
                                <?php echo $lplwhListItems; ?>
         
            </div>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php endif; ?>