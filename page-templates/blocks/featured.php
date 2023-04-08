<?php
$posts = get_field('post');
?>
<!-- featured post -->
<section class="featured">
    <div class="container-xl">
        <div class="carousel slide" id="featured" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $active = 'active';
foreach ($posts as $p) {
    ?>
                <div class="carousel-item <?=$active?>">
                    <div class="washi p-4 mb-5">
                        <div class="row">
                            <div class="col-md-3 offset-md-1 mb-2">
                                <?=get_the_post_thumbnail($p, 'full')?>
                            </div>
                            <div class="col-md-7 mb-2">
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