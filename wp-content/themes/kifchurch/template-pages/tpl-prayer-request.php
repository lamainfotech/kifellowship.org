<?php
/* Template Name: Prayer Request */
get_header();

$heading = get_field('lit_pr_heading');
$subtitle = get_field('lit_pr_sub_title');
$form_id = get_field('lit_pr_form_id'); ?>
<section class="section py-lg-4 py-sm-3 py-2 mt-xl-6 mt-lg-5 mt-4">
    <div class="container form-holder">
        <header class="block-title block-width-85 mx-auto text-center mb-sm-2 mb-1">
            <?php if(!empty($heading)) { ?>
                <h2><?php echo $heading; ?></h2>
            <?php } ?>
            <?php if(!empty($subtitle)) { ?>
                <p><?php echo $subtitle; ?></p>
            <?php } ?>
        </header>
        <div class="contact-form request-form">
            <?php if(!empty($form_id)) {
                echo do_shortcode('[wpforms id="' . $form_id . '" title="false"]');
            } ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>