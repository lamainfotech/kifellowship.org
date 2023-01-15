<?php
/* Template Name: Static Training Detail */
get_header();
?>

<section class="section pt-xxl-5 py-lg-4 py-sm-3 pb-xxl-6 py-2">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-lg-6 pl-lg-2 pl-xxl-4 mb-1 mb-lg-0">
                <div class="card-video">
                    <picture class="card-video__media light-gradient">
                        <source srcset="<?php echo site_url(); ?>/media/thumbnail-image.webp" type="image/webp">
                        <source srcset="<?php echo site_url(); ?>/media/thumbnail-image.jpg" type="image/jpg">
                        <img src="<?php echo site_url(); ?>/media/thumbnail-image.jpg" width="437" height="256" loading="lazy" alt="Video thumbnail">
                    </picture>
                    <div class="btn-wrap">
                        <a href="https://www.youtube.com/watch?v=xcJtL7QggTI&t=19s" data-fancybox><i class="icon-Play-Icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 two-col__content">
                <header class="block-title text-lg-left text-center mb-1 mb-lg-2">
                    <h2>Foundation Course</h2>
                    <p>The first course in Google Cloud Computing Foundations Professional Certificate provides an overview of cloud computing, ways to use Google Cloud, and different compute options.</p>
                </header>
                <div class="time-duration">
                    <i class="icon-clock"></i>
                    <p><Strong>Duration: </Strong>10 Hours</p>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section class="info-block bg-gray py-xxl-4 pt-lg-3 pt-2 pb-lg-2 pb-1">
    <div class="container">
        <div class="block-title block-width-1111xxl mx-auto">
            <h3 class="mb-1 mb-lg-2 text-center">About this Training</h3>
            <p>Cloud Computing is revolutionizing today’s world. It affects the way we communicate, do business, interact with everyday things and one another. This course discusses the fundamental theoretical and practical applications of Cloud Computing. It provides the basic concepts to understand why cloud computing is and will be such an important part of future jobs and businesses. It focuses on Google Cloud’s extended solutions and compute options.</p>

            <p>Cloud Computing is revolutionizing today’s world. It affects the way we communicate, do business, interact with everyday things and one another. This course discusses the fundamental theoretical and practical applications of Cloud Computing. It provides the basic concepts to understand why cloud computing is and will be such an important part of future jobs and businesses. It focuses on Google Cloud’s extended solutions and compute options.</p>

            <p>Cloud Computing is revolutionizing today’s world. It affects the way we communicate, do business, interact with everyday things and one another. This course discusses the fundamental theoretical and practical applications of Cloud Computing. It provides the basic concepts to understand why cloud computing is and will be such an important part of future jobs and businesses. It focuses on Google Cloud’s extended solutions and compute options.</p>
        </div>
    </div>
</section> <!-- /.info-block -->

<?php
get_footer();
