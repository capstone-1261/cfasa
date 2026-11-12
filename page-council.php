<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

<section class="involved-nav-container">
    <div>
        <div class="involved-nav">
            <h2 class="involved-nav-sub">JUMP TO SECTION</h2>
            <nav class="get-involved-navigation" aria-label="Get Involved navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'involved-nav',
                'container' => false,
                'menu_class' => 'get-involved-nav',
                'fallback_cb' => false
            ));
            ?>
            </nav>
        </div>
    </div>
</section>

<section class="council-container">

    <div class="council-hero">
        <div class="council-hero-text">
            <h2>Neurodiversity Advisory Councils</h2>
            <p class="council-tagline">(NAC)</p>
            <p>The Neurodiversity Advisory Councils (NAC) are groups of people with lived or living experience who help guide the work of CFASA.</p>
        </div>
        <div class="hero-infograph">
            /* Image goes here */
        </div>
    </div>

    <div class="council-info-blocks">
        <div>
            <p>Our leadership team does not yet fully reflect the diversity we strive for; the NAC extends leadership to include more voices. The NAC provides direct insight and guidance to ensure our programs reflect Neurodiversity-Affirming Practices and our dedication to diversity, equity, and inclusion. Their input helps us provide high-quality support to Autistic and neurodivergent people, ensuring dignity, safety, and respect for physical, emotional, and social boundaries. We listen to feedback, adapt our supports, and continuously learn to strengthen our commitments.</p>
        </div>

        <div>
            <p>CFASA’s NAC consists of three advisory councils:</p>
            <ol>
                <li>Parent Advisory Council (PAC)-For caregivers (second-hand experience)</li>
                <li>Employee Advisory Council (EAC)-For internal employees (first- and second-hand experience)</li>
                <li>Autism/ Neurodiverse Advisory Council (ANAC) – For Autistic people (first-hand experience)</li>
            </ol>
        </div>
    </div>

    <section class="council-cta">
    <div class="ccouncil-cta-text">
        <h2>Interested in joining CFASA’s NAC?</h2>
        <p><span>Email:</span> info@centreforautismab.ca</p>
    </div>
    <button href="#">
        <div>/*icon*/</div>
        <p>Email Us</p>
    </button>
    </section>

</section>


<?php get_footer(); ?>