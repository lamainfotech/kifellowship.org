<?php
/* Template Name: Plan A Visit */
get_header();
$left_content = get_field('lit_pav_fs_left_column');
$right_content = get_field('lit_pav_fs_right_column'); ?>
    <section class="two-col text-left py-xxl-5 py-lg-4 py-sm-3 py-2">
        <div class="container">
            <div class="row justify-content-lg-between">
                <?php if(!empty($left_content)) { ?>
                    <div class="col-lg-6 col-xl-7 pr-lg-2 pr-xl-4 pr-xxl-5">
                        <div class="block-title">
                            <?php echo wpautop($left_content); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if(!empty($right_content)) { ?>
                    <div class="col-lg-6 col-xl-4 pl-xxl-2">
                        <div class="block-title">
                            <?php echo wpautop($right_content); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php 
$notice_text = get_field('lit_pav_ss_parking_notice');
if(!empty($notice_text)) { ?>
    <section class="info-block bg-primary py-1">
        <div class="container">
            <div class="info-block__desc">
                <div class="icon-group mb-1 mb-lg-0">
                    <i class="icon-doc"></i>
                    <i class="icon-doc"></i>
                </div>
                <div class="info-block__content text-center">
                    <p><?php echo $notice_text; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php }
$heading = get_field('lit_pav_tr_heading');
$cards = get_field('lit_pav_tr_cards'); ?>
    <section class="section bg-gray py-xl-4 py-lg-3 pt-sm-2 pb-sm-1 pt-2 pb-1">
        <div class="container">
            <?php if(!empty($heading)) { ?>
                <div class="block-title text-center mb-1 mb-sm-2 mb-lg-3">
                    <h3><?php echo $heading; ?></h3>
                </div>
            <?php } ?>
            <div class="row justify-content-center">
                <?php foreach($cards as $card) {
                    $card_img = $card['lit_pav_tr_card_image'];
                    $card_title = $card['lit_pav_tr_card_title'];
                    $card_desc = $card['lit_pav_tr_card_description'];
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
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php
get_footer();
?>