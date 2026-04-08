<?php 
    $secInfoTitle = get_field('info_title_humit_arc');
    $secInfoImg = get_field('info_global_icon');
    $secTitle = get_field('title_humit_arc');
    $secDescription = get_field('description_humit_arc');
    $secBtn = get_field('button_humit_arc');

    $secImg = get_field('section_image_humit_arc');
    $secBgImg = get_field('section_background_humit_arc');

    $buttonArrow = get_field('button_arrow_opl', 'option');
    $buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';

    $buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
    $buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';
?>


<?php if(!empty($secInfoTitle) || !empty($secInfoImg) || !empty($secTitle) || !empty($secDescription) || !empty($secBtn) || !empty($secBgImg) ): ?>
    <section class="architecture-section"
    style='background: url("<?php echo $secBgImg['url']; ?>") no-repeat center/cover;'>
    <div class="container">
        <div class="row align-items-center content-gap">

        <?php if($secImg){ ?>
            <!-- LEFT IMAGE -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="image-box">
                <img src="<?php echo $secImg['url']; ?>"
                    alt="<?php echo $secImg['alt']; ?>" height="<?php echo $secImg['height']; ?>" width="<?php echo $secImg['width']; ?>">
                </div>
            </div>
        <?php } ?>
        <?php if(!empty($secInfoTitle) || !empty($secInfoImg) || !empty($secTitle) || !empty($secDescription) || !empty($secBtn)): ?>
        <!-- RIGHT CONTENT -->
        <div class="col-lg-5">
            <?php if($secInfoTitle || $secInfoImg): ?>
                <div class="icon-text">
                <?php if($secInfoImg): ?>
                    <img src="<?php echo $secInfoImg['url']; ?>"
                    alt="<?php echo $secInfoImg['alt']; ?>" height="<?php echo $secInfoImg['height']; ?>" width="<?php echo $secInfoImg['width']; ?>">
                <?php endif; ?>
                    <?php if($secInfoTitle): ?>
                        <span><?php echo $secInfoTitle; ?></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($secTitle): ?>
                <h2><?php echo $secTitle; ?></h2>
            <?php endif; ?>
            <?php if($secDescription): ?>
                <p><?php echo $secDescription; ?></p>
            <?php endif; ?>

         <?php if(!empty($secBtn)): ?>
                    <div class="btn_wrapper ">
                        <a href="<?php echo $secBtn['url']; ?>" target='<?php echo $secBtn['target'] ? $secBtn['target'] : '_self'; ?>' class="btn">
                            <?php echo $secBtn['title']; ?> 
                            <img
                                    src="<?php echo $buttonArrowUrl; ?>"
                                    height="<?php echo $buttonArrowHeight; ?>"
                                    width="<?php echo $buttonArrowWidth; ?>"
                                    alt="button arrow" >
                        </a>
                    </div>
                    <?php endif; ?>
       
              <?php if(have_rows('icon_box')): ?>
                
            <!-- ICONS -->
            <div class="icons">

                <?php while(have_rows('icon_box')): the_row(); 
                    $iconImg = get_sub_field('image_ic_humit_arc');
                    $iconText = get_sub_field('title_ic_humit_arc');
                ?>
                    <div class="icon-box d-flex align-items-center gap-2">
                        <?php if($iconImg): ?>
                            <img src="<?php echo $iconImg['url']; ?>"
                            alt="<?php echo $iconImg['alt']; ?>" height="<?php echo $iconImg['height']; ?>" width="<?php echo $iconImg['width']; ?>">
                        <?php endif; ?>
                        <?php if($iconText): ?>
                            <p><?php echo $iconText; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        </div>
    </div>
    </section>
<?php endif; ?>