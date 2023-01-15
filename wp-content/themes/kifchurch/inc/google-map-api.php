<?php
/**
 * @package kifchurch
 */

function lit_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDv_Ro1zA1iah-9UuKW8xgJfl4hHtbQwQU';
    return $api;
}
add_filter('acf/fields/google_map/api', 'lit_acf_google_map_api');