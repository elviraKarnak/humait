<?php 
    $secInfoTitle = get_field('info_title_hm_ios_bl');
    $secInfoImg = get_field('info_image_hm_ios_bl');
    $secTitle = get_field('title_sec_hm_ios_bl');
    $secDescription = get_field('description_sec_hm_ios_bl');
    $secBtn = get_field('button_sec_hm_ios_bl');
    $secBgImg = get_field('section_image_hm_ios_bl');

    $buttonArrow = get_field('button_arrow_opl', 'option');
    $buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';

    $buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
    $buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';

?>


<?php if(!empty($secInfoTitle) || !empty($secInfoImg) || !empty($secTitle) || !empty($secDescription) || !empty($secBtn) || !empty($secBgImg) ): ?>
    <section class="truth-section"
    style=' background: url("<?php echo $secBgImg['url']; ?>") no-repeat center/cover;'>
    <div class="container">
        <div class="row align-items-center justify-content-between">
        <div class="col-lg-4 text-center ">
            <!-- LEFT -->
            <div class="left">
            <?php if($secInfoTitle || $secInfoImg): ?>
                <div class="icon-text">
                    <?php if($secInfoImg): ?>
                        <img src="<?php echo $secInfoImg['url']; ?>" alt="<?php echo $secInfoImg['alt']; ?>" height=<?php echo $secInfoImg['height']; ?> width=<?php echo $secInfoImg['width']; ?>>
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


            <!-- BUTTON -->
      
                 <?php if(!empty($secBtn)): ?>
                    <div class="btn_wrapper btn_wrapper2">
                        <a href="<?php echo $secBtn['url']; ?>" target='<?php echo $secBtn['target'] ? $secBtn['target'] : '_self'; ?>' class="btn btn2">
                            <?php echo $secBtn['title']; ?> 
                            <img
                                    src="<?php echo $buttonArrowUrl; ?>"
                                    height="<?php echo $buttonArrowHeight; ?>"
                                    width="<?php echo $buttonArrowWidth; ?>"
                                    alt="button arrow" >
                        </a>
                    </div>
                    <?php endif; ?>
            </div>
        </div>

        <?php if(have_rows('list_items_hm_ios_bl')): ?>
            <!-- RIGHT -->
            <div class="col-lg-4">

                <div class="right">

                <?php $i=1; 
                    while(have_rows('list_items_hm_ios_bl')): the_row(); 
                    $itemTitle = get_sub_field('title_sin_hm_ios_bl');
                    $itemDescription = get_sub_field('description_sin_hm_ios_bl');
                ?>

                <div class="content">
                    <div class="number">0<?php echo $i; ?></div>
                    <div class="con-text">
                     <?php if($itemTitle): ?>
                        <h3><?php echo $itemTitle; ?></h3>
                     <?php endif; ?>
                     <?php if($itemDescription): ?>
                        <p><?php echo $itemDescription; ?></p>
                     <?php endif; ?>
                    </div>
                </div>
                <?php $i++; endwhile; ?>

     

                </div>

            </div>
        <?php endif; ?>

        </div>
    </div>
    </section>
<?php endif; ?>