<?php
/**
 * The main template file
 *
 * @package lc-hinoki
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<main id="main" class="news_archive">
<section>
    <div class="container-xl">
        <div class="hero d-flex flex-column justify-content-center align-items-center" style="background-image:url(<?=wp_get_attachment_image_url( get_field('news_index_hero','options'), 'full' )?>">
            <div class="overlay"></div>
            <h1 class="title heading--underline_center"><?=get_field('news_index_title','options')?></h1>
            <div class="max-ch text-center text-larger"><?=get_field('news_index_intro','options')?></div>
        </div>
    </div>
</section>
<section class="news py-5">
    <div class="container">
        <?php
            while (have_posts()) {
                the_post();
                $img = get_the_post_thumbnail_url( get_the_ID() , 'large' ) ? get_the_post_thumbnail_url( get_the_ID() , 'large' ) : get_stylesheet_directory_uri() . '/img/hinoki-logo-800x450.png';
                ?>
        <a href="<?=get_the_permalink()?>">
            <div class="row">
                <div class="col-md-3">
                    <div class="news__imagecontainer">
                        <div class="news__image mb-2" style="background-image:url(<?=$img?>)"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="news__content px-4 pt-2 pb-3">
                        <h3 class="news__title"><?=get_the_title()?></h3>
                        <div class="news__date"><?=get_the_date()?></div>
                        <div class="news__preview"><?=wp_trim_words( get_the_content(), 20)?></div>
                        <div class="news__link">Read more</div>
                    </div>
                </div>
            </div>
        </a>
        <hr class="mb-4">
                <?php
            }
            ?>
    </div>
</section>
<?=get_template_part( 'page-templates/blocks/newsletter')?>
</main>
<?php
get_footer();
