<?php
/* Template Name: Static Our Vision */
get_header();
?>
<section class="section-text pt-xl-5 pt-lg-4 pt-md-3 pt-2">
    <h2 class="d-none">Title</h2>
    <div class="container text-center block-width-65 mx-auto">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cupiditate assumenda voluptatem incidunt ducimus amet libero asperiores, placeat facilis eligendi illo fuga eaque cumque quibusdam eius error dolores exercitationem qui!</p>
    </div>
</section>
<section class="section text-center py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-60 mx-auto mb-lg-3 mb-2">
            <h2>Our Vision</h2>
        </header>
        <picture class="">
            <source srcset="<?php echo site_url(); ?>/media/vision.webp" type="image/webp">
            <source srcset="<?php echo site_url(); ?>/media/vision.jpg" type="image/jpg">
            <img src="<?php echo site_url(); ?>/media/vision.jpg" width="1080" height="627" loading="lazy" alt="Vision Img">
        </picture>
    </div>
</section>

<?php
get_footer();
