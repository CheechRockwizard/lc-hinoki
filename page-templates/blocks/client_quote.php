<?php
$order = (get_field('order') == 'quote_left') ? '' : 'offset-lg-4';
?>
<!-- client_quote -->
<section class="py-5">
    <div class="container-xl">
        <div class="d-flex align-items-center quote" style="background-image:url(<?=wp_get_attachment_image_url( get_field('background'), 'full' )?>">
            <div class="overlay"></div>
            <div class="row">
                <div class="col-lg-8 <?=$order?>">
                    <div class="quote__container">
                        <div class="quote__body"><?=get_field('quote')?></div>
                        <div class="quote__cite">- <?=get_field('citation')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>