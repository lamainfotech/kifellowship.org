<?php

/**
 * @package kifchurch
 */

get_header();
?>

<?php
$wwa_title = get_field('lit_home_wwa_title');
$wwa_desc = get_field('lit_home_wwa_description');
$wwa_btn = get_field('lit_home_wwa_button');
$wwa_img = get_field('lit_home_wwa_image');
$wwa_icon = get_field('lit_home_wwa_icon');
$wwa_video = get_field('lit_home_wwa_video');

if ($wwa_title || $wwa_desc || $wwa_btn || $wwa_img || $wwa_icon || $wwa_video) { ?>
    <section class="about py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-lg-0 mb-2">
                    <div class="card-video ">
                        <?php
                        if (!empty($wwa_img)) {
                        ?>
                            <picture class="card-video__media light-overlay">
                                <img src="<?php echo $wwa_img['url']; ?>" width="<?php echo $wwa_img['width']; ?>" height="<?php echo $wwa_img['height']; ?>" loading="lazy" alt="<?php echo $wwa_img['alt']; ?>">
                            </picture>
                        <?php } ?>

                        <?php if (!empty($wwa_icon) && !empty($wwa_video)) { ?>
                            <div class="btn-wrap">
                                <a href="<?php echo $wwa_video; ?>" data-fancybox><i class="icon-Play-Icon"><?php //echo $wwa_icon['value']; 
                                                                                                            ?></i></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content text-lg-left text-center">
                        <?php if (!empty($wwa_title)) { ?>
                            <header class="block-title mb-lg-2 mb-1">
                                <h2><?php echo $wwa_title; ?></h2>
                            </header>
                        <?php } ?>

                        <?php
                        if (!empty($wwa_desc)) {
                            echo wpautop($wwa_desc);
                        }
                        ?>

                        <?php if (!empty($wwa_btn)) { ?>
                            <div class="btn-wrap mt-lg-4 mt-md-3 mt-2">
                                <a href="<?php echo $wwa_btn['url']; ?>" class="btn btn-primary"><?php echo $wwa_btn['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.about -->
<?php } ?>

<?php
$ecg_title = get_field('lit_home_ecg_title');
$ecg_desc = get_field('lit_home_ecg_desc');
$ecg_cards = get_field('lit_home_ecg_cards');

if ($ecg_title || $ecg_desc || $ecg_cards) { ?>
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
            <div class="row justify-content-center">
                <?php foreach($ecg_cards as $card) {
                    $card_img = $card['lit_home_ecg_card_image'];
                    $card_title = $card['lit_home_ecg_card_title'];
                    $card_desc = $card['lit_home_ecg_card_description'];
                    $card_btn = $card['lit_home_ecg_card_button'];
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
                                    <?php if (!empty($ecg_first_card['lit_home_ecg_fc_sh_text'])) {
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
                                    <?php if (!empty($ecg_second_card['lit_home_ecg_sc_sh_text'])) {
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
                                    <?php if (!empty($ecg_third_card['lit_home_ecg_tc_sh_text'])) {
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
                                    <?php if (!empty($ecg_fourth_card['lit_home_ecg_foc_sh_text'])) {
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
$op_img = get_field('lit_home_op_image');
$op_title = get_field('lit_home_op_title');
$op_desc = get_field('lit_home_op_description');
$op_btn = get_field('lit_home_op_button');

if ($op_img || $op_title || $op_desc || $op_btn) { ?>
    <section class="pastor py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <?php if (!empty($op_img)) { ?>
                    <div class="col-lg-5 mb-lg-0 mb-2">
                        <picture class="pastor-media text-lg-left text-center">
                            <img src="<?php echo $op_img['url']; ?>" width="<?php echo $op_img['width']; ?>" height="<?php echo $op_img['height']; ?>" loading="lazy" alt="<?php echo $op_img['alt']; ?>">
                        </picture>
                    </div>
                <?php } ?>

                <div class="col-lg-6">
                    <div class="pastor-content text-lg-left text-center">
                        <?php if (!empty($op_title)) { ?>
                            <header class="block-title mb-lg-2 mb-1">
                                <h2><?php echo $op_title; ?></h2>
                            </header>
                        <?php }
                        if (!empty($op_desc)) {
                            echo wpautop($op_desc);
                        }
                        ?>

                        <?php if (!empty($op_btn)) { ?>
                            <div class="btn-wrap mt-lg-4 mt-md-3 mt-2">
                                <a href="<?php echo $op_btn['url']; ?>" class="btn btn-primary"><?php echo $op_btn['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.pastor -->
<?php } ?>

<?php
$es_title = get_field('lit_home_es_title');
$es_subtitle = get_field('lit_home_es_sub_title');
$es_events = new WP_Query(array(
    'post_type'     =>  'event',
    'post_status'   =>  'publish',
    'orderby'       =>  'meta_value',
    'meta_key'      =>  'lit_event_from_date',
    'order'         =>  'DESC',
    'posts_per_page' =>  4,
));
$es_btn = get_field('lit_home_es_button');

if ($es_title || $es_subtitle || $es_events || $es_btn) { ?>
    <section class="events section-event bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <header class="block-title text-center block-width-60 mx-auto mb-lg-4 mb-md-3 mb-2">
                <?php if (!empty($es_title)) { ?>
                    <h2><?php echo $es_title; ?></h2>
                <?php } ?>

                <?php if (!empty($es_subtitle)) { ?>
                    <p><?php echo $es_subtitle; ?></p>
                <?php } ?>
            </header>

            <?php if ($es_events->have_posts()) { ?>
                <div class="row justify-content-center">
                    <?php while ($es_events->have_posts()) {
                        $es_events->the_post();
                        $es_event_img = get_the_post_thumbnail();
                        $es_event_title = get_the_title();
                        $es_event_date = get_field('lit_event_from_date');
                        $es_event_location = get_field('lit_event_location');
                        $es_event_link = get_the_permalink();
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-event ">
                                <?php if (!empty($es_event_img)) { ?>
                                    <picture class="card-event__media">
                                        <?php echo $es_event_img; ?>
                                    </picture>
                                <?php } ?>

                                <div class="card-event__content">
                                    <?php if (!empty($es_event_title)) { ?>
                                        <h3 class="h5"><?php echo $es_event_title; ?></h3>
                                    <?php } ?>

                                    <?php if (!empty($es_event_date)) { ?>
                                        <span class="timing"><?php echo $es_event_date; ?></span>
                                    <?php } ?>

                                    <?php if (!empty($es_event_location)) { ?>
                                        <span class="location"><i class="icon-pin"></i><?php echo $es_event_location; ?></span>
                                    <?php } ?>
                                </div>
                                <a href="<?php echo $es_event_link; ?>" class="stretched-link"></a>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
            <?php }
            wp_reset_query(); ?>

            <?php if (!empty($es_btn)) { ?>
                <div class="btn-wrap text-center mt-lg-3 mt-2">
                    <a href="<?php echo $es_btn['url']; ?>" class="btn btn-primary"><?php echo $es_btn['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </section><!-- /.events -->
<?php } ?>

<?php
$fm_map = get_field('lit_home_fm_map');

if (!empty($fm_map)) { ?>
    <section class="section-map">
        <h2 class="d-none">Kathmandu International Fellowship</h2>
        <?php echo $fm_map; ?>
    </section><!-- /.map -->
<?php } ?>

<?php
get_footer();
