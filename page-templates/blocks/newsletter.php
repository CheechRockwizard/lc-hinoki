<section class="newsletter">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="heading--underline">Stay in touch</h3>
                <div class="mb-2">Sign up to our HINOKI Insights</div>
                <?=do_shortcode('[mc4wp_form id="' . get_field('mc_form_id', 'options') . '"]')?>
            </div>
            <div class="col-md-6">
                <h3 class="heading--underline">Connect</h3>
                <div class="mb-2">Find us on social media</div>
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
    </div>
</section>