<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$cats = get_the_category();
$category = join(' ', wp_list_pluck($cats, 'slug'));
$category_nice = join(', ', wp_list_pluck($cats, 'name'));

?>
<main>
    <div class="container-lg pb-2">
        <div class="row">
            <div class="col-lg-9">
                <div class="mb-4">
                    <a href="/news/" class="back text-smaller">&lt; Back</a>
                    <img src="<?=get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" class="img-fluid mb-4" alt="<?=get_the_title()?>">
                    <h1 class="h2 heading--underline"><?=get_the_title()?></h1>
                    <div class="text-smaller mb-2">Posted on <?=get_the_date('jS F, Y')?><!-- in <?php the_category(', ');?> --></div>
                </div>
                <?php 
                the_post();
                the_content();
                echo '<div class="mt-5 mb-4">';
                lc_post_nav();
                echo '</div>';
                ?>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top sticky-offset">
                    <hr class="mb-4 d-lg-none">
                    <div class="h3 mb-2">Recent Posts</div>
                    <?=recent_posts(get_the_ID())?>
                </div>
            </div>
        </div>
    </div>
    <?=get_template_part( 'page-templates/blocks/newsletter')?>
</main>
<?php
get_footer();
