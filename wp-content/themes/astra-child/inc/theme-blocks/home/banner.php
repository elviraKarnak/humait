<?php

$homeBannerTitle = get_field('title_hb_bl');
$homeBannerDescription = get_field('description_hb_bl_1');
$homeBannerDescription_2 = get_field('description_hb_bl_2');
$homeBannerRightBtn = get_field('button_right_hb_bl');
$homeBannerLeftBtn = get_field('button_left_hb_bl');
$homeBannerBookImg = get_field('book_image_hb_bl');
$homeBannerCoverImg = get_field('background_image_hb_bl');

$homeBannerCoverImgUrl = !empty($homeBannerCoverImg['url']) ? $homeBannerCoverImg['url'] : get_stylesheet_directory_uri() . '/assets/images/hero-section-bg.webp';

$buttonArrow = get_field('button_arrow_opl', 'option');
$buttonArrowUrl = $buttonArrow ? $buttonArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/button-arrow.svg';

$buttonArrowHeight = $buttonArrow ? $buttonArrow['height'] : '11';
$buttonArrowWidth = $buttonArrow ? $buttonArrow['width'] : '11';

$topDescription = get_field('top_description_hb_bl');


?>

<?php if (!empty($homeBannerTitle) || !empty($homeBannerDescription) || !empty($homeBannerDescription_2) || !empty($homeBannerRightBtn) || !empty($homeBannerLeftBtn) || !empty($homeBannerBookImg) || !empty($homeBannerCoverImgUrl)): ?>
    <section class="hero-section" style='background: url("<?php echo $homeBannerCoverImgUrl; ?>") no-repeat center/cover;'>
        <div class="container">
            <?php if (!empty($topDescription)): ?>
                <div class="top-sc">
                    <?php echo $topDescription; ?>
                </div>
            <?php endif; ?>
            
            <div class="row align-items-center hero-content">

                <!-- LEFT -->
                <div class="col-lg-7 text-center">
                    <?php if (!empty($homeBannerTitle)): ?>
                        <h1><?php echo $homeBannerTitle; ?></h1>
                    <?php endif; ?>
                    <?php if (!empty($homeBannerDescription)): ?>
                        <div class="grad-border">
                            <p><?php echo $homeBannerDescription; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($homeBannerDescription_2)): ?>
                        <p><?php echo $homeBannerDescription_2; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($homeBannerRightBtn) || !empty($homeBannerLeftBtn)): ?>
                        <div class="btns d-flex justify-content-center align-items-center flex-column flex-md-row gap-3">
                            <?php if (!empty($homeBannerRightBtn)): ?>
                                <div class="btn_wrapper btn_wrapper2">
                                    <a href="<?php echo $homeBannerRightBtn['url']; ?>"
                                        target='<?php echo $homeBannerRightBtn['target'] ? $homeBannerRightBtn['target'] : '_self'; ?>'
                                        class="btn btn2">
                                        <?php echo $homeBannerRightBtn['title']; ?>
                                        <img src="<?php echo $buttonArrowUrl; ?>" height="<?php echo $buttonArrowHeight; ?>"
                                            width="<?php echo $buttonArrowWidth; ?>" alt="button arrow">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($homeBannerLeftBtn)): ?>
                                <div class="btn_wrapper">
                                    <a href="<?php echo $homeBannerLeftBtn['url']; ?>"
                                        target='<?php echo $homeBannerLeftBtn['target'] ? $homeBannerLeftBtn['target'] : '_self'; ?>'
                                        class="btn">
                                        <?php echo $homeBannerLeftBtn['title']; ?>
                                        <img src="<?php echo $buttonArrowUrl; ?>" height="<?php echo $buttonArrowHeight; ?>"
                                            width="<?php echo $buttonArrowWidth; ?>" alt="button arrow">
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
                </div>
                <!-- RIGHT -->
                <?php if (!empty($homeBannerBookImg)): ?>
                    <div class="col-lg-5 text-lg-end text-center books">
                        <img src="<?php echo $homeBannerBookImg['url']; ?>" alt="<?php echo $homeBannerBookImg['alt']; ?>"
                            height="<?php echo $homeBannerBookImg['height']; ?>"
                            width="<?php echo $homeBannerBookImg['width']; ?>">
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>