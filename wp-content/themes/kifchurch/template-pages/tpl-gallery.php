<?php
/* Template Name: Gallery */
get_header();

$gallery = get_field('lit_gallery'); 
if($gallery) { ?>
    <section class="gallery-section py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <h2 class="d-none">Title</h2>
            <div class="row justify-content-center gutter-16">
                <?php
                foreach($gallery as $image) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery">
                            <picture class="gallery-media">
                                <?php
                                echo wp_get_attachment_image($image['id'], array(385, 262));
                                ?>
                            </picture>
                            <a href="<?php echo $image['full_image_url']; ?>" class="stretched-link" data-fancybox="gallery"></a>
                        </div>
                    </div>
                <?php } ?>              
            </div>
        </div>
    </section>
<?php } ?>

<?php
get_footer();
