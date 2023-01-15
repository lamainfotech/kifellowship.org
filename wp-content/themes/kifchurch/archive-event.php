<?php
/* Template Name: Events */
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$events = new WP_Query(array(
    'post_type'     =>  'event',
    'post_status'   =>  'publish',
    'orderby'       =>  'meta_value',
    'meta_key'      =>  'lit_event_date',
    'order'         =>  'DESC',
    'posts_per_page'=>  12,
    'paged' => $paged,
));
?>

<section class="section-event py-xxl-6 py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <?php if($events->have_posts()) { ?>
            <div class="row justify-content-center">
                <?php while($events->have_posts()) {
                    $events->the_post();
                    $event_img = get_the_post_thumbnail();
                    $event_title = get_the_title();
                    $event_date = get_field('lit_event_date');
                    $event_location = get_field('lit_event_location');
                    $event_link = get_the_permalink();
                ?>
                <div class=" col-xl-3 col-lg-4 col-md-6">
                    <div class="card-event ">
                        <?php if(!empty($event_img)) { ?>
                            <picture class="card-event__media">
                                <?php echo $event_img; ?>
                            </picture>
                        <?php } ?>
                        
                        <div class="card-event__content">
                            <?php if(!empty($event_title)) { ?>
                                <h2 class="h5"><?php echo $event_title; ?></h2>
                            <?php } ?>
                            
                            <?php if(!empty($event_date)) { ?>
                                <span class="timing"><?php echo $event_date; ?></span>
                            <?php } ?>
                            
                            <?php if(!empty($event_location)) { ?>
                                <span class="location"><i class="icon-pin"></i><?php echo $event_location; ?></span>
                            <?php } ?>
                            
                        </div>
                        <a href="<?php echo $event_link; ?>" class="stretched-link"></a>
                    </div>
                </div>
                <?php } ?>
            </div>
            
            <?php
                the_posts_pagination();
            ?>
        <?php } wp_reset_postdata(); wp_reset_query(); ?>
    </div>
</section>

<?php
get_footer();
