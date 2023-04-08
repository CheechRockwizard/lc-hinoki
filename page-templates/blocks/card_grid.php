<section class="card_grid">
    <div class="container-xl">
        <div class="row">
            <?php
            $n = 0;
            while (have_rows('grid')) {
                the_row();
                // $onclick = get_sub_field('sample') ? 'onclick="play(\'' . get_sub_field('title') . '\')"' : '';
                ?>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card_grid__image mb-3" style="background-image:url(<?=wp_get_attachment_image_url( get_sub_field('image'), 'large' )?>)" title="<?=get_sub_field('title')?>"></div>
                <div class="h3"><?=get_sub_field('title')?></div>
                <div><?=get_sub_field('content')?></div>
                <?php
                if (get_sub_field('sample')) {
                    ?>
                <div class="text-center mt-2">
                    <a class="btn btn-outline" onclick="play('<?=$n?>')">Listen <i class="icon-play-circle b-play" id="play<?=$n?>"></i></a>
                    <audio id="audio<?=$n?>" src="<?=get_sub_field('sample')?>"></audio>
                </div>
                    <?php
                }
                ?>
            </div>
                <?php
                $n++;
            }
            ?>
        </div>
    </div>
</section>