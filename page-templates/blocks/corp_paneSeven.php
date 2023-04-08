<div class="paneSeven py-5">
    <div class="container-xl">
        <h2 class="text-center mb-4">Corporate Wellbeing Events</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <?=lc_lines_to_list(get_field('card_one'))?>
                    <strong><?=get_field('card_one_capacity')?></strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <?=lc_lines_to_list(get_field('card_two'))?>
                    <strong><?=get_field('card_two_capacity')?></strong>
                </div>
            </div>
        </div>
    </div>
</div>