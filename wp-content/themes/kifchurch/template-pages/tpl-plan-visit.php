<?php
/* Template Name: Plan A Visit */
get_header();
?>

<?php if(have_rows('lit_pav_sections')) : ?>
    <?php while(have_rows('lit_pav_sections')) : the_row(); ?>
        <?php if(get_row_layout() == 'lit_pav_first_section') :
            $left_content = get_sub_field('lit_pav_fs_left_column');
            $right_content = get_sub_field('lit_pav_fs_right_column'); ?>
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
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<section class="info-block bg-primary py-1">
    <div class="container">
        <div class="info-block__desc">
            <div class="icon-group mb-1 mb-lg-0">
                <i class="icon-doc"></i>
                <i class="icon-doc"></i>
            </div>

            <div class="info-block__content text-center">
                <p><strong>Parking:</strong> available for bikes; cars can be parked at the pay and park area next to the building.</p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-gray py-xl-4 py-lg-3 pt-sm-2 pb-sm-1 pt-2 pb-1">
    <div class="container">
        <div class="block-title text-center mb-1 mb-sm-2 mb-lg-3">
            <h3>Nearby Attractions</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                <div class="card-overlay card-overlay--sm bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/card-overlay-image-01.jpg" width="397" height="424" loading="lazzy" alt="Family">

                    <div class="card-overlay__content text-center">
                        <h3 class="h5">Garden</h3>
                    </div>

                    <div class="card-overlay__back text-center">
                        <h3 class="h5">Garden</h3>
                        <p>This is a beautiful garden in thamel, you can enjoy your day.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                <div class="card-overlay card-overlay--sm bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/card-overlay-image-01.jpg" width="397" height="424" loading="lazzy" alt="Family">

                    <div class="card-overlay__content text-center">
                        <h3 class="h5">Garden</h3>
                    </div>

                    <div class="card-overlay__back text-center">
                        <h3 class="h5">Garden</h3>
                        <p>This is a beautiful garden in thamel, you can enjoy your day.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                <div class="card-overlay card-overlay--sm bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/card-overlay-image-01.jpg" width="397" height="424" loading="lazzy" alt="Family">

                    <div class="card-overlay__content text-center">
                        <h3 class="h5">Garden</h3>
                    </div>

                    <div class="card-overlay__back text-center">
                        <h3 class="h5">Garden</h3>
                        <p>This is a beautiful garden in thamel, you can enjoy your day.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                <div class="card-overlay card-overlay--sm bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/card-overlay-image-01.jpg" width="397" height="424" loading="lazzy" alt="Family">

                    <div class="card-overlay__content text-center">
                        <h3 class="h5">Garden</h3>
                    </div>

                    <div class="card-overlay__back text-center">
                        <h3 class="h5">Garden</h3>
                        <p>This is a beautiful garden in thamel, you can enjoy your day.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>