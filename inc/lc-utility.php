<?php

function parse_phone($phone)
{
    $phone = preg_replace('/\s+/', '', $phone);
    $phone = preg_replace('/\(0\)/', '', $phone);
    $phone = preg_replace('/[\(\)\.]/', '', $phone);
    $phone = preg_replace('/-/', '', $phone);
    $phone = preg_replace('/^0/', '+44', $phone);
    return $phone;
}

add_shortcode('contact_phone', function () {
    $output = '<a href="tel:' . parse_phone(get_field('contact_phone', 'options')) . '">' . get_field('contact_phone', 'options') . '</a>';
    return $output;
});
add_shortcode('contact_email', function () {
    $output = '<a href="mailto:' . get_field('contact_email', 'options') . '">' . get_field('contact_email', 'options') . '</a>';
    return $output;
});
add_shortcode('contact_email_icon', function () {
    $output = '<a href="mailto:' . get_field('contact_email', 'options') . '"><i class="fas fa-envelope"></i></a>';
    return $output;
});
add_shortcode('social_fb_icon', function () {
    $social = get_field('social', 'options');
    $fburl = $social['facebook_url'];
    $output = '<a href="' . $fburl . '" target="_blank"><i class="fab fa-facebook-square"></i></a>';
    return $output;
});
add_shortcode('social_ig_icon', function () {
    $social = get_field('social', 'options');
    $igurl = $social['instagram_url'];
    $output = '<a href="' . $igurl . '" target="_blank"><i class="fab fa-instagram"></i></a>';
    return $output;
});
add_shortcode('social_tw_icon', function () {
    $social = get_field('social', 'options');
    $twurl = $social['twitter_url'];
    $output = '<a href="' . $twurl . '" target="_blank"><i class="fab fa-twitter-square"></i></a>';
    return $output;
});
add_shortcode('social_in_icon', function () {
    $social = get_field('social', 'options');
    $inurl = $social['linkedin_url'];
    $output = '<a href="' . $inurl . '" target="_blank"><i class="fab fa-linkedin"></i></a>';
    return $output;
});
add_shortcode('social_gp_icon', function () {
    $social = get_field('social', 'options');
    $gpurl = $social['google_url'];
    $output = '<a href="' . $gpurl . '" target="_blank"><i class="fas fa-globe-americas"></i></a>';
    return $output;
});


$this_options_breadcrumbs_sep = '';
$this_options_breadcrumbs_sep = apply_filters('wpseo_breadcrumb_separator', $this_options_breadcrumbs_sep);
function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep)
{
    return ' &raquo; ';
};
add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);


/**
 * Grab the specified data like Thumbnail URL of a publicly embeddable video hosted on Vimeo.
 *
 * @param  str $video_id The ID of a Vimeo video.
 * @param  str $data 	  Video data to be fetched
 * @return str            The specified data
 */
function get_vimeo_data_from_id($video_id, $data)
{
    // width can be 100, 200, 295, 640, 960 or 1280
    $request = wp_remote_get('https://vimeo.com/api/oembed.json?url=https://vimeo.com/' . $video_id . '&width=960');
    
    $response = wp_remote_retrieve_body($request);
    
    $video_array = json_decode($response, true);
    
    return $video_array[$data];
}

function lc_lines_to_div($field)
{
    ob_start();
    $field = strip_tags($field, '<br />');
    $bullets = preg_split("/\r\n|\n|\r/", $field);
    foreach ($bullets as $b) {
        if ($b == '') {
            continue;
        }
        ?>
<div><?=$b?></div>
<?php
    }
    return ob_get_clean();
}

function lc_lines_to_list($field)
{
    ob_start();
    $field = strip_tags($field, '<br />');
    $bullets = preg_split("/\r\n|\n|\r/", $field);
    foreach ($bullets as $b) {
        if ($b == '') {
            continue;
        }
        ?>
<li><?=$b?></li>
<?php
    }
    return ob_get_clean();
}
