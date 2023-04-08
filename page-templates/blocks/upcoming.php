<section class="upcoming py-5">
    <div class="container-xl">
        <h3 class="heading--underline mb-4">Upcoming Sessions</h3>
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <?php
                $left = get_field('left_card');
                ?>
                <a href="<?=$left['link']?>" class="no-underline">
                    <div class="upcoming__card">
                        <div class="overlay--grad"></div>
                        <div class="upcoming__image" style="background-image:url(<?=wp_get_attachment_image_url( $left['image'], 'large' )?>"></div>
                        <div class="upcoming__detail">
                            <div class="upcoming__pre-title"><?=$left['pre_title']?></div>
                            <div class="upcoming__title"><?=$left['title']?></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
            <?php
                $right = get_field('right_card');
                ?>
                <a href="<?=$right['link']?>" class="no-underline">
                    <div class="upcoming__card">
                        <div class="overlay--grad"></div>
                        <div class="upcoming__image" style="background-image:url(<?=wp_get_attachment_image_url( $right['image'], 'large' )?>"></div>
                        <div class="upcoming__detail">
                            <div class="upcoming__pre-title"><?=$right['pre_title']?></div>
                            <div class="upcoming__title"><?=$right['title']?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>