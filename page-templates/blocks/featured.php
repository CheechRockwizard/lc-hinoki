<?php
$posts = get_field('post');
?>
<!-- featured post -->
<section class="featured">
    <div class="container-xl">
        <div class="carousel slide" id="featured" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $colsLeft = count($posts) > 1 ? 'col-md-3 offset-md-1' : 'col-md-4';
$colsRight = count($posts) > 1 ? 'col-md-7' : 'col-md-8';
$active = 'active';
foreach ($posts as $p) {
    ?>
                <div class="carousel-item <?=$active?>">
                    <div class="washi mb-5">
                        <div class="row py-3">
                            <div class="<?=$colsLeft?> mb-2">
                                <?=get_the_post_thumbnail($p, 'full', array('class' => 'featured_image'))?>
                            </div>
                            <div class="<?=$colsRight?> mb-2">
                                <h2 class="h3 heading--underline">
                                    <?=get_the_title($p)?>
                                </h2>
                                <p><?=wp_trim_words(get_the_content(null, false, $p), 40)?>
                                </p>
                                <a class="has-arrow"
                                    href="<?=get_the_permalink($p)?>">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    $active = '';
}
?>
            </div>
            <?php
            if (count($posts) > 1) {
                ?>
            <div class="d-none d-md-flex carousel-control-prev" type="button" data-target="#featured" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
            <div class="d-none d-md-flex carousel-control-next" type="button" data-target="#featured" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
            <?php
            }
?>
        </div>
    </div>
</section>