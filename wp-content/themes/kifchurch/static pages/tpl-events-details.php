<?php
/* Template Name: Static Events Details */
get_header();
?>

<Section class="section py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <div class="card-info">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <picture class="card-info__media">
                        <source srcset="<?php echo site_url(); ?>/media/kif-img-02.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/kif-img-02.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/kif-img-02.jpg" width="737" height="444" loading="lazy" alt="Events Img">
                    </picture>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="card-info__content">
                        <h2 class="h4">Neni’s 10th Birthday Celebration</h2>
                        <ul class="events">
                            <li>
                                <div class="li-wrap">
                                    <i class="icon-calander"></i><span>21 September, 2022</span>
                                </div>
                            </li>
                            <li>
                                <div class="li-wrap">
                                    <i class="icon-clock"></i><span>6 PM - 7 PM</span>
                                </div>
                            </li>
                            <li>
                                <div class="li-wrap">
                                    <i class="icon-pin"></i><span>Thamel, Kathmandu</span>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-wrap  mt-xl-3 mt-lg-2 mt-1">
                            <a href="#" class="btn btn-primary btn-primary--alt">Watch Video</a>
                            <a href="#" class="btn btn-primary btn-primary--alt">Play Slides</a>
                        </div>
                        <div class="share-links justify-content-center mt-xl-3 mt-lg-2 mt-1">
                            <div class="text">
                                <span>Share</span>
                            </div>
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-info__desc text-center">
                <p>Want to learn how the enemy always fails when he meets a woman dressed for the occasion? The Women’s Ministry is hosting an evening Bible study meeting every other week starting Wednesday, August 24th and ending Wednesday, November 16th. We will meet at 6:30pm and hear a fresh word through Priscilla Shirer’s study “The Armor of God” that will equip us to get serious, specific, and strategic in our discipline of prayer. There is no cost to join but study guides must be purchased prior to the first meeting.</p>
            </div>
        </div>
    </div>
</Section>

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
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="Video thumblain">
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
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="Video thumblain">
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
                        <img src="<?php echo site_url(); ?>/media/members.jpg" width="350" height="250" loading="lazy" alt="Video thumblain">
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
</section>

<?php
get_footer();
