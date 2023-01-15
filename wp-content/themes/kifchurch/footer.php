<?php

/**
 * @package kifchurch
 */
?>

</main>
<section class="subscribe py-lg-3 py-2">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-7 mb-lg-0 mb-2">
                <div class="subscribe-left text-sm-left text-center">
                    <h2 class="h6">Receive Updates from KIF</h2>
                    <div class="subscribe-holder">
                        <form action="https://kifellowship.us21.list-manage.com/subscribe/post?u=beeba6b024d1fdd595dddcead&amp;id=3b991b01a7&amp;f_id=0079cbe1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form" target="_blank" novalidate>
                            <div class="form-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="example@domain.com">
                            </div>
                            <div class="btn-wrap ml-lg-2 ml-sm-1 mt-sm-0 mt-1">
                                <button type="submit" name="subscribe" class="btn btn-primary btn-lg">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subscribe-right text-sm-left text-md-right text-center">
                    <h2 class="h6">Stay Connected :)</h2>
                    <div class="social-links">
                        <ul>
                            <li><a href="https://www.instagram.com/kifellowship/" target="_blank"><i class="icon-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/kifellowship" target="_blank"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://g.page/Kifellowship?share" target="_blank"><i class="icon-google"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCz-kvU7f-cBGNW94W8AnK_g" target="_blank"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.subscribe -->

<footer class="site-footer">
    <div class="site-footer__top py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="site-footer__menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer',
                        'container'       => false,
                        'menu_class'      => ''
                    ));
                ?>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom py-lg-2 py-1">
        <div class="container">
            <div class="copyright-wrap">

                <span class="copyright">Copyright © <?php echo date('Y'); ?> Kathmandu International Fellowship</span>

                <span class="designed">Design by <a href="https://khagendralama.com.np/" target="_blank">Lama InfoTech</a></span>

            </div>
        </div>
    </div>
</footer><!-- /.site-footer -->
</div>

<?php
wp_footer();
?>
</body>

</html>