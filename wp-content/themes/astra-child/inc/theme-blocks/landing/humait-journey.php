<?php
  
  $secTitle = get_field('title_lphj');
  $secDescription = get_field('description_lphj');
  $secBackgroundImg = get_field('section_cover_image_lphj');

  $lpBannerCoverImgUrl = !empty($secBackgroundImg['url']) ? $secBackgroundImg['url'] : get_stylesheet_directory_uri() . '/assets/images/roadmap-section-bg.webp';
  
  ?>
    <?php if (!empty($secTitle) || !empty($secDescription) || !empty($secBackgroundImg)): ?>
  <section class="journey-section roadmap-section" style="
        background: url('<?php echo $lpBannerCoverImgUrl; ?>')
          no-repeat center/cover;
      ">
    <div class="container">

    <?php if (!empty($secTitle) || !empty($secDescription)): ?>
        <!-- Heading -->
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">
                <?php if (!empty($secTitle)): ?>
                    <h2><?php echo esc_html($secTitle); ?></h2>

                <?php endif; ?>
                <?php if (!empty($secDescription)): ?>
                    <p><?php echo esc_html($secDescription); ?></p>
                <?php endif; ?>


            </div>
        </div>
        <?php endif; ?>

      <?php if(have_rows('humit_journey_lphj')): ?>

      <!-- Timeline -->
      <div class="roadmap-wrapper ">

        <!-- Row 1 -->
        <div class="row g-5 justify-content-center roadmap-row">


        <?php while(have_rows('humit_journey_lphj')): the_row();
        
         $title = get_sub_field('title_stpj');
         $description = get_sub_field('description_stpj');
         $steps = get_sub_field('steps_stpj');
        
        ?>
          <div class="col-xl-3 col-md-6">
            <div class="roadmap-card">
              <?php if($steps): ?>
              <span><?php echo $steps; ?></span>
              <?php endif; ?>
              <?php if($title): ?>
                <h4><?php echo $title; ?></h4>
              <?php endif; ?>
              <?php if($description): ?>
                <p><?php echo $description; ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
    <?php endif; ?>