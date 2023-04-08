<?php
$order_left = (get_field('order') == 'Image / Text') ? ' order-2 order-lg-1' : 'order-2 order-lg-2';
$order_right = (get_field('order') == 'Image / Text') ? 'order-1 order-lg-2' : 'order-1 order-lg-1';

?>
<div class="paneSix py-5">
    <div class="container-xl">
        <h2><?=get_field('name')?></h2>
        <div class="row">
            <div class="col-md-6 <?=$order_left?>">
                <div class="image mx-auto">
                    <div class="bg"></div>
                    <img src="<?=wp_get_attachment_image_url(get_field('image'), 'large')?>"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 my-auto <?=$order_right?>">
                <p><?=get_field('bio')?></p>
            </div>
        </div>
    </div>
</div>