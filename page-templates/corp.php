<?php
/*
    Template Name: Corporate Page
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;


get_header();

?>
<style>
    :root {
        font-size: 20px;
    }

    .paneOne div {
        column-gap: 3rem;
        text-align: center;
    }

    .paneTwo,
    .paneFour,
    .paneSeven {
        background-color: #BCB58C;
        color: #fff8f4
    }

    .paneTwo img {
        max-height: 90%;
    }

    .paneThree,
    .paneSix,
    .paneEight {
        background-color: #fff8f4;
    }

    .paneThree img,
    .paneFour img,
    .paneSix img {
        border-radius: 50%;
        aspect-ratio: 1 / 1;
        width: 300px;
        object-fit: cover;
        display: flex;
        margin: auto;
        margin-bottom: 1rem;
        position: relative;
    }

    .paneThree {
        text-align: center;
    }

    @media (min-width:992px) {
        .paneThree {
            text-align: left;
        }
    }

    .paneFour__bg {
        background-image: url(/wp-content/themes/lc-hinoki/img/corp/lines.svg);
        background-size: 90%;
        background-position: center;
        background-repeat: no-repeat;
    }

    .paneSix .image {
        position: relative;
        max-width: 400px;
    }

    .paneSix .bg {
        position: absolute;
        right: 1rem;
        bottom: 0;
        content: "";
        width: 200px;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        background-color: #59673f;
    }

    .paneSix .bg-2 {
        background-color: #946f57;
    }

    .paneSeven .card {
        color: #212529;
    }

    .paneEight .card {
        background-color: #BCB58C;
        color: #fff8f4
    }

    .quotes .quote__body {
        font-size: 1.6rem;
        color: #212529;
    }

    .quotes .quote__attr {
        text-align: right;
        color: #212529;
    }
	
	.secondary .container div { font-size: 1rem; margin: 0 0.5rem;}
</style>
<main id="main" class="corp">
    <div class="d-flex align-items-center flex-column paneOne pb-2">
        <h1 class="text-center">Corporate Wellbeing Events</h1>
        <div class="h2 mb-2">Forest Bathing</div>
		<div class="">Plus</div>
		<section class="secondary mt-2 mb-4">
			<div class="container d-flex justify-content-center flex-wrap">
					<div>Mindfulness &amp; Meditation</div>
					<div>Nature &amp; Foraging Walks</div>
					<div>Herbal Medicine Workshop</div>
					<div>Gong Bath</div>
					<div>Restorative Yoga</div>
			</div>
		</section>
    </div>
    <div class="paneTwo py-5">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center align-items-center">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/corp/forest-bathing.png"
                        alt="">
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h2>Forest Bathing</h2>
                    <p>Immerse your senses in the forest to connect with nature, boosting your immune system, health and
                        wellbeing. We use mindfulness to tune into our senses and forest science to take in the healing
                        properties of the trees.</p>
                    <hr class="mb-3">
                    <p>Forest bathing originated in Japan, where it is called shinrin yoku. Research in Japan has shown
                        forest bathing to improve our physiology, such as enhancing our immune system, stabilising blood
                        pressure, lowering stress, improving sleep and concentration, as well as improving our
                        wellbeing.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="paneThree py-5">
        <div class="container-xl">
            <h2 class="text-center mb-5">Complementary Nature Experiences</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 order-1">
                            <h3>Herbal Medicine Workshop</h3>
                        </div>
                        <div class="col-12 order-2 order-lg-3">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/corp/herbal-medicine.jpg"
                                alt="">
                        </div>
                        <div class="col-12 order-3 order-lg-2">
                            <p>Create teas, salves, tinctures and oxymels for everyday health remedies and strengthening
                                your immune system</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 order-1 order-lg-2">
                            <h3>Foraging &amp; Nature Walks</h3>
                        </div>
                        <div class="col-12 order-2 order-lg-1">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/corp/foraging.jpg"
                                alt="">
                        </div>
                        <div class="col-12 order-3 order-lg-3">
                            <p>Feel connected with nature. Learn about nature and how to sustainably forage edible and
                                medicinal herbs and mushrooms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 order-1">
                            <h3>Mindfulness &amp; Meditation</h3>
                        </div>
                        <div class="col-12 order-2 order-lg-3">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/corp/mindfulness.jpg"
                                alt="">
                        </div>
                        <div class="col-12 order-3 order-lg-2">
                            <p>Learn techniques that encourage a heightened state of awareness and focused attention to
                                help reach a healthy level of calm. We start with nature and end with foraged teas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paneFour py-5">
        <h2 class="text-center mb-5">Other Complementary Experiences</h2>
        <div class="paneFour__bg mb-4">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-4 d-none d-md-block">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/gong.jpg"
                            alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/lily.jpg"
                            alt="">
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/restorative-yoga.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6">
                    <h3>Gong Bath</h3>
                    <p>Experience deep relaxation helping you to connect to your body as the vibrations of the gong
                        soothes the nervous system, helping you to relax and relieve stress and calming the mind.</p>
                </div>
                <div class="col-md-6">
                    <h3>Restorative Yoga</h3>
                    <p>Lean into relaxation, shifting from a constant state of stress known as our sympathetic response,
                        to a more relaxing and calming state.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- div class="paneFive py-5">
        <div class="container-xl">
            <h2 class="text-center mb-5">What our clients say</h2>
            <div class="quotes row mx-0">
                <div class="quote col-lg-6 mb-4">
                    <div class="quote__body">After my first experience of Forest Bathing with Lisa I am now a convert!
                        Lisa exudes a calmness which sets the tone of her sessions, and really helps guide you as to how
                        to spend meaningful time with nature. I came away feeling so much more relaxed.</div>
                    <div class="quote__attr">Rebecca - HINOKI Participant</div>
                </div>
                <div class="quote col-lg-6 mb-4">
                    <div class="quote__body">Lisa has a beautiful, gentle tone as she guides you through the exercises
                        and helps you explore the forest. The tree-laxation was so soothing - and a delight to 'wake up'
                        looking at the canopy above us.</div>
                    <div class="quote__attr">Jo - HINOKI Participant</div>
                </div>
                <div class="quote col-lg-6 mb-4">
                    <div class="quote__body">I left with such a profound feeling of both energy and calm. It was as if I
                        had been on a two week break from reality, not only a couple of hours. It's medicine for the
                        mind and soul, as well as providing proven physiological benefits.</div>
                    <div class="quote__attr">Sarah - HINOKI Participant</div>
                </div>
                <div class="quote col-lg-6 mb-4">
                    <div class="quote__body">I cannot remember the last time I simply paused and listened. I've just
                        spent the most extraordinary two hours doing just that, and I feel so much more connected with
                        myself and the world around me for it.</div>
                    <div class="quote__attr">Annabel - HINOKI Participant</div>
                </div>
            </div>
        </div>
    </div -->
    <div class="paneSix py-5">
        <div class="container-xl">
            <h2>Lisa Duncan</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="image mx-auto">
                        <div class="bg"></div>
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/lisa.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <p>Lisa's qualifications include Forest Bathing, Mindfulness and Meditation, and Herbal Medicine.
                        Lisa spends most of her time in the forest, whether foraging, walking or forest bathing. Lisa
                        has a keen interest in helping people to build a stronger connection to nature, which in turn
                        helps them to destress, relax and gain a stronger disposition to working in the modern,
                        sometimes stressful lives we all live in. Lisa helps her participants with knowledge and
                        experience to carry forward into their daily lives.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="paneSix py-5">
        <div class="container-xl">
            <h2>Smantha Bellanca</h2>
            <div class="row">
                <div class="col-md-6 order-1 order-md-2">
                    <div class="image mx-auto">
                        <div class="bg bg-2"></div>
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/sam-with-gong.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6 order-2 order-md-1 my-auto">
                    <p>Samantha and Lisa work closely together to bring to their guests a wellbeing experience, which
                        involve Meditation and Sound Healing. Sam is a qualified gong practitioner, using a plantetary
                        gong that is tuned into the frequencies of planet Pluto, which represents death of the old,
                        transformation and rebirth. Sam is also a Kundalini and Restorative Yoga teacher, as well as a
                        qualified Cacao facilitator.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="paneSix py-5">
        <div class="container-xl">
            <h2>Emma Weaver</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="image mx-auto">
                        <div class="bg"></div>
                        <img src="<?=get_stylesheet_directory_uri()?>/img/corp/emma.jpg"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <p>Emma practices Forest Bathing and Intuitive Guide for Mindfulness, Wellbeing and Nature
                        Connection. As a Nature Therapy guide she enjoys working closely with the seasons and elements.
                        She often takes her inspiration for session planning from the Wheel of the Year and cycle of
                        festivals which are fun to explore and can bring more awareness to our connections with the
                        natural world.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="paneSeven py-5">
        <div class="container-xl">
            <h2 class="text-center mb-4">Corporate Wellbeing Events</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card p-4 h-100">
                        <li>Forest Bathing</li>
                        <li>Herbal Medicine Workshop</li>
						<li>Tea Making Workshop</li>
                        <li>Nature &amp; Foraging Walks</li>
                        <strong>Up to 10 people per session</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 h-100">
                        <li>Mindfulness &amp; Meditation</li>
                        <li>Gong Bath</li>
                        <li>Restorative Yoga</li>
                        <strong>Up to 20 people per session</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paneEight py-5">
        <div class="container-xl">
            <h2 class="text-center mb-5">Corporate Wellbeing Event Ideas</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-md-4 mb-4 text-center">
                    <h3>4-Hour Event</h3>
                    <strong>First sessions 1&amp;2 concurrently, followed by Restorative Yoga &amp; Gong Bath with all participants</strong><br>
					<strong>Total 20 Participants</strong>
                    <div class="card p-4 my-4">
                        <strong>(1) Forest Bathing</strong>
                        10 participants - 2 hours
                        <hr class="my-2">
                        <strong>(2) Herbal Medicine Workshop</strong>
                        10 participants - 2 hours
                        <hr class="my-2">
                        <strong>(3) Restorative Yoga &amp; Gong Bath</strong>
                        20 participants - 2 hours
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h3>3-Hour Event</h3>
                    <strong>All sessions running concurrently</strong><br>
					<strong>Total 40 Participants</strong><br>&nbsp;
                    <div class="card p-4 my-4">
                        <strong>(1) Forest Bathing</strong>
                        10 participants - 3 hours
                        <hr class="my-2">
                        <strong>(2) Herbal Medicine Workshop</strong>
                        10 participants - 3 hours
                        <hr class="my-2">
                        <strong>(3) Restorative Yoga &amp; Gong Bath</strong>
                        20 participants - 3 hours
                    </div>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h3>3-Hour Event</h3>
                    <strong>First Forest Bathing, followed by Gong Bath</strong><br>
					<strong>Total 20 Participants</strong><br>&nbsp;
                    <div class="card p-4 my-4">
                        <strong>(1) Forest Bathing</strong>
                        20 participants in two separate sessions -<br> 2 hours
                        <hr class="my-2">
                        <strong>(3) Gong Bath</strong>
                        20 participants - 1 hours
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h3>Many combinations are possible</h3>
                <p>We can cater up to 40 participants at once, or more if spread throughout the day*.</p>
                <p class="small">* waiting time fees may occur if spread throughout the day and a practitioner needs to
                    wait for more than 30 mins for the next session</p>
            </div>
        </div>
    </div>
    <div class="paneNine py-5">
        <div class="container-xl">
            <div class="text-center">
                <h2>Find Out More</h2>
                <p style="max-width:72ch;margin:auto" class="mb-4">If you have any questions, would like more
                    information or book a Corporate Wellbeing Event, please contact me at
                    <?=do_shortcode('[contact_email]')?>
                    or via the form below.
                </p>
            </div>
            <?=do_shortcode('[contact-form-7 id="5" yourSubject="Corporate%20Wellbeing"]')?>
        </div>
    </div>
</main>
<?php
add_action('wp_footer',function(){
	?>
<script>
$('#yourSubject').val('Corporate Wellbeing');
</script>
    <?php
});
get_footer();
?>