<?php
/* Template Name: Our Pastor */
get_header();

$pastor = new WP_Query(array(
    'post_type'     =>  'team',
    'post_status'   =>  'publish',
    'posts_per_page'=>  -1
));

if($pastor->have_posts()) :
    while($pastor->have_posts()) : $pastor->the_post();
        if(get_field("lit_ot_big_profile")[0]["value"] == "yes") :
            $name = get_the_title();
            $desc = get_field("lit_ot_description");
            $img = get_field("lit_ot_profile_image");
            $socialLinks = get_field("lit_ot_social_profiles");
?>
            <section class="two-col py-xl-6 py-lg-5 py-md-3 py-2 mt-3">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-5 mb-lg-0 mb-2">
                            <?php if(!empty($img)) { ?>
                                <picture class="two-col__media">
                                    <img src="<?php echo $img["url"]; ?>" width="<?php echo $img["width"]; ?>" height="<?php echo $img["height"]; ?>" loading="lazy" alt="<?php echo $img["alt"]; ?>">
                                </picture>
                            <?php } ?>
                        </div>
                        <div class="col-lg-7 pr-xl-4 pr-lg-3">
                            <header class="block-title mb-lg-2 mb-1">
                                <?php if(!empty($name)) { ?>
                                    <h2><?php echo $name; ?></h2>
                                <?php } ?>
                            </header>
                            <div class="two-col__content">
                                <?php if(!empty($desc)) {
                                    echo wpautop($desc);
                                } ?>

                                <?php if(!empty($socialLinks)) {
                                    $FbProfile = null;
                                    $InstaProfile = null;
                                    foreach($socialLinks as $social) {
                                        if(str_contains($social, 'facebook.com')) {
                                            $FbProfile = $social;
                                        } elseif(str_contains($social, 'instagram.com')) {
                                            $InstaProfile = $social;
                                        }
                                    }
                                ?>
                                    <div class="share-links mt-xl-3 mt-lg-2 mt-1">
                                        <ul>
                                            <?php if(!empty($FbProfile)) { ?>
                                                <li><a target="_blank" href="<?php echo $FbProfile; ?>"><i class="icon-facebook"></i></a></li>
                                            <?php } ?>

                                            <?php if(!empty($InstaProfile)) { ?>
                                                <li><a target="_blank" href="<?php echo $InstaProfile; ?>"><i class="icon-instagram"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php   endif;
    endwhile;
endif;
wp_reset_query();
wp_reset_postdata();
?>

<?php
$heading = get_field('lit_ot_second_section_heading');
$team = new WP_Query(array(
    'post_type'     =>  'team',
    'post_status'   =>  'publish',
    'posts_per_page'=>  -1
));
?>
    <section class="core-team bg-gray py-xl-6 py-lg-5 py-md-3 py-2">
        <div class="container">
            <?php if(!empty($heading)) { ?>
                <header class="block-title text-center block-width-60 mx-auto mb-lg-4 mb-md-3 mb-2">
                    <h2><?php echo $heading; ?></h2>
                </header>
            <?php } ?>

            <div class="row justify-content-center">
                <?php
                    if($team->have_posts()) :
                        while($team->have_posts()) : $team->the_post();
                            if(get_field("lit_ot_big_profile")[0]["value"] != "yes") :
                                $name = get_the_title();
                                $title = get_field('lit_ot_title');
                                $img = get_field('lit_ot_profile_image');
                        ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                                <div class="card-team text-center">
                                    <div class="wrap">
                                        <?php if(!empty($img)) { ?>
                                            <picture class="card-team__media">
                                                <img src="<?php echo $img['url']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>" loading="lazy" alt="<?php echo $img['alt']; ?>">
                                            </picture>
                                        <?php } ?>

                                        <div class="btn-wrap">
                                            <a href="#" class="btn-bio stretched-link">View Bio</a>
                                        </div>
                                    </div>
                                    <div class="card-team__info mt-lg-2 mt-1">
                                        <?php if(!empty($name)) { ?>
                                            <h5><?php echo $name; ?></h5>
                                        <?php } ?>

                                        <?php if(!empty($title)) { ?>
                                            <span><?php echo $title; ?></span>
                                        <?php } ?>
                                    </div>
                                </div> <!-- /card-team -->
                            </div>
                        <?php
                            endif;
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section> <!-- /.core-team -->
<?php
wp_reset_query();
wp_reset_postdata();
?>

<?php
get_footer();
?>