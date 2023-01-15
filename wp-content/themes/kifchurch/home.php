<?php

/**
 * @package kifchurch
 */

get_header();

$categories = get_terms(array(
    'taxonomy'      =>  'category',
    'hide_empty'    =>  true,
    'orderby'       =>  'term_order',
    'order'         =>  'ASC'
));
?>

<section class="news bg-gray pt-xl-5 pt-lg-4 pt-md-3 py-2 pb-lg-3 pb-md-1">
    <div class="container">
        <h2 class="d-none">title</h2>

        <?php if(!empty($categories)) { ?>
            <div class="d-flex justify-content-center pb-3">
                <?php foreach($categories as $category) {
                    $filter = get_field('lit_pc_enable_filter', $category);
                    $cat_link = get_term_link($category);
                    $cat_name = $category->name;
                    
                    if($filter) { ?>
                        <a href="<?php echo $cat_link; ?>" class="btn <?php if($category->term_id !== 1) { echo 'btn-primary btn-primary--alt'; } ?> mx-1 btn-primary-post-filter">
                            <span><?php echo $cat_name; ?></span>
                        </a>
                <?php } } ?>
            </div>
        <?php } ?>

        <?php if (have_posts()) { ?>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-12 mb-lg-3 mb-2">
                        <div class="row card-news no-gutters">
                            <div class="col-md-4">
                                <picture class="card-news__media">
                                    <?php
                                    $featured_img = get_the_post_thumbnail();
                                    echo $featured_img;
                                    ?>
                                </picture>
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="card-news__content block-width-70">
                                    <span class="date"><?php echo get_the_date('j F Y'); ?></span>
                                    <h3><?php echo get_the_title(); ?></h3>

                                    <?php
                                    $ab_content = get_the_excerpt();
                                    echo wpautop(wp_trim_words($ab_content, 30, '...'));
                                    ?>
                                    <div class="btn-wrap">
                                        <a href=" <?php echo get_the_permalink() ?>" class="read-btn mt-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <a href=" <?php echo get_the_permalink() ?>" class="stretched-link"></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php the_posts_pagination();
        } ?>
    </div>
</section>

<?php
get_footer();
