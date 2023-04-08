<?php
function acf_flex_block()
{
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'				=> 'LC Hero',
            'title'				=> __('LC Hero'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/image_hero.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'image', 'hero' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Full Width',
            'title'				=> __('LC Full Width'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/full_width.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'full', 'width' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Text Image Washi',
            'title'				=> __('LC Text Image Washi'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/text_image.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'text', 'image', 'washi' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Text Image',
            'title'				=> __('LC Text Image'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/text_image_plain.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'text', 'image' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Text Map',
            'title'				=> __('LC Text Map'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/text_map.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'text', 'map' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Text Location',
            'title'				=> __('LC Text Location'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/text_location.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'text', 'location' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Text Button 60:40',
            'title'				=> __('LC Text Button 60:40'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/text_6040.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'text', '60', '40' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Page Title',
            'title'				=> __('LC Page Title'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/page_title.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'page', 'title' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Secondary Nav',
            'title'				=> __('LC Secondary Nav'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/secondary.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'secondary', 'nav' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Rollover Nav',
            'title'				=> __('LC Rollover Nav'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/rollover.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'rollover', 'nav' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC CTA Block',
            'title'				=> __('LC CTA Block'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/cta_block.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'cta' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Button',
            'title'				=> __('LC Button'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/button.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'button' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC 2 Buttons',
            'title'				=> __('LC 2 Buttons'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/buttons.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'buttons' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Client Quote',
            'title'				=> __('LC Client Quote'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/client_quote.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'client', 'quote' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Card Grid',
            'title'				=> __('LC Card Grid'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/card_grid.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'card', 'grid' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Latest News',
            'title'				=> __('LC Latest News'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/latest_news.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'latest', 'news' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Newsletter',
            'title'				=> __('LC Newsletter'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/newsletter.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'newsletter' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Upcoming Sessions',
            'title'				=> __('LC Upcoming Sessions'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/upcoming.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'upcoming', 'sessions' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Latest Banner',
            'title'				=> __('LC Latest Banner'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/latest.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'latest', 'banner' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));

        // corporate blocks
        acf_register_block(array(
            'name'				=> 'LC Corp - Intro',
            'title'				=> __('LC Corp - Intro'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_intro.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'intro' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Two',
            'title'				=> __('LC Corp - Pane Two'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneTwo.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'two' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Three',
            'title'				=> __('LC Corp - Pane Three'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneThree.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'three' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Four',
            'title'				=> __('LC Corp - Pane Four'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneFour.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'four' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Six',
            'title'				=> __('LC Corp - Pane Six'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneSix.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'Six' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Seven',
            'title'				=> __('LC Corp - Pane Seven'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneSeven.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'Seven' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Eight',
            'title'				=> __('LC Corp - Pane Eight'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneEight.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'Eight' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> 'LC Corp - Pane Nine',
            'title'				=> __('LC Corp - Pane Nine'),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/corp_paneNine.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'corp', 'pane', 'Nine' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block(array(
            'name'				=> "LC What's On",
            'title'				=> __("LC What's On"),
            'description'		=> __(''),
            'render_template'	=> 'page-templates/blocks/whatson_list.php',
            'category'			=> 'layout',
            'icon'				=> 'excerpt-view',
            'keywords'			=> array( 'what' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
    }
}
add_action('acf/init', 'acf_flex_block');
