<?php get_header(); ?>
<? get_template_part('parts/hero-banner-minimal'); ?>
<main>

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

<section class="donation-intro">
            <div class="donation-head-text">
                <h2>Neurodiversity Advisory Councils</h2>
                <p class="blue-highlight">(NAC)</p>
                <p>The Neurodiversity Advisory Councils (NAC) are groups of people with lived or living experience who help guide the work of CFASA.</p>
            </div>
            <div class="donation-head-image">
                /* image goes here */
            </div>  
        </section>

    <div class="council-info-blocks">
        <div class="council-info-blocks-text">
            <p>Our leadership team does not yet fully reflect the diversity we strive for; the NAC extends leadership to include more voices. The NAC provides direct insight and guidance to ensure our programs reflect Neurodiversity-Affirming Practices and our dedication to diversity, equity, and inclusion. Their input helps us provide high-quality support to Autistic and neurodivergent people, ensuring dignity, safety, and respect for physical, emotional, and social boundaries. We listen to feedback, adapt our supports, and continuously learn to strengthen our commitments.</p>
        </div>

        <div class="council-info-blocks-list">
            <p>CFASA’s NAC consists of three advisory councils:</p>
            <ol>
                <li>Parent Advisory Council (PAC)-For caregivers (second-hand experience)</li>
                <li>Employee Advisory Council (EAC)-For internal employees (first- and second-hand experience)</li>
                <li>Autism/ Neurodiverse Advisory Council (ANAC) – For Autistic people (first-hand experience)</li>
            </ol>
        </div>
    </div>

    <section class="council-cta">
        <div class="decorative-circles">

        </div>
        <div class="council-cta-text-info">
            <div class="council-cta-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                <path d="M21 32.505V45.375C21 46.5685 21.4967 47.7131 22.3808 48.557C23.2649 49.4009 24.464 49.875 25.7143 49.875H49.2857C50.536 49.875 51.7351 49.4009 52.6192 48.557C53.5033 47.7131 54 46.5685 54 45.375V32.505L39.9703 40.7445C39.2274 41.1808 38.3722 41.4118 37.5 41.4118C36.6278 41.4118 35.7726 41.1808 35.0297 40.7445L21 32.505Z" fill="#FCFDFE"/>
                <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                </svg>
    
            <div class="council-cta-contact">
                <h2>Interested in joining CFASA’s NAC?</h2>
                <div class="council-cta-contact-spec">
                <p><span>Email:</span> info@centreforautismab.ca</p>
                </div>
            </div>
            </div>
            <button href="#">Email Us</button>
        </div>
    </section>

</section>


<?php get_footer(); ?>