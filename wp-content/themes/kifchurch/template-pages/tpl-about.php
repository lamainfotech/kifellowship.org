<?php
/* Template Name: About Us */
get_header();

$fs_mission = get_field('lit_about_fs_mission_statement');

if(!empty($fs_mission)) { ?>
    <section class="section pt-xl-5 pt-lg-4 pt-md-3 pt-2 pb-lg-2 pb-1">
        <div class="container">
            <div class="about-desc text-center block-width-60 mx-auto">
                <?php echo wpautop($fs_mission); ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
$ecg_title = get_field('lit_home_ecg_title');
$ecg_desc = get_field('lit_home_ecg_desc');
$ecg_first_card = get_field('lit_home_ecg_first_card');
$ecg_second_card = get_field('lit_home_ecg_second_card');
$ecg_third_card = get_field('lit_home_ecg_third_card');
$ecg_fourth_card = get_field('lit_home_ecg_fourth_card');

if ($ecg_title || $ecg_desc || $ecg_first_card || $ecg_second_card || $ecg_third_card) { ?>
    <section class="experience bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <header class="block-title text-center block-width-80 mx-auto mb-lg-4 mb-md-3 mb-2">
                <?php if (!empty($ecg_title)) { ?>
                    <h2><?php echo $ecg_title; ?></h2>
                <?php } ?>

                <?php
                if (!empty($ecg_desc)) {
                    echo wpautop($ecg_desc);
                }
                ?>
            </header>
            <div class="row justify-content-center gutter-24">
                <?php if (!empty($ecg_first_card)) { ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="card-overlay bg-cover dark-overlay">
                            <img src="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['url']; ?>" width="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['width']; ?>" height="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['alt']; ?>">

                            <div class="card-overlay__content text-center">
                                <h3 class="h5"><?php echo $ecg_first_card['lit_home_ecg_fc_title']; ?></h3>                              
                            </div>
                            <div class="card-overlay__back text-center">
                                <h3 class="h5"><?php echo $ecg_first_card['lit_home_ecg_fc_title']; ?></h3>
                                <div class="btn-wrap">
                                    <?php if(!empty($ecg_first_card['lit_home_ecg_fc_sh_text'])) {
                                        echo wpautop($ecg_first_card['lit_home_ecg_fc_sh_text']);
                                    } ?>
                                    <a href="<?php echo $ecg_first_card['lit_home_ecg_fc_link']; ?>" class="btn-small">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($ecg_second_card)) { ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="card-overlay bg-cover dark-overlay">
                            <img src="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['url']; ?>" width="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['width']; ?>" height="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['alt']; ?>">
                            <div class="card-overlay__content text-center">
                                <h3 class="h5"><?php echo $ecg_second_card['lit_home_ecg_sc_title']; ?></h3>
                            </div>
                            <div class="card-overlay__back text-center">
                                <h3 class="h5"><?php echo $ecg_second_card['lit_home_ecg_sc_title']; ?></h3>
                                <div class="btn-wrap">
                                    <?php if(!empty($ecg_second_card['lit_home_ecg_sc_sh_text'])) {
                                        echo wpautop($ecg_second_card['lit_home_ecg_sc_sh_text']);
                                    } ?>
                                    <a href="<?php echo $ecg_second_card['lit_home_ecg_sc_link']; ?>" class="btn-small">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($ecg_third_card)) { ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="card-overlay bg-cover dark-overlay">
                            <img src="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['url']; ?>" width="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['width']; ?>" height="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['alt']; ?>">
                            <div class="card-overlay__content text-center">
                                <h3 class="h5"><?php echo $ecg_third_card['lit_home_ecg_tc_title']; ?></h3>
                            </div>
                            <div class="card-overlay__back text-center">
                                <h3 class="h5"><?php echo $ecg_third_card['lit_home_ecg_tc_title']; ?></h3>
                                <div class="btn-wrap">
                                    <?php if(!empty($ecg_third_card['lit_home_ecg_tc_sh_text'])) {
                                        echo wpautop($ecg_third_card['lit_home_ecg_tc_sh_text']);
                                    } ?>
                                    <a href="<?php echo $ecg_third_card['lit_home_ecg_tc_link']; ?>" class="btn-small">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (!empty($ecg_fourth_card)) { ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="card-overlay bg-cover dark-overlay">
                            <img src="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['url']; ?>" width="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['width']; ?>" height="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['alt']; ?>">
                            <div class="card-overlay__content text-center">
                                <h3 class="h5"><?php echo $ecg_fourth_card['lit_home_ecg_foc_title']; ?></h3>
                            </div>
                            <div class="card-overlay__back text-center">
                                <h3 class="h5"><?php echo $ecg_fourth_card['lit_home_ecg_foc_title']; ?></h3>
                                <div class="btn-wrap">
                                    <?php if(!empty($ecg_fourth_card['lit_home_ecg_foc_sh_text'])) {
                                        echo wpautop($ecg_fourth_card['lit_home_ecg_foc_sh_text']);
                                    } ?>
                                    <a href="<?php echo $ecg_fourth_card['lit_home_ecg_foc_link']; ?>" class="btn-small">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- /.experience -->
<?php } ?>

<?php
$fs_subpages = get_field('lit_about_fs__sub_pages');
?>
<section class="section pt-xl-3 pt-lg-2 pt-1 pb-xl-5 pb-lg-4 pb-md-3 pb-2">
    <div class="container">
        <div class="row justify-content-center gutter-24">
            <?php if (!empty($ecg_first_card)) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                    <div class="card-overlay bg-cover dark-overlay">
                        <img src="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['url']; ?>" width="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['width']; ?>" height="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_first_card['lit_home_ecg_fc_image']['alt']; ?>">

                        <div class="card-overlay__content text-center">
                            <h3 class="h5"><?php echo $ecg_first_card['lit_home_ecg_fc_title']; ?></h3>                              
                        </div>
                        <div class="card-overlay__back text-center">
                            <h3 class="h5"><?php echo $ecg_first_card['lit_home_ecg_fc_title']; ?></h3>
                            <div class="btn-wrap">
                                <?php if(!empty($ecg_first_card['lit_home_ecg_fc_sh_text'])) {
                                    echo wpautop($ecg_first_card['lit_home_ecg_fc_sh_text']);
                                } ?>
                                <a href="<?php echo $ecg_first_card['lit_home_ecg_fc_link']; ?>" class="btn-small">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (!empty($ecg_second_card)) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                    <div class="card-overlay bg-cover dark-overlay">
                        <img src="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['url']; ?>" width="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['width']; ?>" height="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_second_card['lit_home_ecg_sc_image']['alt']; ?>">
                        <div class="card-overlay__content text-center">
                            <h3 class="h5"><?php echo $ecg_second_card['lit_home_ecg_sc_title']; ?></h3>
                        </div>
                        <div class="card-overlay__back text-center">
                            <h3 class="h5"><?php echo $ecg_second_card['lit_home_ecg_sc_title']; ?></h3>
                            <div class="btn-wrap">
                                <?php if(!empty($ecg_second_card['lit_home_ecg_sc_sh_text'])) {
                                    echo wpautop($ecg_second_card['lit_home_ecg_sc_sh_text']);
                                } ?>
                                <a href="<?php echo $ecg_second_card['lit_home_ecg_sc_link']; ?>" class="btn-small">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (!empty($ecg_third_card)) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                    <div class="card-overlay bg-cover dark-overlay">
                        <img src="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['url']; ?>" width="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['width']; ?>" height="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_third_card['lit_home_ecg_tc_image']['alt']; ?>">
                        <div class="card-overlay__content text-center">
                            <h3 class="h5"><?php echo $ecg_third_card['lit_home_ecg_tc_title']; ?></h3>
                        </div>
                        <div class="card-overlay__back text-center">
                            <h3 class="h5"><?php echo $ecg_third_card['lit_home_ecg_tc_title']; ?></h3>
                            <div class="btn-wrap">
                                <?php if(!empty($ecg_third_card['lit_home_ecg_tc_sh_text'])) {
                                    echo wpautop($ecg_third_card['lit_home_ecg_tc_sh_text']);
                                } ?>
                                <a href="<?php echo $ecg_third_card['lit_home_ecg_tc_link']; ?>" class="btn-small">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($ecg_fourth_card)) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                    <div class="card-overlay bg-cover dark-overlay">
                        <img src="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['url']; ?>" width="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['width']; ?>" height="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['height']; ?>" loading="lazy" alt="<?php echo $ecg_fourth_card['lit_home_ecg_foc_image']['alt']; ?>">
                        <div class="card-overlay__content text-center">
                            <h3 class="h5"><?php echo $ecg_fourth_card['lit_home_ecg_foc_title']; ?></h3>
                        </div>
                        <div class="card-overlay__back text-center">
                            <h3 class="h5"><?php echo $ecg_fourth_card['lit_home_ecg_foc_title']; ?></h3>
                            <div class="btn-wrap">
                                <?php if(!empty($ecg_fourth_card['lit_home_ecg_foc_sh_text'])) {
                                    echo wpautop($ecg_fourth_card['lit_home_ecg_foc_sh_text']);
                                } ?>
                                <a href="<?php echo $ecg_fourth_card['lit_home_ecg_foc_link']; ?>" class="btn-small">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center gutter-24">
            <?php if(!empty($fs_subpages['lit_about_fs_sp_first_card'])) { ?>
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon text-center">
                        <i class="icon-instagram"></i>
                        <h4><?php echo $fs_subpages['lit_about_fs_sp_first_card']['title']; ?></h4>
                        <a href="<?php echo $fs_subpages['lit_about_fs_sp_first_card']['url']; ?>" class="stretched-link"></a>
                    </div>
                </div>
            <?php } ?>

            <?php if(!empty($fs_subpages['lit_about_fs_sp_second_card'])) { ?>
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon text-center">
                        <i class="icon-instagram"></i>
                        <h4><?php echo $fs_subpages['lit_about_fs_sp_second_card']['title']; ?></h4>
                        <a href="<?php echo $fs_subpages['lit_about_fs_sp_first_card']['url']; ?>" class="stretched-link"></a>
                    </div>
                </div>
            <?php } ?>

            <?php if(!empty($fs_subpages['lit_about_fs_sp_third_card'])) { ?>
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon text-center">
                        <i class="icon-instagram"></i>
                        <h4><?php echo $fs_subpages['lit_about_fs_sp_third_card']['title']; ?></h4>
                        <a href="<?php echo $fs_subpages['lit_about_fs_sp_first_card']['url']; ?>" class="stretched-link"></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<Section class="about">
    <?php
    $ss_images = get_field('lit_about_ss_images');
    $ss_title = get_field('lit_about_ss_title');
    $ss_desc = get_field('lit_about_ss_description');

    if($ss_images || $ss_title || $ss_desc) { ?>
        <div class="about-wrap bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 mb-lg-0 mb-2">
                        <div class="media-offset media-offset--btmLeft">
                            <?php if(!empty($ss_images['lit_about_ss_images_first_image'])) { ?>
                                <picture class="media-offset__under">
                                    <?php echo wp_get_attachment_image($ss_images['lit_about_ss_images_first_image'], 'full'); ?>
                                </picture>
                            <?php } ?>

                            <?php if(!empty($ss_images['lit_about_ss_images_second_image'])) { ?>
                                <picture class="media-offset__over">
                                    <?php echo wp_get_attachment_image($ss_images['lit_about_ss_images_second_image'], 'full'); ?>
                                </picture>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <?php if(!empty($ss_title)) { ?>
                            <header class="block-title">
                                <h2><?php echo $ss_title; ?></h2>
                            </header>
                        <?php } ?>

                        <?php if(!empty($ss_desc)) { ?>
                            <div class="about-content">
                                <?php echo wpautop($ss_desc); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- <div class="about-wrap py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="row justify-content-between flex-row-reverse">
                <div class="col-lg-5 mb-lg-0 mb-2">
                    <div class="media-offset media-offset--btmRight">
                        <picture class="media-offset__under">
                            <source srcset="<?php echo site_url(); ?>/media/speaker.webp" type="image/webp">
                            <source srcset="<?php echo site_url(); ?>/media/speaker.jpg" type="image/jpg">
                            <img src="<?php echo site_url(); ?>/media/speaker.jpg" width="355" height="417" loading="lazzy" alt="Video thumblain">
                        </picture>
                        <picture class="media-offset__over">
                            <source srcset="<?php echo site_url(); ?>/media/hands.webp" type="image/webp">
                            <source srcset="<?php echo site_url(); ?>/media/hands.jpg" type="image/jpg">
                            <img src="<?php echo site_url(); ?>/media/hands.jpg" width="437" height="506" loading="lazzy" alt="Video thumblain">
                        </picture>

                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <header class="block-title">
                        <h2>Kif History</h2>
                    </header>
                    <div class="about-content">
                        <p>For every way that someone can be lost, we want to provide a practical way for them to be found in the very place that they have ended up. For every way that someone can be lost, we want to provide a practical way for them to be found in the very place that they have ended up.
                        </p>
                        <p>For every way that someone can be lost, we want to provide a practical way for them to be found in the very place that they have ended up.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</Section>

<?php
get_footer();
