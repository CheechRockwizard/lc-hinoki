<?php
$py = get_field('compact')[0] == 'Yes' ? '' : 'py-5';
$order_left = (get_field('order') == 'text_image') ? ' textBlock-left order-2 order-lg-1' : ' textBlock-right order-2 order-lg-2';
$order_right = (get_field('order') == 'text_image') ? 'imageBlock-right order-1 order-lg-2' : 'imageBlock-left order-1 order-lg-1';

$aspect = get_field('image_aspect') == 'portrait' ? 'image--portrait' : 'image--landscape';
$padding = get_field('image_aspect') == 'portrait' ? 'padding--portrait' : 'padding--landscape';

?>
<!-- text_location -->
<?php
if (get_field('id')) {
    ?>
<span class="anchor" id="<?=get_field('id')?>"></span>
    <?php
}
?>
<section class="text_image container-xl <?=$py?>">
    <div class="row">
        <div class="col-lg-7 my-auto <?=$order_left?>">
            <div class="washi">
                <h2 class="heading--underline"><?=get_field('title')?></h2>
                <div class="content">
                    <?=get_field('content')?>
                    <?php
                    if (get_Field('what3words')) {
                        ?>
                    <div><strong>What 3 Words</strong> <a href="https://what3words.com/<?=get_field('what3words')?>" target="_blank" translate="no">///<?=get_field('what3words')?></a></div>
                        <?php
                    }
                    ?>
                </div>
                <div class="cta">
                    <a href="<?=get_field('directions_url')?>" class="btn btn-primary">Get Directions</a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 d-flex mb-4 mb-lg-0 align-items-center justify-content-center <?=$order_right?> <?=$padding?>">
            <div class="imageBlock <?=$aspect?>" style="background-image:url(<?=wp_get_attachment_image_url( get_field('image'), 'full' )?>)"></div>
        </div>
    </div>
</section>