<?php
/* Template Name: Our Vision */
get_header();
$first_content = get_field('lit_about_subpage_first_content');
$title = get_field('lit_about_subpage_title');
$second_content = get_field('lit_about_subpage_second_content');

if($first_content || $title || $second_content) { ?>
    <?php if(!empty($first_content)) { ?>
        <section class="section-text pt-xl-5 pt-lg-4 pt-md-3 pt-2">
            <h2 class="d-none">Title</h2>
            <div class="container text-center block-width-65 mx-auto">
                <?php echo wpautop($first_content); ?>
            </div>
        </section>
    <?php } ?>

    <section class="section text-center py-xl-5 py-lg-4 py-md-3 py-2">
        <div class="container">
            <?php if(!empty($title)) { ?>
                <header class="block-title text-center block-width-60 mx-auto mb-lg-3 mb-2">
                    <h2><?php echo $title; ?></h2>
                </header>
            <?php }
                if(!empty($second_content)) {
                    echo wpautop($second_content);
                }
            ?>
        </div>
    </section>
<?php } ?>

<?php
get_footer();
