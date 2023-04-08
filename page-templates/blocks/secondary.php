<style>
	.secondary a { margin: 0 1rem;}
</style>
<section class="d-none d-md-block secondary mt-5 mb-4">
    <div class="container d-flex justify-content-center flex-wrap">
    <?php
    while (have_rows('item')) {
        the_row();
        ?>
    <a href="#<?=get_sub_field('id')?>"><?=get_sub_field('title')?></a>
        <?php
    }
    ?>
    </div>
</section>