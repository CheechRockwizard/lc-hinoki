<?php
$py = isset(get_field('compact')[0]) == 'Yes' ? '' : 'py-5';
$order_left = (get_field('order') == 'text_image') ? ' textBlock-left order-2 order-lg-1' : ' textBlock-right order-2 order-lg-2';
$order_right = (get_field('order') == 'text_image') ? 'imageBlock-right order-1 order-lg-2' : 'imageBlock-left order-1 order-lg-1';
$attrib = (get_field('order') == 'text_image') ? 'attrib--right' : 'attrib--left';
?>
<!-- text_image -->
<?php
if (get_field('id')) {
    ?>
<span class="anchor"
    id="<?=get_field('id')?>"></span>
<?php
}
?>
<section class="text_image container-xl <?=$py?>">
    <div class="row">
        <div class="col-lg-6 my-auto <?=$order_left?>">
            <div class="washi">
                <?php
                if (get_field('title')) {
                    ?>
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
        </div>
        <div class="col-lg-6 <?=$order_right?>">
            <div class="imageBlock"
                style="background-image:url(<?=wp_get_attachment_image_url(get_field('image'), 'full')?>)">
                <?php
if (wp_get_attachment_caption(get_field('image'))) {
    echo '<div class="attrib ' . $attrib . '">' . wp_get_attachment_caption(get_field('image')) . '</div>';
}
?>
            </div>
        </div>
    </div>
</section>