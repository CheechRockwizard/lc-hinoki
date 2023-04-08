<section class="icon_nav">
    <div class="container-xl pb-3">
        <?php
        $descriptions = array();
        while (have_rows('navigation', 'options')) {
            the_row();
            ?>
        <div class="icon_nav__card" type="button"
            id="<?=acf_slugify(get_sub_field('title'))?>">
            <div class="icon_nav__card_inner">
                <img src="<?=get_sub_field('icon')?>"
                    width="75" height="75">
                <div class="icon_nav__title">
                    <?=get_sub_field('title')?>
                </div>
            </div>
        </div>
        <?php
            $id = acf_slugify(get_sub_field('title'));
            $title = get_sub_field('title');
            $desc = get_sub_field('description');
            $img = wp_get_attachment_image(get_sub_field('image'), 'large', false, array('class'=>'desc_card__image'));
            $descriptions[] = <<<EOT
<div class="desc_card" id="{$id}-info">
    {$img}
    <div class="desc_card__content">
        <h3>{$title}<span class="icon--close"></span></h3>
        <p>{$desc}</p>
    </div>
</div>
EOT;
        }
        ?>
    </div>
    <div class="desc-data">
        <?php
        foreach ($descriptions as $d) {
            echo $d;
        }
        ?>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    const navs = document.querySelectorAll('.icon_nav__card');
    const descs = document.querySelectorAll('.desc_card');

    navs.forEach((nav) => {
        nav.addEventListener('click', (e) => {

            navs.forEach((nav) => {
                nav.classList.remove('reveal');
            });

            nav.classList.add('reveal');

            let who = nav.getAttribute('id')

            const shown = document.querySelectorAll('.desc-show');
            shown.forEach((elem) => {
                elem.remove();
            });

            const newItem = document.createElement('div');
            newItem.classList.add('desc-show');
            newItem.classList.add('washi');
            newItem.classList.add('mt-3');
            newItem.classList.add('mb-4');


            const content = document.getElementById(who + '-info');

            newItem.innerHTML = content.outerHTML;

            nav.after(newItem);

            e.stopPropagation();
        })
    })


    // Add click event listener to the document
    document.addEventListener("click", () => {
        // Remove "active" class from all elements
        navs.forEach((nav) => {
            nav.classList.remove("reveal");
        });
        const shown = document.querySelectorAll('.desc-show');
        shown.forEach((elem) => {
            elem.remove();
        });

    });
</script>
<?php
});
        ?>