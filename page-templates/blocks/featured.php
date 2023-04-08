<?php
$posts = get_field('post');
?>
<!-- featured post -->
<section class="featured">
    <div class="container-xl">
        <?php
        foreach ($posts as $p) {
            echo $p;
        }
?>
    </div>
</section>