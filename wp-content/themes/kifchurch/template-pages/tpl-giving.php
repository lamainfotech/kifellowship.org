<?php
/* Template Name: Giving */
get_header();

$fs_giving_title = get_field('lit_giving_fs_title');
$fs_giving_description = get_field('lit_giving_fs_desc');
if ($fs_giving_title || $fs_giving_description) { ?>
    <section class="giving py-lg-4 py-md-3 py-2">
        <div class="container">
            <div class="giving-content text-center block-width-90 mx-auto ">
                <i class="icon-doc"></i>
                <?php if (!empty($fs_giving_title)) { ?>
                    <h2 class="h5"><?php echo $fs_giving_title; ?></h2>
                <?php }
                if (!empty($fs_giving_description)) {
                    echo wpautop($fs_giving_description);
                }
                ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
$go_giving_title = get_field('lit_giving_go_title');
$go_giving_desc = get_field('lit_giving_go_desc');
$giving_options = get_field('lit_giving_options');

if ($go_giving_title || $go_giving_desc || $giving_options) { ?>
    <section class="payment bg-gray py-lg-4 py-md-3 py-2">
        <div class="container">
            <h3 class="d-none">Title</h3>
            <header class="block-title text-center block-width-90 mx-auto mb-lg-3 mb-2">
                <?php if (!empty($go_giving_title)) { ?>
                    <h4>
                        <?php echo $go_giving_title; ?>
                    </h4>
                <?php }
                if (!empty($go_giving_desc)) {
                    echo wpautop($go_giving_desc);
                } ?>
            </header>

            <div class="payment-tabs text-center">
                <select id="select-box" class="select-wrap mb-lg-3 mb-2">
                    <option value="1" selected disabled>Choose Option</option>
                    <?php $i = 2;
                    foreach($giving_options as $giving_option) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $giving_option['lit_giving_option_name']; ?></option>
                    <?php $i++; } ?>
                </select>
            </div>
            <div class="payment-tabs__content text-center">
                <div id="tab-1" class="tab-content payment-media"></div>
                <?php $i = 2;
                foreach($giving_options as $giving_option) { ?>
                    <div id="tab-<?php echo $i; ?>" class="tab-content payment-media">
                        <?php echo wpautop($giving_option['lit_giving_option_details']); ?>
                    </div>
                <?php $i++; } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
get_footer();
