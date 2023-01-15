<?php
/* Template Name: Contact Us */
get_header();
$address = get_field('lit_contact_page_address');
$phone = get_field('lit_contact_page_phone');
$email = get_field('lit_contact_page_email');

if ($address || $phone || $email) { ?>
    <section class="contact-cta py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="row justify-content-center gutter-24">
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon card-icon--alt text-center">
                        <div class="icon">
                            <i class="icon-pin"></i>
                        </div>
                        <?php if (!empty($address['lit_contact_page_address_info'])) { ?>
                            <div class="card-icon__cta mb-1">
                                <span><?php echo $address['lit_contact_page_address_info']; ?></span>
                            </div>
                        <?php } ?>

                        <?php if (!empty($address['lit_contact_page_address_button'])) { ?>
                            <div class="btn-wrap mt-auto">
                                <a href="<?php echo $address['lit_contact_page_address_button']['url']; ?>" class="btn btn-sm"><?php echo $address['lit_contact_page_address_button']['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon card-icon--alt text-center">
                        <div class="icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <?php if (!empty($phone['lit_contact_page_phone_number'])) { ?>
                            <div class="card-icon__cta mb-1">
                                <span><?php echo $phone['lit_contact_page_phone_number']; ?></span>
                            </div>
                        <?php } ?>

                        <?php if (!empty($phone['lit_contact_page_phone_button'])) { ?>
                            <div class="btn-wrap mt-auto">
                                <a href="<?php echo $phone['lit_contact_page_phone_button']['url']; ?>" class="btn btn-sm"><?php echo $phone['lit_contact_page_phone_button']['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-2">
                    <div class="card-icon card-icon--alt text-center">
                        <div class="icon">
                            <i class="icon-mesage"></i>
                        </div>

                        <?php if (!empty($email['lit_contact_page_email_address'])) { ?>
                            <div class="card-icon__cta mb-1">
                                <span><?php echo $email['lit_contact_page_email_address']; ?></span>
                            </div>
                        <?php } ?>

                        <?php if (!empty($email['lit_contact_page_email_button'])) { ?>
                            <div class="btn-wrap mt-auto">
                                <a href="<?php echo $email['lit_contact_page_email_button']['url']; ?>" class="btn btn-sm"><?php echo $email['lit_contact_page_email_button']['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php
$title = get_field('lit_contact_page_form_sec_title');
$form_id = get_field('lit_contact_page_form_id');

if ($title || $form_id) { ?>
    <section class="section py-2">
        <div class="form-holder">
            <?php if (!empty($title)) { ?>
                <header class="block-title text-center mb-lg-3 mb-2">
                    <h2><?php echo $title; ?></h2>
                </header>
            <?php } ?>
            <div class="contact-form px-1">
                <?php if (!empty($form_id)) {
                    echo do_shortcode('[wpforms id="' . $form_id . '" title="false"]');
                } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
get_footer();
