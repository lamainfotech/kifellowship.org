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
<?php }
$cards = get_field('lit_about_fs_cards'); ?>
<section class="section pt-xl-3 pt-lg-2 pt-1 pb-xl-5 pb-lg-4 pb-md-3 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($cards as $card) {
                $card_img = $card['lit_about_fs_card_image'];
                $card_title = $card['lit_about_fs_card_title'];
                $card_desc = $card['lit_about_fs_card_description'];
                $card_btn = $card['lit_about_fs_card_button'];
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                    <div class="card-overlay card-overlay--sm bg-cover dark-overlay">
                        <?php if(!empty($card_img)) {
                            echo wp_get_attachment_image($card_img, 'full');
                        } ?>

                        <?php if(!empty($card_title)) { ?>
                            <div class="card-overlay__content text-center">
                                <h3 class="h5"><?php echo $card_title; ?></h3>
                            </div>
                        <?php } ?>

                        <div class="card-overlay__back text-center">
                            <?php if(!empty($card_title)) { ?>
                                <h3 class="h5"><?php echo $card_title; ?></h3>
                            <?php } ?>
                            <?php if(!empty($card_desc)) { ?>
                                <p><?php echo $card_desc; ?></p>
                            <?php } ?>
                            <?php if(!empty($card_btn)) { ?>
                                <a href="<?php echo $card_btn['url']; ?>" class="btn-small"><?php echo $card_btn['title']; ?></a>
                            <?php } ?>
                        </div>
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
