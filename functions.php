<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');
    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');
    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

function modify_jquery_version()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.s');
        // wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.6.0.slim.min.js', false, '3.6.s');
        wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-3.6.0.min.js', false, '3.6.0', true);
        wp_get_script_tag(
            array(
                'src'      => '/wp-content/themes/lc-hinoki/js/jquery-3.6.0.min.js',
                'defer' => true,
            )
        );
    }
}
add_action('init', 'modify_jquery_version');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
    // wp_enqueue_script( 'jquery');
    // wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    //     wp_enqueue_script( 'comment-reply' );
    // }
}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('lc-hinoki', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

function kill_theme($themes)
{
    unset($themes['understrap']);
    return $themes;
}
add_filter('wp_prepare_themes_for_js', 'kill_theme');

function widgets_init()
{
    // register_sidebar(
    //     array(
    //         'name'          => __('Footer Col 1', 'lc-hinoki'),
    //         'id'            => 'footer-1',
    //         'description'   => __('Footer Col 1', 'lc-hinoki'),
    //         'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
    //         'after_widget'  => '</div>',
    //     )
    // );

    register_nav_menus(array(
        'primary_nav' => __('Primary Nav', 'lc-hinoki'),
        'footer_menu1' => __('Footer Nav 1', 'lc-hinoki'),
        'footer_menu2' => __('Footer Nav 2', 'lc-hinoki'),
    ));

    unregister_sidebar('hero');
    unregister_sidebar('herocanvas');
    unregister_sidebar('statichero');
    unregister_sidebar('left-sidebar');
    unregister_sidebar('right-sidebar');
    unregister_sidebar('footerfull');
    unregister_nav_menu('primary');
}
add_action('widgets_init', 'widgets_init', 11);


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' 	=> 'Site Wide Settings',
            'menu_title'	=> 'Site Wide Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
        )
    );
}

add_action('wp_dashboard_setup', 'remove_draft_widget', 999);
function remove_draft_widget()
{
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}


add_action('admin_menu', 'remove_comments_menu');
function remove_comments_menu()
{
    remove_menu_page('edit-comments.php');
}

add_filter('theme_page_templates', 'child_theme_remove_page_template');
function child_theme_remove_page_template($page_templates)
{
    unset($page_templates['page-templates/blank.php'],$page_templates['page-templates/empty.php'], $page_templates['page-templates/fullwidthpage.php'], $page_templates['page-templates/left-sidebarpage.php'], $page_templates['page-templates/right-sidebarpage.php'], $page_templates['page-templates/both-sidebarspage.php']);
    return $page_templates;
}
add_action('after_setup_theme', 'remove_understrap_post_formats', 11);
function remove_understrap_post_formats()
{
    remove_theme_support('post-formats', array( 'aside', 'image', 'video' , 'quote' , 'link' ));
}

define('LC_THEME_DIR', WP_CONTENT_DIR . '/themes/lc-hinoki');

require_once LC_THEME_DIR . '/inc/lc-theme.php';


function gb_gutenberg_admin_styles()
{
    echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1240px;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1280px;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }	
        </style>
    ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');

//Disable the new user notification sent to the site admin
function lc_disable_new_user_notifications()
{
    //Remove original use created emails
    remove_action('register_new_user', 'wp_send_new_user_notifications');
    remove_action('edit_user_created_user', 'wp_send_new_user_notifications', 10, 2);
    
    //Add new function to take over email creation
    add_action('register_new_user', 'lc_send_new_user_notifications');
    add_action('edit_user_created_user', 'lc_send_new_user_notifications', 10, 2);
}
function lc_send_new_user_notifications($user_id, $notify = 'user')
{
    if (empty($notify) || $notify == 'admin') {
        return;
    } elseif ($notify == 'both') {
        //Only send the new user their email, not the admin
        // 		$notify = 'user';
        return;
    }
    wp_send_new_user_notifications($user_id, $notify);
}
add_action('init', 'lc_disable_new_user_notifications');
