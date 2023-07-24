<?php
/* Template Name: Statement of Faith */
get_header();

$heading = get_field('lit_sof_heading');
$subHeading = get_field('lit_sof_sub_heading'); ?>

<section class="beliefs-tab__block bg-gray py-xxl-6 py-xl-5 py-lg-4 py-md-3 py-2">
    <div class="container">
        <header class="block-title mb-2">
            <?php if(!empty($heading)) { ?>
                <h2><?php echo $heading; ?></h2>
            <?php } ?>
            
            <?php if(!empty($subHeading)) { ?>
                <p><?php echo $subHeading; ?></p>
            <?php } ?>
        </header>
        <hr class="mb-3">
        <div class="row">
            <div class="col-lg-3 mb-lg-0 mb-3">
                <div class="tab-menu belief-tab px-lg-2">
                    <ul>
                        <?php if(have_rows('lit_sof_items')) {
                            $i = 0;
                            while(have_rows('lit_sof_items')) {
                                the_row();
                                $item_heading = get_sub_field('lit_sof_item_heading');
                                $i += 1;
                        ?>
                                <li><a href="#" class="<?php if($i === 1) { echo 'active'; } ?>" data-rel="tab-<?php echo $i; ?>"><?php echo $item_heading; ?></a></li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-main-box">
                    <?php if(have_rows('lit_sof_items')) {
                        $j = 0;
                        while(have_rows('lit_sof_items')) {
                            the_row();
                            $item_content = get_sub_field('lit_sof_item_description');
                            $j += 1;
                    ?>
                        <div class="tab-box" id="tab-<?php echo $j; ?>" style="<?php if($j === 1) { echo 'display:block;'; } ?>">
                            <?php echo wpautop($item_content); ?>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
