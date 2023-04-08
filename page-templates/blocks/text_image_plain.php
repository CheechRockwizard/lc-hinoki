<?php
$py = isset(get_field('compact')[0]) == 'Yes' ? '' : 'py-5';
$order_left = (get_field('order') == 'text_image') ? ' order-2 order-lg-1' : 'order-2 order-lg-2';
$order_right = (get_field('order') == 'text_image') ? 'order-1 order-lg-2' : 'order-1 order-lg-1';

$aspect = get_field('image_aspect') == 'portrait' ? 'image--portrait' : 'image--landscape';
$padding = get_field('image_aspect') == 'portrait' ? 'padding--portrait' : 'padding--landscape';


?>
<!-- text_image_plain -->
<?php
if (get_field('id')) {
    ?>
<span class="anchor"
    id="<?=get_field('id')?>"></span>
<?php
}
?>
<section class="text_image_plain container-xl <?=$py?>">
    <div class="row">
        <div class="col-lg-6 my-auto <?=$order_left?>">
            <?php
            if (get_field('title')) {
                ?>
            <!-- TITLE:<?=get_field('title')?>
            -->
            <h2 class="heading--underline">
                <?=get_field('title')?></h2>
            <?php
            }
?>
            <div class="content">
                <?=get_field('content')?>
            </div>
            <?php
if (get_field('cta')) {
    ?>
            <div class="cta">
                <a href="<?=get_field('cta')['url']?>"
                    class="btn btn-primary"><?=get_field('cta')['title']?></a>
            </div>
            <?php
}
?>
        </div>
        <div
            class="col-lg-6 d-flex mb-4 mb-lg-0 align-items-center justify-content-center <?=$order_right?> <?=$padding?>">
            <div class="imageBlock <?=$aspect?>"
                style="background-image:url(<?=wp_get_attachment_image_url(get_field('image'), 'full')?>)">
            </div>
        </div>
</section>