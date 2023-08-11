<?php
/* Template Name: Events Details */
get_header();
$title = get_the_title();
$image = get_the_post_thumbnail();
$fromDate = get_field('lit_event_from_date', get_the_ID(), false);
$fromDate = DateTime::createFromFormat('Y-m-d H:i:s', $fromDate);
$toDate = get_field('lit_event_to_date', get_the_ID(), false);
$toDate = DateTime::createFromFormat('Y-m-d H:i:s', $toDate);
$location = get_field('lit_event_location');
$video = get_field('lit_event_video');
$slide = get_field('lit_event_slide');
$desc = get_field('lit_event_description');

if ($title || $image || $date || $location || $video || $slide || $desc) { ?>
    <Section class="section-singleBlog py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="card-info">
                <div class="row justify-content-between no-gutters">
                    <?php if (!empty($image)) { ?>
                        <div class="col-xl-7 col-lg-6">
                            <picture class="card-info__media">
                                <?php echo $image; ?>
                            </picture>
                        </div>
                    <?php } ?>

                    <div class="col-xl-5 col-lg-6 align-self-center">
                        <div class="card-info__content">
                            <?php if (!empty($title)) { ?>
                                <h2 class="h4"><?php echo $title; ?></h2>
                            <?php } ?>
                            <ul class="events">
                                <?php if (!empty($fromDate) || !empty($toDate)) { ?>
                                    <li>
                                        <div class="li-wrap">
                                            <i class="icon-calander"></i><span><?php echo $fromDate->format('j F'); ?><span><?php echo ' — ' . $toDate->format('j F'); ?></span>
                                        </div>
                                    </li>
                                <?php } ?>

                                <?php if (!empty($fromDate)) { ?>
                                    <li>
                                        <div class="li-wrap">
                                            <i class="icon-clock"></i><span><?php echo $fromDate->format('h:i A'); ?></span>
                                        </div>
                                    </li>
                                <?php } ?>

                                <?php if (!empty($location)) { ?>
                                    <li>
                                        <div class="li-wrap">
                                            <i class="icon-pin"></i><span> <span class="sp1"><?php echo $location; ?> </span><a target="_blank" href="<?php echo 'https://www.google.com/maps/search/' . $location; ?>" class="btn-direction">Get Direction</a></span>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="btn-wrap  mt-xl-3 mt-lg-2 mt-1">
                                <?php if (!empty($video)) { ?>
                                    <a href="<?php echo $video['url']; ?>" data-fancybox class="btn btn-primary btn-primary--alt"><?php if (!empty($video['title'])) {
                                                                                                                                        echo $video['title'];
                                                                                                                                    } else {
                                                                                                                                        echo 'Watch Video';
                                                                                                                                    } ?></a>
                                <?php } ?>

                                <?php if (!empty($slide)) { ?>
                                    <a href="#" class="btn btn-primary btn-primary--alt" data-toggle="modal" data-target="#exampleModalCenter">Play Slides</a>
                                <?php } ?>
                            </div>
                            <div class="share-links justify-content-center mt-xl-3 mt-lg-2 mt-1">
                                <div class="text">
                                    <span>Share</span>
                                </div>
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>"><i class="icon-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $title . ': ' . get_the_permalink(); ?>"><i class="icon-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=&media=<?php echo get_the_post_thumbnail_url(); ?>&description=<?php echo $title; ?>"><i class="icon-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-info__desc text-center">
                    <?php
                    if (!empty($desc)) {
                        echo wpautop($desc);
                    }
                    ?>
                </div>
            </div>
        </div>
    </Section>
<?php } ?>

<?php
$other_event_sec_title = get_field('lit_other_event_section_title');
$other_event_sec_subtitle = get_field('lit_other_event_section_subtitle');
$other_events = new WP_Query(array(
    'post_type'     =>  'event',
    'post_status'   =>  'publish',
    'orderby'       =>  'meta_value',
    'meta_key'      =>  'lit_event_from_date',
    'order'         =>  'DESC',
    'posts_per_page' =>  4,
));
$other_event_sec_btn = get_field('lit_other_event_section_button');

if ($other_event_sec_title || $other_event_sec_subtitle || $other_events || $other_event_sec_btn) { ?>
    <section class="events section-event bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <header class="block-title text-center block-width-60 mx-auto mb-lg-4 mb-md-3 mb-2">
                <?php if (!empty($other_event_sec_title)) { ?>
                    <h2><?php echo $other_event_sec_title; ?></h2>
                <?php } else { ?>
                    <h2>Other events you may like</h2>
                <?php } ?>

                <?php if (!empty($other_event_sec_subtitle)) { ?>
                    <p><?php echo $other_event_sec_subtitle; ?></p>
                <?php } else { ?>
                    <p>Check out other past and upcoming events</p>
                <?php } ?>
            </header>

            <?php if ($other_events->have_posts()) { ?>
                <div class="row justify-content-center">
                    <?php while ($other_events->have_posts()) {
                        $other_events->the_post();
                        $other_event_img = get_the_post_thumbnail();
                        $other_event_title = get_the_title();
                        $other_event_date = get_field('lit_event_from_date');
                        $other_event_location = get_field('lit_event_location');
                        $other_event_link = get_the_permalink();
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                            <div class="card-event ">
                                <?php if (!empty($other_event_img)) { ?>
                                    <picture class="card-event__media">
                                        <?php echo $other_event_img; ?>
                                    </picture>
                                <?php } ?>

                                <div class="card-event__content">
                                    <?php if (!empty($other_event_title)) { ?>
                                        <h3 class="h5"><?php echo $other_event_title; ?></h3>
                                    <?php } ?>

                                    <?php if (!empty($other_event_date)) { ?>
                                        <span class="timing"><?php echo $other_event_date; ?></span>
                                    <?php } ?>

                                    <?php if (!empty($other_event_location)) { ?>
                                        <span class="location"><i class="icon-pin"></i><?php echo $other_event_location; ?></span>
                                    <?php } ?>
                                </div>

                                <a href="<?php echo $other_event_link; ?>" class="stretched-link"></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            wp_reset_postdata();
            wp_reset_query(); ?>

            <?php if (!empty($other_event_sec_btn)) { ?>
                <div class="btn-wrap text-center mt-lg-3 mt-2">
                    <a href="<?php echo $other_event_sec_btn['url']; ?>" class="btn btn-primary"><?php echo $other_event_sec_btn['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>

<div class="modal custom-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $slide; ?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
