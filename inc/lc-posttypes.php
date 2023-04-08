<?php

function create_posttype()
{
    register_post_type(
        'whatson',
        array(
            'labels' => array(
                'name' => __("What's On"),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => false,
            'show_in_rest' => true,
            'supports' => array('custom-fields'),
            'menu_icon' => 'dashicons-groups',
        )
    );
}
add_action('init', 'create_posttype');


function set_custom_title($post_id)
{
    if (get_post_type($post_id) != 'whatson') {
        return;
    }
    if (isset($_POST['acf']['field_63fb5ac75e86d']) ?? null) {
        $post_title = 'Event: ' . $_POST['acf']['field_63fb5ac75e86d'];
        if ($_POST['acf']['field_63fb5e8cc21ba'] != '') {
            $post_title .= ' - ' . $_POST['acf']['field_63fb5e8cc21ba'];
        }
        $slug = sanitize_title($post_title);
    }

    $post = array(
        'ID'           => $post_id,
        'post_title'   => $post_title,
        'post_name'    => $slug,
    );

    wp_update_post($post);
}
add_filter('acf/save_post', 'set_custom_title', 5);

function add_acf_columns($columns)
{
    return array_merge($columns, array(
      'start_date' => __('Start'),
      'end_date' => __('End'),
    ));
}
add_filter('manage_whatson_posts_columns', 'add_acf_columns');

function whatson_custom_column($column, $post_id)
{
    switch ($column) {
        case 'start_date':
            $date = strtotime(get_post_meta($post_id, 'start_date', true));
            echo date('jS M Y', $date);
            break;
        case 'end_date':
            if (get_post_meta($post_id, 'end_date', true)) {
                $date = strtotime(get_post_meta($post_id, 'end_date', true));
                echo date('jS M Y', $date);
            }
            break;
    }
}
add_action('manage_whatson_posts_custom_column', 'whatson_custom_column', 10, 2);


function lc_register_taxes()
{
    $args = [
        "labels" => [
            "name" => __("Event Types", "cb-afiniti"),
            "singular_name" => __("Event Type", "cb-afiniti"),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
    ];
    register_taxonomy("etype", [ "whatson" ], $args);
}
add_action('init', 'lc_register_taxes');
