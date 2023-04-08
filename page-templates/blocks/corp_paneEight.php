<div class="paneEight py-5">
    <div class="container-xl">
        <h2 class="text-center mb-5">
            <?=get_field('title')?>
        </h2>
        <div class="row justify-content-center mb-4">
            <div class="col-md-4 mb-4 text-center">
                <h3><?=get_field('col1_title')?>
                </h3>
                <strong><?=get_field('col1_overview')?></strong><br>
                <strong><?=get_field('col1_capacity')?></strong>
                <div class="card p-4 my-4">
                    <?php
                    $c = 1;
            $hr = '';
            while (have_rows('col1_session')) {
                the_row();
                ?>
                    <?=$hr?>
                    <strong>(<?=$c?>)
                        <?=get_sub_field('title')?></strong>
                    <?=get_sub_field('detail')?>
                    <?php
                $c++;
                $hr = '<hr class="my-2">';
            }
            ?>
                </div>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <h3><?=get_field('col2_title')?>
                </h3>
                <strong><?=get_field('col2_overview')?></strong><br>
                <strong><?=get_field('col2_capacity')?></strong>
                <div class="card p-4 my-4">
                    <?php
                        $c = 1;
            $hr = '';
            while (have_rows('col2_session')) {
                the_row();
                ?>
                    <?=$hr?>
                    <strong>(<?=$c?>)
                        <?=get_sub_field('title')?></strong>
                    <?=get_sub_field('detail')?>
                    <?php
                $c++;
                $hr = '<hr class="my-2">';
            }
            ?>
                </div>
            </div>
            <div class="col-md-4 mb-4 text-center">
                <h3><?=get_field('col3_title')?>
                </h3>
                <strong><?=get_field('col3_overview')?></strong><br>
                <strong><?=get_field('col3_capacity')?></strong>
                <div class="card p-4 my-4">
                    <?php
                    $c = 1;
            $hr = '';
            while (have_rows('col3_session')) {
                the_row();
                ?>
                    <?=$hr?>
                    <strong>(<?=$c?>)
                        <?=get_sub_field('title')?></strong>
                    <?=get_sub_field('detail')?>
                    <?php
                $c++;
                $hr = '<hr class="my-2">';
            }
            ?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3><?=get_field('after_title')?>
            </h3>
            <p><?=get_field('after_content')?>
            </p>
            <p class="small">
                <?=get_field('fine_print')?></p>
        </div>
    </div>
</div>