<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-hinoki
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<div class="footer pb-3">
    <div class="container pt-5">
        <div class="row mb-4">
            <div class="col-lg-3 mb-4 text-center text-lg-left mb-lg-2">
                <a href="/"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/hinoki-logo.svg"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
            <div
                class="col-md-4 col-lg-3 mb-2 d-flex flex-column align-items-center align-items-md-start justify-content-between">
                <?php
                if (get_field('contact_phone', 'options')) {
                    ?>
                <div class="mb-2"><i class="icon-phone"></i>
                    <?=do_shortcode('[contact_phone]')?>
                </div>
                <?php
                }
?>
                <div class="mb-2"><i class="icon-envelope-o"></i>
                    <?=do_shortcode('[contact_email]')?>
                </div>
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
        </div>
        <div class="colophon">
            <div class="row">
                <div class="text-center text-md-left col-md-4 mb-2">
                    &copy; <?=date('Y')?> HINOKI
                    Forest Bathing
                </div>
                <div class="col-md-4 text-center mb-2">
                    <a href="/terms-conditions/">Terms &amp; Conditions</a> |
                    <a href="/privacy-policy/">Privacy Policy</a> |
                    <a href="/cookie-policy/">Cookie Policy</a>
                </div>
                <div class="col-md-4 text-center text-md-right mb-2">
                    Site by <a href="https://www.lamcat.co.uk/" target="_blank" rel="noopener">Lamcat</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<!-- <div class="scroll-button"></div> -->
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>