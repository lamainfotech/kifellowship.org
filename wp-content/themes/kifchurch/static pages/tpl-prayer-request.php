<?php
/* Template Name: Static Prayer Request */
get_header();
?>

<section class="section py-lg-4 py-sm-3 py-2 mt-xl-6 mt-lg-5 mt-4">
    <div class="container form-holder">
        <header class="block-title block-width-85 mx-auto text-center mb-sm-2 mb-1">
            <h2><span>Send Your</span>Prayer Request</h2>
            <p>As a church, we are committed to seeing God work in our lives in very tangible ways. We know prayer is powerful.</p>
        </header>
        <div class="contact-form request-form">
            <?php {
                echo do_shortcode('[wpforms id="406' . $form_id . '" title="false"]');
            } ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>