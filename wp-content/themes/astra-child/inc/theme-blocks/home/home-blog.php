<?php
$infoTitle = get_field('info_title_scbg');
$infoImg = get_field('info_global_icon', 'option');
$sectionTitle = get_field('title_scbg');
$sectionDescription = get_field('description_scbg');
$sectionBgImg = get_field('section_image_scbg');


if(!empty($infoTitle) || !empty($infoImg) || !empty($sectionTitle) || !empty($sectionDescription) || !empty($sectionBgImg)): ?>
    <section class="future-section"
        style=' background: url("<?php echo $sectionBgImg['url']; ?>") no-repeat center/cover;'>
        <div class="container text-center">
            <div class="icon-text">
                <img src="<?php echo $infoImg['url']; ?>" alt="<?php echo $infoImg['alt']; ?>" height="<?php echo $infoImg['height']; ?>" width="<?php echo $infoImg['width']; ?>">
                <span><?php echo $infoTitle; ?></span>
            </div>

            <?php if($sectionTitle): ?>
                <h2><?php echo $sectionTitle; ?></h2>
            <?php endif; ?>

            <?php if($sectionDescription): ?>
                <div class="content">
                    <?php echo $sectionDescription; ?>
                </div>
            <?php endif; ?>

        </div>

    </section>
<?php endif; ?>