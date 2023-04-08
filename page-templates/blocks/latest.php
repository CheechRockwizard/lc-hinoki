<?php
if (get_field('content')) {
	?>
<section>
    <div class="container-xl">
        <div class="washi mx-5 pb-4 text-center">
            <?=get_field('content')?>
        </div>
    </div>
</section>
    <?php
}