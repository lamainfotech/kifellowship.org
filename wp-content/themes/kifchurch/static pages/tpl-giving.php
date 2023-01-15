<?php
/* Template Name: Static Giving */
get_header();
?>

<section class="giving py-lg-4 py-md-3 py-2">
    <div class="container">
        <div class="giving-content text-center block-width-90 mx-auto ">
            <i class="icon-doc"></i>
            <h2 class="h5">2 Corinthians 9:6-8</h2>
            <p>Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver. And God is able to bless you abundantly, so that in all things at all times, having all that you need, you will abound in every good work.</p>
        </div>
    </div>
</section>

<section class="payment bg-gray py-lg-4 py-md-3 py-2">
    <div class="container">
        <h3 class="d-none">Title</h3>
        <header class="block-title text-center block-width-90 mx-auto mb-lg-3 mb-2">
            <h4>
                Giving Options
            </h4>
            <p>Looking for Bible verses about giving? Wonder what the Bible says about generosity and giving with a generous heart? As Christians, the Bible is clear throughout its pages that we’re called to give generously.</p>
        </header>

        <div class="payment-tabs text-center">
            <select id="select-box" class="select-wrap mb-lg-3 mb-2">
                <option value="1" style="background-image:url('http://kif.loc/media/esewa.png')">Give From Esewa</option>
                <option value="2">Give From Khalti</option>
                <option value="3">Give From Fone Pay</option>
                <option value="4">Give From Pay pal</option>
            </select>
        </div>
        <div class="payment-tabs__content text-center">
            <div id="tab-1" class="tab-content">
                <picture class="payment-media">
                    <source srcset="<?php echo site_url(); ?>/media/esewa-qr.webp" type="image/webp">
                    <source srcset="<?php echo site_url(); ?>/media/esewa-qr.jpg" type="image/jpg">
                    <img src="<?php echo site_url(); ?>/media/esewa-qr.jpg" width="683" height="1034" loading="lazy" alt="Esewa QR code Img">
                </picture>
            </div>
            <div id="tab-2" class="tab-content">
                This is tab 2 content.
            </div>
            <div id="tab-3" class="tab-content">
                This is tab 3 content.
            </div>
            <div id="tab-4" class="tab-content">
                This is tab 4 content.
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
