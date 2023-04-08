<?php

require_once LC_THEME_DIR . '/inc/lc-performance.php';
require_once LC_THEME_DIR . '/inc/lc-utility.php';
require_once LC_THEME_DIR . '/inc/lc-posttypes.php';
require_once LC_THEME_DIR . '/inc/lc-blocks.php';
require_once LC_THEME_DIR . '/inc/lc-blog.php';


add_filter('wp_nav_menu_items', 'add_mobile_bits', 10, 2);
function add_mobile_bits($items, $args)
{
    if ($args->theme_location == 'primary_nav') {
        $social = get_field('social', 'options');

        $items .= '<li class="my-4 d-lg-none"><a href="/book/" class="d-inine-block d-lg-none btn btn-outline"">Book Now</a></li>';
        $items .= '<li class="mb-4 d-lg-none"><div class="social-icons">';
        if ($social['twitter_url'] ?? null) {
            $items .= '<a href="' . $social['twitter_url'] . '" rel="noopener" target="_blank" aria-label="Twitter"><i class="icon-twitter mx-4"></i></a>';
        }
        if ($social['facebook_url'] ?? null) {
            $items .= '<a href="' . $social['facebook_url'] . '" rel="noopener" target="_blank" aria-label="Facebook"><i class="icon-facebook mx-4"></i></a>';
        }
        if ($social['linkedin_url'] ?? null) {
            $items .= '<a href="' . $social['linkedin_url'] . '" rel="noopener" target="_blank" aria-label="LinkedIn"><i class="icon-linkedin mx-4"></i></a>';
        }
        if ($social['instagram_url'] ?? null) {
            $items .= '<a href="' . $social['instagram_url'] . '" rel="noopener" target="_blank" aria-label="Instagram"><i class="icon-instagram mx-4"></i></a>';
        }
        $items .= '</div></li>';
    }
    return $items;
}


function add_custom_query_var($vars)
{
    $vars[] = "loca";  // gallery location
    $vars[] = "sense";  // gallery sense
    return $vars;
}
add_filter('query_vars', 'add_custom_query_var');

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
    $my_attr = 'yourSubject';
 
    if (isset($atts[$my_attr])) {
        $out[$my_attr] = $atts[$my_attr];
    }
 
    return $out;
}
add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);
