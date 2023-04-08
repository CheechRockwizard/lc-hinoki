<div class="paneThree py-5">
    <div class="container-xl">
        <h2 class="text-center mb-5">
            <?=get_field('title')?>
        </h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12 order-1">
                        <h3><?=get_field('col1_title')?>
                        </h3>
                    </div>
                    <div class="col-12 order-2 order-lg-3">
                        <img src="<?=wp_get_attachment_image_url(get_field('col1_image'), 'large')?>"
                            alt="">
                    </div>
                    <div class="col-12 order-3 order-lg-2">
                        <p><?=get_field('col1_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12 order-1 order-lg-2">
                        <h3><?=get_field('col2_title')?>
                        </h3>
                    </div>
                    <div class="col-12 order-2 order-lg-1">
                        <img src="<?=wp_get_attachment_image_url(get_field('col2_image'), 'large')?>"
                            alt="">
                    </div>
                    <div class="col-12 order-3 order-lg-3">
                        <p><?=get_field('col2_content')?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12 order-1">
                        <h3><?=get_field('col3_title')?>
                        </h3>
                    </div>
                    <div class="col-12 order-2 order-lg-3">
                        <img src="<?=wp_get_attachment_image_url(get_field('col3_image'), 'large')?>"
                            alt="">
                    </div>
                    <div class="col-12 order-3 order-lg-2">
                        <p><?=get_field('col3_content')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>