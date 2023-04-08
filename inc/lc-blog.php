<?php

function lc_post_nav()
{
        ?>
        <div class="d-flex justify-content-center justify-content-sm    -between flex-wrap w-100">
        <?php
        $prev_post_obj = get_adjacent_post( '', '', true );
        if ($prev_post_obj) {
            $prev_post_ID   = isset( $prev_post_obj->ID ) ? $prev_post_obj->ID : '';
            $prev_post_link     = get_permalink( $prev_post_ID );
            ?>
        <a href="<?php echo $prev_post_link; ?>" rel="next" class="btn btn-previous mb-4 mb-sm-0">Previous</a>
           <?php
        }

        $next_post_obj  = get_adjacent_post( '', '', false );
        if ($next_post_obj) {
            $next_post_ID   = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
            $next_post_link     = get_permalink( $next_post_ID );
            ?>
        <a href="<?php echo $next_post_link; ?>" rel="next" class="btn btn-next mb-4 mb-sm-0">Next</a>
           <?php
        }
        ?>
        </div>
        <?php

}

function recent_posts($post)
{
    ob_start();

    $q = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'post__not_in' => array( $post )
    ));

    if ($q->have_posts()) {
        ?>
        <div class="recent_news">
            <div class="row">
            <?php
            while ($q->have_posts()) {
                $q->the_post();
                $img = get_the_post_thumbnail_url( get_the_ID() , 'medium' ) ? get_the_post_thumbnail_url( get_the_ID() , 'medium' ) : get_stylesheet_directory_uri() . '/img/hinoki-logo-800x450.png';
                ?>
                <div class="col-12 col-md-4 col-lg-12 mb-4">
                    <div class="recent">
                        <a href="<?=get_the_permalink()?>">
                            <div class="recent__image" style="background-image:url('<?=$img?>"></div>
                            <div class="recent__card">
                                <div class="recent__date"><?=get_the_date()?></div>
                                <div class="recent__title"><?=get_the_title()?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
        <?php
    }

    wp_reset_postdata();
    $ob_str = ob_get_contents();
    ob_end_clean();
    return $ob_str;
}


function related_posts() {

    ob_start();

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);

    $query_args = array( 
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '3',
     );

    $related_cats_post = new WP_Query( $query_args );

    if ($related_cats_post->have_posts()) {
        ?>
        <hr class="my-4">
        <div class="recent_news">
            <div class="h3 mb-4">Related Posts</div>
            <div class="row">
            <?php
            while ($related_cats_post->have_posts()){
                $related_cats_post->the_post(); 
                $img = get_the_post_thumbnail_url( get_the_ID() , 'medium' ) ? get_the_post_thumbnail_url( get_the_ID() , 'medium' ) : get_stylesheet_directory_uri() . '/img/hinoki-logo-800x450.png';
                ?>
                <div class="col-md-4">
                    <div class="news__item">
                        <a href="<?=get_the_permalink()?>">
                            <div class="news__image" style="background-image:url('<?=$img?>"></div>
                            <div class="news__inner">
                                <div class="news__date"><?=get_the_date()?></div>
                                <div class="news__title"><?=get_the_title()?></div>
                                <div class="news__link">Read more</div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
        <?php
    }

     wp_reset_postdata();
     $ob_str = ob_get_contents();
     ob_end_clean();
     return $ob_str;

}

function related_posts_by_cat($cat_id) {

    ob_start();

    $query_args = array( 
        'category__in'   => $cat_id,
        'post_type'      => 'post',
        'posts_per_page'  => '3',
     );

    $related_cats_post = new WP_Query( $query_args );

    if ($related_cats_post->have_posts()) {
        ?>
        <div class="recent_news">
            <div class="h2 mb-4">Related Posts</div>
            <div class="row">
            <?php
            while ($related_cats_post->have_posts()){
                $related_cats_post->the_post(); 
                ?>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="news__item">
                        <a href="<?=get_the_permalink()?>">
                            <div class="news__image" style="background-image:url('<?=get_the_post_thumbnail_url(get_the_ID(), 'medium')?>"></div>
                            <div class="news__inner">
                                <div class="news__date"><?=get_the_date()?></div>
                                <div class="news__title"><?=get_the_title()?></div>
                                <div class="news__link">Read more</div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
        <?php
    }

     wp_reset_postdata();
     $ob_str = ob_get_contents();
     ob_end_clean();
     return $ob_str;

}

function latest_posts()
{
    ob_start();

    $q = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
    ));

    if ($q->have_posts()) {
        echo '<div class="row">';
        while ($q->have_posts()) {
            $q->the_post(); ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="recent">
                    <a href="<?=get_the_permalink(get_the_ID())?>">
                        <div class="recent__imagecontainer">
                            <div class="recent__image" style="background-image:url('<?=get_the_post_thumbnail_url(get_the_ID(), 'medium')?>"></div>
                        </div>
                        <div class="recent__card">
                            <h3 class="recent__title"><?=get_the_title()?></h3>
                            <div class="recent__date"><?=get_the_date()?></div>
                            <div><?=wp_trim_words( get_the_content(), 20 )?></div>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    }

    wp_reset_postdata();
    $ob_str = ob_get_contents();
    ob_end_clean();
    return $ob_str;
}
