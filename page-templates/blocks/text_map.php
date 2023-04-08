<?php
$py = get_field('compact')[0] == 'Yes' ? '' : 'py-5';
$order_left = (get_field('order') == 'text_map') ? ' textBlock-left order-2 order-lg-1' : ' textBlock-right order-2 order-lg-2';
$order_right = (get_field('order') == 'text_map') ? 'mapBlock-right order-1 order-lg-2' : 'mapBlock-left order-1 order-lg-1';
?>
<!-- text_map -->
<?php
if (get_field('id')) {
    ?>
<span class="anchor" id="<?=get_field('id')?>"></span>
    <?php
}
?>
<section class="text_map container-xl <?=$py?>">
    <div class="row">
        <div class="col-lg-6 my-auto <?=$order_left?>">
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
        <div class="col-lg-6 <?=$order_right?>">
            <div class="embed-responsive embed-responsive-1by1">
                <iframe src="<?=get_field('map_url')?>" class="embed-responsive-item" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>