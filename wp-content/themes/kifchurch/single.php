<?php
get_header();
?>

<section class="news-details py-lg-4 py-md-3 py-2">
    <div class="container">
        <?php
        $featured_img = get_the_post_thumbnail();
        $video = get_field('lit_single_post_video');
        ?>
        <div class="card-video mb-lg-4 mb-md-3 mb-2">
            <picture class="card-video__media <?php if(!empty($video)) { echo 'light-overlay'; } ?>">
                <?php
                echo $featured_img;
                ?>
            </picture>
            <?php if(!empty($video)) { ?>
                <div class="btn-wrap">
                    <a href="<?php echo $video; ?>" data-fancybox><i class="icon-Play-Icon"></i></a>
                </div>
            <?php } ?>
        </div>
        <header class="block-title text-center btm-border block-width-90 mx-auto mb-lg-3 mb-2">
            <h2><?php echo get_the_title(); ?></h2>
            <p>Published by <?php echo get_the_author_meta('display_name'); ?> on <?php echo get_the_date('j F Y'); ?></p>
        </header>

        <div class="news-details__content text-lg-left text-center">
            <?php the_content(); ?>

            <div class="share-links justify-content-center mt-xl-3 mt-lg-2 mt-1">
                <div class="text">
                    <span>Share</span>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com/intent/tweet?text=<?php echo $title . ': ' . get_the_permalink(); ?>"><i class="icon-twitter"></i></a></li>
                    <li><a href="https://pinterest.com/pin/create/button/?url=&media=<?php echo get_the_post_thumbnail_url(); ?>&description=<?php echo $title; ?>"><i class="icon-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="news-details__cards bg-gray py-lg-4 py-md-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-90 mx-auto mb-lg-3 mb-2">
            <h2>Related Articles</h2>
        </header>
        <?php
        $category = get_the_category()[0]->term_id;
        $related_posts = new WP_Query(array(
            'post_type'     =>  'post',
            'category__in'  =>  $category,
            'post__not_in'  =>  array(get_the_ID()),
            'post_status'   =>  'publish',
            'orderby'       =>  'date',
            'order'         =>  'DESC',
            'posts_per_page'=>  3
        ));

        if(empty($related_posts->have_posts())) {
            $related_posts = new WP_Query(array(
                'post_type'     =>  'post',
                'post__not_in'  =>  array(get_the_ID()),
                'post_status'   =>  'publish',
                'orderby'       =>  'date',
                'order'         =>  'DESC',
                'posts_per_page'=>  3
            ));
        } ?>
            <div class="row justify-content-center">
                <?php
                while($related_posts->have_posts()) {
                    $related_posts->the_post();
                ?>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="card-event card-event--alt">
                            <picture class="card-event__media">
                                <?php echo get_the_post_thumbnail(); ?>
                            </picture>
                            <div class="card-event__content">
                                <h3 class="h5"><?php echo get_the_title(); ?></h3>
                                <span class="location"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></span>
                                <span class="timing"><?php echo get_the_date('j F Y'); ?></span>
                            </div>
                            <a href="<?php echo get_the_permalink(); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
</section>

<?php
get_footer();
