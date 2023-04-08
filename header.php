<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-hinoki
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/icomoon.woff"
        as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/icomoon.ttf?iodzlv"
        as="font" type="font/ttf" crossorigin="anonymous">
    <?php
    if (is_front_page()) {
        ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "HINOKI Forest Bathing",
            "url": "https://www.hinokiforestbathing.co.uk/",
            "sameAs":
            <?php
            $social = array();
        $s = get_field('social', 'options');
        if ($s['facebook_url']) {
            $social[] = $s['facebook_url'];
        }
        if ($s['instagram_url']) {
            $social[] = $s['instagram_url'];
        }
        if ($s['linkedin_url']) {
            $social[] = $s['linkedin_url'];
        }
        echo json_encode($social);
        ?>
            ,
            "logo": "<?=get_field('og_image', 'options')?>",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "<?=parse_phone(get_field('contact_phone', 'options'))?>",
                "contactType": "enquiries"
            }]
        }
    </script>
    <?php
    }

    if (get_field('ga_property', 'options')) {
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
            );
    </script>
    <?php
    }
    if (get_field('gtm_property', 'options')) {
        ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
            );
    </script>
    <!-- End Google Tag Manager -->
    <?php
    }
    if (get_field('google_site_verification', 'options')) {
        echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
    }
    if (get_field('bing_site_verification', 'options')) {
        echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
    }
?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
do_action('wp_body_open');
?>

    <div class="site" id="page">
        <div id="header" class="pt-3 fixed-top">
            <div class="container-xl px-xl-3">
                <div class="row mb-3">
                    <div class="d-none d-lg-block col-lg-4 my-auto">
                        <div class="social-icons">
                            <?php
                        $social = get_field('social', 'options');
if ($social['twitter_url'] ?? null) {
    ?>
                            <a href="<?=$social['twitter_url']?>"
                                rel="noopener" target="_blank" aria-label="Twitter"><i class="icon-twitter"></i></a>
                            <?php
}
if ($social['facebook_url'] ?? null) {
    ?>
                            <a href="<?=$social['facebook_url']?>"
                                rel="noopener" target="_blank" aria-label="Facebook"><i class="icon-facebook"></i></a>
                            <?php
}
if ($social['linkedin_url'] ?? null) {
    ?>
                            <a href="<?=$social['linkedin_url']?>"
                                rel="noopener" target="_blank" aria-label="LinkedIn"><i class="icon-linkedin"></i></a>
                            <?php
}
if ($social['instagram_url'] ?? null) {
    ?>
                            <a href="<?=$social['instagram_url']?>"
                                rel="noopener" target="_blank" aria-label="Instagram"><i class="icon-instagram"></i></a>
                            <?php
}
?>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center my-auto">
                        <a href="/" class="navbar-brand" rel="home" aria-label="hinoki"></a>
                        <button class="d-lg-none navbar-toggler input-button" id="navToggle" data-toggle="collapse"
                            data-target="#primaryNav" type="button"><i class="icon-navicon"></i></button>
                    </div>
                    <div class="d-none d-lg-block col-lg-4 text-right my-auto">
                        <a href="/book/" class="d-none d-lg-inline-block btn btn-outline">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div id="wrapper-navbar" class="container-xl px-xl-0">
                <nav id="main-nav" class="navbar navbar-expand-lg d-block p-0 mx-xl-3" aria-labelledby="main-nav-label">
                    <h2 id="main-nav-label" class="sr-only">Main Navigation</h2>
                    <?php
                    wp_nav_menu(
    array(
                            'theme_location'  => 'primary_nav',
                            'container_class' => 'collapse navbar-collapse flex-column justify-content-between w-100 px-4 px-lg-0 py-0',
                            'container_id'    => 'primaryNav',
                            'menu_class'      => 'navbar-nav w-100 justify-content-between align-items-center',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
);
?>
                </nav>
            </div>
        </div>