<section>
    <div class="container-xl">
        <div class="hero d-flex flex-column justify-content-center align-items-center" style="background-image:url(<?=wp_get_attachment_image_url( get_field('image'), 'full' )?>">
            <div class="overlay"></div>
            <h1 class="title heading--underline_center"><?=get_field('title')?></h1>
            <div class="max-ch text-center text-larger"><?=get_field('content')?></div>
        </div>
    </div>
</section>