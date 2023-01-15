<?php
get_header();

$trainings = new WP_Query(array(
    'post_type'     =>  'training',
    'post_status'   =>  'publish',
    'posts_per_page'=>  -1
)); ?>

<section class="section container pt-lg-4 pt-sm-3 pt-2 pb-md-2 pb-1">
    <div class="row gutter-24">
        <?php
        if($trainings->have_posts()) :
            while($trainings->have_posts()) : $trainings->the_post();
                $tname = get_the_title();
                $tlink = get_the_permalink();
                $img = get_field('lit_training_image');
                ?>
                <div class="col-lg-4 col-sm-6 mb-1 mb-sm-2 mb-xxl-3">
                    <div class="card-overlay card-overlay--alt bg-cover light-gradient light-gradient--alt">
                        <?php if(!empty($img)) { ?>
                            <img src="<?php echo $img['url']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>" loading="lazzy" alt="<?php echo $img['alt']; ?>">
                        <?php } ?>

                        <?php if(!empty($tname)) { ?>
                            <div class="card-overlay__content text-center">
                                <h5><?php echo $tname; ?></h5>
                            </div>
                        <?php } ?>

                        <?php if(!empty($tlink)) { ?>
                            <a href="<?php echo $tlink; ?>" class="stretched-link"></a>
                        <?php } ?>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
