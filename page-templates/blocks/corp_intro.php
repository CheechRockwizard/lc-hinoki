<div class="d-flex align-items-center flex-column paneOne pb-2">
    <h1 class="text-center">
        <?=get_field('title')?>
    </h1>
    <div class="h2 mb-2">
        <?=get_field('subtitle')?>
    </div>
    <div class="">Plus</div>
    <section class="secondary mt-2 mb-4">
        <div class="container d-flex justify-content-center flex-wrap">
            <?=lc_lines_to_div(get_field('sessions'))?>
        </div>
    </section>
</div>