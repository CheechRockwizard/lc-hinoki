<!-- cta_block -->
<section class="cta_block">
    <?php if (is_single()) {
        ?>
    <div class="py-5">
        <?php
    } else {
        ?>

    <div class="container-xl">
        <?php
    } ?>
        <div class="row">
            <div class="col-md-8 mb-4 mb-md-0">
                <h3 class="heading--underline"><?=get_field('title')?></h3>
                <div class="content"><?=get_field('content')?></div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <a href="<?=get_field('cta')['url']?>" class="btn btn-outline"><?=get_field('cta')['title']?></a>
            </div>
        </div>
    <?php
    if (!is_single()) {
        ?>
    </div>
        <?php
    }
    ?>
</section>