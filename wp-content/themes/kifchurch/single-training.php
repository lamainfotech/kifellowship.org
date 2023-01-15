<?php
get_header();

$title = get_the_title();
$introText = get_field('lit_training_intro_text');
$duration = get_field('lit_training_duration');
$img = get_field('lit_training_image');
$video = get_field('lit_training_video');

if($title || $introText || $duration || $img || $video) :
?>
    <section class="section mt-xxl-6 mt-lg-4 mt-sm-3 mt-2 pt-xxl-5 py-lg-4 py-sm-3 pb-xxl-6 py-2">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-lg-6 pl-lg-2 pl-xxl-4 mb-1 mb-lg-0">
                    <div class="card-video">
                        <?php if(!empty($img)) { ?>
                            <picture class="card-video__media light-gradient">
                                <img src="<?php echo $img['url']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>" loading="lazy" alt="<?php echo $img['alt']; ?>">
                            </picture>
                        <?php } ?>

                        <?php if(!empty($video)) { ?>
                            <div class="btn-wrap">
                                <a href="<?php echo $video; ?>" data-fancybox><i class="icon-Play-Icon"></i></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 two-col__content">
                    <header class="block-title text-lg-left text-center mb-1 mb-lg-2">
                        <?php if(!empty($title)) { ?>
                            <h2><?php echo $title; ?></h2>
                        <?php } ?>

                        <?php if(!empty($introText)) {
                            echo wpautop($introText);
                        } ?>
                    </header>
                    <div class="time-duration">
                        <i class="icon-clock"></i>
                        <p><Strong>Duration: </Strong>
                            <?php if(!empty($duration)) {
                                echo $duration;
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="cta-block bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-xl-6">
                <header class="block-title text-center text-lg-left">
                    <h3 class="mb-lg-0">Interested to Join the Training</h3>
                </header>
            </div>
            <div class="col-lg-4 col-xl-6">
                <div class="btn-wrap text-center text-lg-right">
                    <a href="#" class="btn btn-primary btn-primary--alt">Submit Application</a>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.cta-block -->

<?php 
$desc = get_field('lit_training_description');
?>
<section class="info-block bg-gray py-xxl-4 pt-lg-3 pt-2 pb-lg-2 pb-1">
    <div class="container">
        <div class="block-title block-width-1111xxl mx-auto">
            <h3 class="mb-1 mb-lg-2 text-center">About this Training</h3>
            <?php if(!empty($desc)) {
                echo wpautop($desc);
            } ?>
        </div>
    </div>
</section> <!-- /.info-block -->

<?php
get_footer();
