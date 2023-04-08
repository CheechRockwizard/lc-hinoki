<?php

$today = date("Ymd");
$q = new WP_Query(array(
    'post_type' => 'whatson',
    'posts_per_page' => -1,
    'meta_key'          => 'start_date',
    'orderby'           => 'meta_value',
    'order'             => 'ASC',
    'meta_query' => array(
        array(
          'key' => 'start_date',
          'value' => $today,
          'compare' => '>='
        )
    )
));

if ($q->have_posts()) {
    ?>
<section class="whatson">
    <div class="container-xl">
        <div class="washi mx-md-4 pb-4">
            <h2 class="h3 heading--underline">What's On</h2>
            <?php
                while ($q->have_posts()) {
                    $q->the_post();
                    $t = get_the_terms(get_the_ID(), 'etype');
                    $icon = get_field('icon', $t[0]);
                    ?>
            <div class="row">
                <div class="col-md-2 whatson__type px-md-0">
                    <img src="<?=$icon?>" width=55 height=55>
                    <div><?=$t[0]->name?></div>
                </div>
                <div class="col-md-6 whatson__detail">
                    <p><?=get_field('description', get_the_ID())?>
                    </p>
                </div>
                <div class="col-md-3 whatson__date">
                    <?=get_field('start_date', get_the_ID())?>
                    <?php
    if (get_field('end_date', get_the_ID()) && get_field('end_date', get_the_ID()) != get_field('start_date', get_the_ID())) {
        echo ' - ' . get_field('end_date', get_the_ID());
    }

    if (get_field('start_time', get_the_ID())) {
        echo '<div>';
        echo get_field('start_time', get_the_ID());
        if (get_field('end_time', get_the_ID())) {
            echo ' - ' . get_field('end_time', get_the_ID());
        }
        echo '</div>';
    }
                    ?>
                </div>
                <div class="col-md-1 d-flex align-items-center"><a
                        href="<?=get_field('registration_link', get_the_ID())?>"
                        class="d-block mb-2">Register</a>
                </div>
            </div>
            <?php
                }
    ?>
        </div>
    </div>
</section>
<?php
}
?>