<?php

$secTitle = get_field('section_title_phbl');
$leftList = get_field('left_list_phbl');
$rightList = get_field('right_list_phbl');

$secNewDescription = get_field('section_decription_phbl');



$secEcosystem = get_field('title_ecosystem_phbl');

$secDescription = get_field('description_phbl');

$secImg = get_field('section_image_phbl');

$secImgCoverImgUrl = !empty($secImg['url']) ? $secImg['url'] : get_stylesheet_directory_uri() . '/assets/images/hero-section-bg.webp';

?>


<?php if (!empty($secTitle) || !empty($secNewDescription) || !empty($secDescription) || !empty($leftList) || !empty($rightList) || !empty($secEcosystem) || !empty($secImgCoverImgUrl)): ?>

    <section class="journey-section humai-ecosystem"
        style="background: url('<?php echo $secImgCoverImgUrl; ?>') no-repeat center/cover;">

        <div class="container">
            <!-- TOP: CORE PRINCIPLES -->
            <?php if (!empty($secTitle)): ?>
                <div class="text-center">
                    <h2><?php echo $secTitle; ?></h2>
                    <?php if (!empty($secNewDescription)): ?>
                        <p><?php echo $secNewDescription; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>



            <?php if (!empty($leftList) || !empty($rightList)): ?>

                <div class="row justify-content-center mt-4">

                    <?php if (!empty($leftList)): ?>
                        <div class="col-lg-6 col-md-4">
                            <div class="list">
                                <?php echo $leftList; ?>
                            </div>
                        </div>
                    <?php endif; ?>



                    <?php if (!empty($rightList)): ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="list">
                                <?php echo $rightList; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <?php if (!empty($secDescription) && !empty($secEcosystem)): ?>
                <!-- ECOSYSTEM -->
                <div class="text-center ecosystem-header">
                    <?php if ($secEcosystem): ?>
                        <h2><?php echo $secEcosystem; ?></h2>
                    <?php endif; ?>
                    <?php if ($secDescription): ?>
                        <p><?php echo $secDescription; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>


            <?php if (have_rows('ecosystem_phbl')): ?>

                <div class="row ecosystem-row ">

                    <?php $i = 1;

                    while (have_rows('ecosystem_phbl')):
                        the_row();

                        $ecoTitle = get_sub_field('title_eco_sin');
                        $ecoDescription = get_sub_field('description_eco_sin');
                        ?>

                        <div class="col-lg-5-custom col-md-6 col-12">
                            <div class="eco-item">
                                <span>0<?php echo $i; ?></span>
                                <div>
                                    <?php if ($ecoTitle): ?>
                                        <h5><?php echo $ecoTitle; ?></h5>
                                    <?php endif; ?>
                                    <?php if ($ecoDescription): ?>
                                        <p><?php echo $ecoDescription; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php $i++; endwhile; ?>

                </div>
            <?php endif; ?>

        </div>

    </section>
<?php endif; ?>


<div class="humait-sections">
    <section id="humait">
        <div class="card">
            <div class="orb">H</div>
            <h1>Humait</h1>
            <p>A new system for humanity where intelligence, balance, and future vision align.</p>
            <button class="btn">Explore</button>
        </div>
    </section>

    <section id="ttun">
        <div class="card">
            <div class="orb gold">T</div>
            <h1>Ttun</h1>
            <p>Connecting systems, people, and intelligence into one seamless flow.</p>
            <button class="btn gold">Discover</button>
        </div>
    </section>

    <section id="guun">
        <div class="card">
            <div class="orb">G</div>
            <h1>Guun</h1>
            <p>Tools designed for clarity, efficiency, and next-level productivity.</p>
            <button class="btn">Start Now</button>
        </div>
    </section>

    <section id="urcoin">
        <div class="card">
            <div class="orb gold">U</div>
            <h1>Urcoin</h1>
            <p>Redefining value through secure and scalable digital currency systems.</p>
            <button class="btn gold">View Platform</button>
        </div>
    </section>

    <section id="auzadi">
        <div class="card">
            <div class="orb">A</div>
            <h1>Auzadi</h1>
            <p>Freedom-driven innovation for a truly open and evolving digital world.</p>
            <button class="btn">Join Now</button>
        </div>
    </section>
</div>