<?php
/**
 * @package kifchurch
 */

add_filter('wp_nav_menu_items', 'add_cta_button', 10, 2);

function add_cta_button( $items, $args ) {
    
    // get menu
    $menu = wp_get_nav_menu_object($args->menu);
    
    
    // modify primary only
    if( $args->theme_location == 'nav-pri' ) {
        
        // vars
        $cta_btn = get_field('lit_header_cta_button', $menu);
        $cta_icon = get_field('lit_header_cta_icon', $menu);
        
        // append button
        $html_button = '<div class="btn-wrap mt-lg-0 mt-1 text-lg-left text-center">
                            <a href="'. $cta_btn['url'] .'" class="nav-button">'. $cta_btn['title'] .'<i class="icon-heart"></i></a>
                        </div>';
        
        // append html
        $items = $items . $html_button;
        
    }
    
    
    // return
    return $items;
    
}

// Remove Archive Prefix e.g Category, Tag, etc.
function kif_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
 
	return $title;
}

add_filter( 'get_the_archive_title', 'kif_archive_title' );
?>