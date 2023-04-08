<div class="paneTwo py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-7 d-flex justify-content-center align-items-center">
                <img src="<?=wp_get_attachment_image_url(get_field('image'), 'large')?>"
                    alt="">
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h2><?=get_field('title')?></h2>
                <?=get_field('content')?>
            </div>
        </div>
    </div>
</div>