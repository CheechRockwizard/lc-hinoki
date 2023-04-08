<?php
$py = isset(get_field('compact')[0]) == 'Yes' ? '' : 'py-5';
$center = isset(get_field('center')[0]) == 'Yes' ? 'text-center' : '';
$larger = isset(get_field('larger')[0]) == 'Yes' ? 'text-larger' : '';
?>
<!-- full_width -->
<?php
if (get_field('id')) {
    ?>
<span class="anchor"
    id="<?=get_field('id')?>"></span>
<?php
}
?>
<div
    class="full_width container <?=$py?> <?=$center?> <?=$larger?>">
    <div class="max-ch mx-auto">
        <?=get_field('content')?>
    </div>
</div>