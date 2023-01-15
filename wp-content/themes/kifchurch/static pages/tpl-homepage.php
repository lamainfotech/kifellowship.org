<?php

/**
 * @package kifchurch
 * 
 * 
 * Template Name: Static Homepage
 */

get_header();
?>
<section class="about py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 mb-lg-0 mb-2">
                <div class="card-video ">
                    <picture class="card-video__media light-overlay">
                        <source srcset="<?php echo site_url(); ?>/media/video-img.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/video-img.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/video-img.jpg" width="500" height="299" loading="lazy" alt="Video thumblain">
                    </picture>
                    <div class="btn-wrap">
                        <a href="https://www.youtube.com/watch?v=xcJtL7QggTI&t=19s" data-fancybox><i class="icon-Play-Icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content text-lg-left text-center">
                    <header class="block-title mb-lg-2 mb-1">
                        <h2>Who We Are?</h2>
                    </header>
                    <p>KIF represents a diverse community of people journeying together to learn what it means to live, love, serve, and respect one another. We strive to create a vital community—with practical messages, heartfelt worship, and prayer, justice, and mercy to those in need. It is our desire to cultivate the Christ-like lifestyle that can uplift the entire community, one life at a time.</p>
                    <div class="btn-wrap mt-lg-4 mt-md-3 mt-2">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.about -->

<section class="experience bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-80 mx-auto mb-lg-4 mb-md-3 mb-2">
            <h2>
                Experience. Connect. Grow
            </h2>
            <p>Our Next Gen Ministry is designed to meet your kids and students right where they are.</p>
        </header>
        <div class="row justify-content-lg-between justify-content-center gutter-24">
            <div class="col-lg-4 col-sm-6 mb-lg-0 mb-2">
                <div class="card-overlay bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/baby.jpg" width="300" height="400" loading="lazy" alt="Baby Image">
                    <div class="card-overlay__content text-center">
                        <h3 class="h5">For Kids</h3>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-lg-0 mb-2">
                <div class="card-overlay bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/jump.jpg" width="300" height="400" loading="lazy" alt="Jump Image">
                    <div class="card-overlay__content text-center">
                        <h3 class="h5">For Youth</h3>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-lg-0 mb-2">
                <div class="card-overlay bg-cover dark-overlay">
                    <img src="<?php echo site_url(); ?>/media/senior.jpg" width="300" height="400" loading="lazy" alt="Senors image">
                    <div class="card-overlay__content text-center">
                        <h3 class="h5">For Senoir</h3>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.experience -->

<section class="pastor py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 mb-lg-0 mb-2">
                <picture class="pastor-media text-lg-left text-center">
                    <source srcset="<?php echo site_url(); ?>/media/pastor.webp" type="image/webp">
                    <source srcset="<?php echo site_url(); ?>/media/pastor.jpg" type="image/jpg">
                    <img src="<?php echo site_url(); ?>/media/pastor.jpg" width="574" height="664" loading="lazy" alt="Pastor">
                </picture>
            </div>
            <div class="col-lg-6">
                <div class="pastor-content text-lg-left text-center">
                    <header class="block-title mb-lg-2 mb-1">
                        <h2>
                            <span>OUR PASTOR</span>
                            Pastor Gyan Lama
                        </h2>
                    </header>
                    <p>“For every way that someone can be lost, we want to provide a practical way for them to be found in the very place that they have ended up.” --Gyan Lama</p>
                    <div class="btn-wrap mt-lg-4 mt-md-3 mt-2">
                        <a href="#" class="btn btn-primary">Learn about Gyan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.pastor -->

<section class="events bg-gray py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <header class="block-title text-center block-width-60 mx-auto mb-lg-4 mb-md-3 mb-2">
            <h2>
                Upcoming Events
            </h2>
            <p>Join our holy upcoming events join our holy upcoming events</p>
        </header>
        <div class="row justify-content-center gutter-72">
            <div class="col-lg-4 col-md-6 mb-lg-3 mb-2">
                <div class="card-event ">
                    <picture class="card-event__media">
                        <source srcset="<?php echo site_url(); ?>/media/members.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/members.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="Members image">
                    </picture>
                    <div class="card-event__content">
                        <h3 class="h5">Christmas Program and Jesus Birthday Celebration</h3>
                        <span class="timing">Sun, Dec 10, 10:00 AM</span>
                        <span class="location"><i class="icon-pin"></i>KIF Church | Thamel, Kathmandu</span>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-3 mb-2">
                <div class="card-event ">
                    <picture class="card-event__media">
                        <source srcset="<?php echo site_url(); ?>/media/members.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/members.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="members image">
                    </picture>
                    <div class="card-event__content">
                        <h3 class="h5">Christmas Program and Jesus Birthday Celebration</h3>
                        <span class="timing">Sun, Dec 10, 10:00 AM</span>
                        <span class="location"><i class="icon-pin"></i>KIF Church | Thamel, Kathmandu</span>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-3 mb-2">
                <div class="card-event ">
                    <picture class="card-event__media">
                        <source srcset="<?php echo site_url(); ?>/media/members.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/members.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="members image">
                    </picture>
                    <div class="card-event__content">
                        <h3 class="h5">Christmas Program and Jesus Birthday Celebration</h3>
                        <span class="timing">Sun, Dec 10, 10:00 AM</span>
                        <span class="location"><i class="icon-pin"></i>KIF Church | Thamel, Kathmandu</span>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="btn-wrap text-center mt-lg-3 mt-2">
            <a href="#" class="btn btn-primary">View All Events</a>
        </div>
    </div>
</section><!-- /.events -->

<section class="section-map">
    <h2 class="d-none">title</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.946795029693!2d85.34463115!3d27.694531700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1664393242972!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section><!-- /.map -->

<?php
get_footer();
