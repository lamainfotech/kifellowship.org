<?php

/**
 * @package kifchurch
 * 
 * =======================
 * REMOVE GENERATOR NUMBER
 * =======================
 */

// Remove version string from css and js
function kif_remove_wp_version_strings($src)
{
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}

add_filter('script_loader_src', 'kif_remove_wp_version_strings');
add_filter('style_loader_src', 'kif_remove_wp_version_strings');

// Remove meta tag generator
function kif_remove_meta_version()
{
    return '';
}

add_filter('the_generator', 'kif_remove_meta_version');


// This theme uses wp_nav_menu() in one location.
register_nav_menus(array(
    'nav-pri' => esc_html__('Primary', 'kifchurch'),
));


/**
 * Load Custom Nav Walker.
 */
if (!file_exists(get_template_directory() . '/inc/bootstrap-navwalker.php')) {
    wp_die('<div style="text-align:center"><h1 style="font-weight:normal">Custom Walker Nav Not Found</h1><p>Opps we have got error!<br>It appears the bootstrap-navwalker.php file may be missing.</p></div>', 'Custom Walker Nav Not Found');
} else {
    require_once get_template_directory() . '/inc/bootstrap-navwalker.php';
}
