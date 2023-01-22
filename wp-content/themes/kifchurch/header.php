<?php

/**
 * @package kifchurch
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="site-wrapper">
        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo_src = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', TRUE);
                    ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $logo_src[0]; ?>" alt="<?php echo $logo_alt;  ?>"></a>
                    <!--<div class="navbar-overlay"></div>-->
                    <div class="site-header__nav">
                        <div class="collapse navbar-collapse offset" id="nav-pri">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'nav-pri',
                                'depth'              => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'menu_class'      => 'nav navbar-nav justify-content-center ml-auto',
                                'walker'         => new WP_Bootstrap_NavWalker(),
                                'fallback_cb'    => 'WP_Bootstrap_NavWalker::fallback',
                            ));
                            ?>
                        </div>
                        <div class="site-header__actions">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-pri" aria-controls="nav-pri" aria-expanded="false" aria-label="Toggle Navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div><!-- /.site-header__actions -->
                    </div><!-- /.site-header__nav -->
                </div>
            </nav>
        </header><!-- /.site-header -->

        <main class="site-content">
            <?php if (is_front_page()) {
                $hero_bg_img = get_field('lit_home_hero_bg_img');
                $hero_title = get_field('lit_home_hero_title');
                $hero_description = get_field('lit_home_hero_description');
                $hero_button = get_field('lit_home_hero_button');
            ?>
                <section class="banner bg-cover overlay">
                    <img src="<?php if (!empty($hero_bg_img)) {
                                    echo $hero_bg_img['url'];
                                } else {
                                    echo site_url() . '/media/banner-img.jpg';
                                } ?>" width="<?php if (!empty($hero_bg_img)) {
                                                    echo $hero_bg_img['width'];
                                                } else {
                                                    echo '1440';
                                                } ?>" height="<?php if (!empty($hero_bg_img)) {
                                                                    echo $hero_bg_img['height'];
                                                                } else {
                                                                    echo '650';
                                                                } ?>" alt="<?php echo $hero_bg_img['alt']; ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-content text-center pt-xxl-5 pt-xl-4 pt-lg-2 pt-1">
                                    <?php if (!empty($hero_title)) { ?>
                                        <h1>
                                            <?php echo $hero_title; ?>
                                        </h1>
                                    <?php } ?>

                                    <?php if (!empty($hero_description)) { ?>
                                        <p><?php echo $hero_description; ?></p>
                                    <?php } ?>

                                    <?php if (!empty($hero_button)) { ?>
                                        <div class="btn-wrap mt-xl-6 mt-lg-5 mt-4">
                                            <a href="<?php echo $hero_button['url']; ?>" class="btn btn-secondary"><?php echo $hero_button['title']; ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- /.banner -->
            <?php } elseif (is_single() && 'post' == get_post_type() || is_single() && 'event' == get_post_type() || is_page('prayer-request') || is_page_template('template-pages/tpl-coming-soon.php') || is_404() || is_page('our-team') || is_single() && 'training' == get_post_type()) {
            } elseif (is_post_type_archive('event')) { ?>
                <section class="banner-inner bg-cover banner-overlay">
                    <img src="<?php echo site_url(); ?>/media/breadcrumb-banner.png" width="1440" height="285" alt="Default Banner">

                    <div class="banner-inner__content text-center">
                        <h1>Events</h1>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div id="breadcrumbs" class="banner-breadcrumbs">', '</div>');
                        }
                        ?>
                    </div>
                </section><!-- /.banner-inner -->
            <?php } elseif (is_post_type_archive('training')) { ?>
                <section class="banner-inner bg-cover banner-overlay">
                    <img src="<?php echo site_url(); ?>/media/breadcrumb-banner.png" width="1440" height="285" alt="Default Banner">

                    <div class="banner-inner__content text-center">
                        <h1>Training Programs</h1>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div id="breadcrumbs" class="banner-breadcrumbs">', '</div>');
                        }
                        ?>
                    </div>
                </section><!-- /.banner-inner -->
            <?php } elseif (is_page('podcasts')) { ?>
                <h1>Podcasts</h1>
            <?php } elseif (is_page('plan-a-visit')) {
                $banner_img = get_field('lit_page_banner_image');
                $banner_title = get_field('lit_global_page_title');
            ?>
                <section class="banner-inner banner-inner--alt bg-cover overlay">
                    <img src="<?php echo $banner_img['url']; ?>" width="<?php echo $banner_img['width']; ?>" height="<?php echo $banner_img['height']; ?>" loading="lazy" alt="<?php echo $banner_img['alt']; ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <?php if(!empty($banner_title)) { ?>
                                    <div class="banner-content block-title text-center pt-xxl-3 pt-xl-3 pt-lg-1 pt-0">
                                        <h1 class="h2"><?php echo $banner_title; ?></h1>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section><!-- /.banner -->
            <?php } elseif (is_home()) { ?>
                <section class="banner-inner bg-cover banner-overlay">
                    <img src="<?php echo site_url(); ?>/media/breadcrumb-banner.png" width="1440" height="285" alt="Default Banner">
                    <div class="banner-inner__content text-center">
                        <h1>Articles</h1>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div id="breadcrumbs" class="banner-breadcrumbs">', '</div>');
                        }
                        ?>
                    </div>
                </section><!-- /.banner-inner -->
            <?php } elseif (is_archive()) {
                $page_banner = get_field('lit_page_banner_image');
                $page_title = get_field('lit_global_page_title');
            ?>
                <section class="banner-inner bg-cover banner-overlay">
                    <?php if (!empty($page_banner)) { ?>
                        <img src="<?php echo $page_banner['url']; ?>" width="<?php echo $page_banner['width']; ?>" height="<?php echo $page_banner['height']; ?>" alt="<?php echo $page_banner['alt']; ?>">
                    <?php } else { ?>
                        <img src="<?php echo site_url(); ?>/media/breadcrumb-banner.png" width="1440" height="285" alt="Default Banner">
                    <?php } ?>

                    <div class="banner-inner__content text-center">
                        <?php if (!empty($page_title)) { ?>
                            <h1><?php echo $page_title; ?></h1>
                        <?php } else { ?>
                            <h1><?php echo get_the_archive_title(); ?></h1>
                        <?php } ?>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div id="breadcrumbs" class="banner-breadcrumbs">', '</div>');
                        }
                        ?>
                    </div>
                </section><!-- /.banner-inner -->
            <?php } else {
                $page_banner = get_field('lit_page_banner_image');
                $page_title = get_field('lit_global_page_title');
            ?>
                <section class="banner-inner bg-cover banner-overlay">
                    <?php if (!empty($page_banner)) { ?>
                        <img src="<?php echo $page_banner['url']; ?>" width="<?php echo $page_banner['width']; ?>" height="<?php echo $page_banner['height']; ?>" alt="<?php echo $page_banner['alt']; ?>">
                    <?php } else { ?>
                        <img src="<?php echo site_url(); ?>/media/breadcrumb-banner.png" width="1440" height="285" alt="Default Banner">
                    <?php } ?>

                    <div class="banner-inner__content text-center">
                        <?php if (!empty($page_title)) { ?>
                            <h1><?php echo $page_title; ?></h1>
                        <?php } else { ?>
                            <h1><?php echo get_the_title(); ?></h1>
                        <?php } ?>

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div id="breadcrumbs" class="banner-breadcrumbs">', '</div>');
                        }
                        ?>
                    </div>
                </section><!-- /.banner-inner -->
            <?php } ?>