<?php
/*
    Template Name: Gallery
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;


add_action('wp_head',function(){
    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <?php
});


get_header();

?>
<main id="main">
    <div class="container">
        <h1 class="pt-5 text-center heading--underline_center"><?=get_the_title()?></h1>
        <div class="row filters">
            <div class="col-md-5 mb-4">
                <strong>Location:</strong>
                <?php
                $locas = get_terms( array('taxonomy' => 'locations') );
                echo '<select name="filter-loca" id="loca" value-group="loca" class="form-control">';
                echo '<option value="*">Show All</option>';
                foreach ($locas as $l) {
                    echo '<option value=".' . $l->slug . '">' . $l->name . '</option>';
                }
                echo '</select>';
                ?>
            </div>
            <div class="col-md-5 mb-4">
                <strong>Sense:</strong>
                <?php
                $senses = get_terms( array('taxonomy' => 'senses') );
                echo '<select name="filter-sense" id="sense" value-group="sense" class="form-control">';
                echo '<option value="*">Show All</option>';
                foreach ($senses as $s) {
                    echo '<option value=".' . $s->slug . '">' . $s->name . '</option>';
                }
                echo '</select>';
                ?>
            </div>
            <div class="col-md-2 mb-4 d-flex align-items-end">
                <div class="btn btn-outline" id="reset">Reset</div>
            </div>
        </div>
        <?php
        $gallery = get_field('gallery');
        ?>
        <div id="grid">
            <div class="grid-sizer"></div>
            <?php
            foreach ($gallery as $g) {
                $locas = get_the_terms($g['ID'], 'locations');
                $classes = '';
                if ($locas) {
                    $classes = join(' ', wp_list_pluck($locas, 'slug'));
                }
                $senses = get_the_terms($g['ID'], 'senses');
                if ($senses) {
                    $classes .= ' ';
                    $classes .= join(' ', wp_list_pluck($senses, 'slug'));
                }
                ?>
            <div class="grid-item <?=$classes?> text-center"><a data-fancybox="gallery" href="<?=$g['url']?>" data-caption="<b><?=htmlentities2($g['caption'])?></b><br/><?=htmlentities2($g['description'])?>"><img src="<?=$g['sizes']['medium']?>" class="img-fluid"></a></div>
                <?php
            }
            ?>
        </div>
    </div>
</main>
<?php
add_action('wp_footer',function(){
    ?>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
(function($){

    Fancybox.bind("[data-fancybox]", {
        groupAttr: false,
    });

    var $grid = $('#grid').isotope({
		itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
	});

    <?php
    if (get_query_var('loca') || get_query_var('sense')) {
        if (get_query_var('loca')) {
            $l = $_GET['loca'];
            ?>
    $("#loca").val('.<?=$l?>').change();
    $("#sense").val('*').change();
    $grid.isotope({filter: '.<?=$l?>'});
            <?php
        }
        elseif (get_query_var('sense')) {
            $s = $_GET['sense'];
            ?>
    $("#loca").val('*').change();
    $("#sense").val('.<?=$s?>').change();
    $grid.isotope({filter: '.<?=$s?>'});
            <?php
        }
    }
    ?>
    
    var filters = {};

    $('.filters').on('change',function(e) {
        var $select = $( e.target );
        var filterGroup = $select.attr('value-group');
        filters[ filterGroup ] = e.target.value;
        var filterValue = concatValues( filters );
        $grid.isotope({ filter: filterValue });
    });

    function concatValues( obj ) {
        var value = '';
        for (var prop in obj) {
            value += obj[ prop ];
        }
        return value;
    }

    $('#reset').on('click',function(){
        // e.preventDefault();
        $('#loca').prop('selectedIndex',0);
        $('#sense').prop('selectedIndex',0);
        filters = {};
        $grid.isotope({ filter: '*' });
    })

})( jQuery );
</script>
    <?php
},9999);


get_footer();