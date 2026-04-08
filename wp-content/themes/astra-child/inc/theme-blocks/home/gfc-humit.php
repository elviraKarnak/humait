<?php 
    $leftTitle = get_field('left_title_gfc_hummit');
    $leftDescription = get_field('left_description_gfc_hummit');

    $centerTitle = get_field('center_title_gfc_hummit');
    $centerDescription = get_field('center_description_gfc_hummit');

    $rightTitle = get_field('right_title_gfc_hummit');
    $rightDescription = get_field('right_description_gfc_hummit');

    $secImage = get_field('section_image_gfc_hummit');

?>


<?php if(!empty($leftTitle) || !empty($leftDescription) || !empty($centerTitle) || !empty($centerDescription) || !empty($rightTitle) || !empty($rightDescription) || !empty($secImage) ): ?>
    <section class="split-hero"
    style='background: url("<?php echo $secImage['url']; ?>") no-repeat center/cover;'>
    <div class="container">

        <!-- TOP LEFT / RIGHT -->
        <div class="row align-items-start justify-content-between top">

        <?php if(!empty($leftTitle) || !empty($leftDescription)): ?>
        <!-- LEFT -->
        <div class="col-lg-3 col-6 text-center">
            <?php if($leftTitle): ?>
                <h2><?php echo $leftTitle; ?></h2>
            <?php endif; ?>
            <?php if($leftDescription): ?>
                <p><?php echo $leftDescription; ?></p>  
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if(!empty($rightTitle) || !empty($rightDescription)): ?>
        <!-- RIGHT -->
        <div class="col-lg-4 col-6 text-center">
            <?php if($rightTitle): ?>
                <h2><?php echo $rightTitle; ?></h2>
            <?php endif; ?>
            <?php if($rightDescription): ?>
                <p><?php echo $rightDescription; ?></p>
            <?php endif; ?> 
        </div>
        <?php endif; ?>

        </div>

        <?php if(!empty($centerTitle) || !empty($centerDescription)): ?>
        <!-- CENTER CONTENT -->
        <div class="row justify-content-center text-center center-content">
            <div class="col-lg-8">
                <?php if($centerTitle): ?>
                    <h3><?php echo $centerTitle; ?></h3>
                <?php endif; ?>
                <?php if($centerDescription): ?>
                    <p><?php echo $centerDescription; ?></p>  
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    </section>
<?php endif; ?>