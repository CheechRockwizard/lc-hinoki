<section class="py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8">
                <?=get_field('content')?>
            </div>
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <a href="<?=get_field('link')['url']?>" target="<?=get_field('link')['target']?>" class="btn btn-outline"><?=get_field('link')['title']?></a>
            </div>
        </div>
    </div>
</section>