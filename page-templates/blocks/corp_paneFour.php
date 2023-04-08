<div class="paneFour py-5">
    <h2 class="text-center mb-5">Other Complementary Experiences</h2>
    <div class="paneFour__bg mb-4">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?=wp_get_attachment_image_url(get_field('image_1'), 'large')?>"
                        alt="">
                </div>
                <div class=" col-md-4">
                    <img src="<?=wp_get_attachment_image_url(get_field('image_2'), 'large')?>"
                        alt="">
                </div>
                <div class=" col-md-4 d-none d-md-block">
                    <img src="<?=wp_get_attachment_image_url(get_field('image_3'), 'large')?>"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <div class=" container-xl">
        <div class="row">
            <div class="col-md-6">
                <h3><?=get_field('col_1_title')?>
                </h3>
                <p><?=get_field('col_1')?></p>
            </div>
            <div class="col-md-6">
                <h3><?=get_field('col_2_title')?>
                </h3>
                <p><?=get_field('col_2')?></p>
            </div>
        </div>
    </div>
</div>