<?php get_header(); ?>
<?php get_template_part( 'parts/hero-banner-basic' ); ?>

<main>

<section class="about-nav-container">
    <div>
        <div class="about-nav">
            <h2 class="about-nav-sub">JUMP TO SECTION</h2>
            <nav class="about-us-navigation" aria-label="About us navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'about-nav',
                'container' => false,
                'menu_class' => 'about-us-nav',
                'fallback_cb' => false
            ));
            ?>
        </nav>
        </div>
    </div>
</section>

<section class="fundraiser-hero">
    <div class="fundraiser-hero-text">
        <h2>Fundraisers</h2>
        <p>Learn about our fundraising events and how you can participate, sponsor, or host an event</p>
    </div>
    <div class="fundraising-heroo-image">
<!-- image goes here -->
    </div>
</section>

<section class="fundraiser-gallery">
    <div class="fundraiser-gallery-title">
        <h2>Our Fundraising Events</h2>
    </div>
    <div class="fundraising-events-cards">

        /* ACF can be used and go here */

    </div>
</section>

<section class="fundraising-cta">
    <div class="fundraising-cta-title">
        <h2>FUNDRAISE FOR THE CENTRE</h2>
    </div>
    <div class="fundraising-cta-text">
        <div>
            <h3>Did you know you can host your very own fundraiser for the Centre?</h3>
        </div>
        <div>
            <div class="fundraising-cta-text-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                    <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                    <path d="M21 32.5051V45.3751C21 46.5686 21.4967 47.7132 22.3808 48.5571C23.2649 49.401 24.464 49.8751 25.7143 49.8751H49.2857C50.536 49.8751 51.7351 49.401 52.6192 48.5571C53.5033 47.7132 54 46.5686 54 45.3751V32.5051L39.9703 40.7446C39.2274 41.1809 38.3722 41.4119 37.5 41.4119C36.6278 41.4119 35.7726 41.1809 35.0297 40.7446L21 32.5051Z" fill="#FCFDFE"/>
                    <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                </svg>
                <div>
                    <p>Bake sales, bottle drives, art sales, and more—your imagination is the limit! Contact the Centre’s Development Officer for more information and to arrange your event.</p>
                    <p>Email: <span>lrothman@centreforautismab.ca</span></p>
                </div>
            </div>
            <button href="#">Apply Online</button>
        </div>
    </div>

    <div class="fundraising-cta-text-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
        <circle cx="37.5" cy="37.5" r="35.5" stroke-width="4" stroke="#FFD02D"/>
        </svg>
            <div>
                <h3>You can also start fundraising now through CanadaHelps.org </h3>
                <p>Visit: <span>www.canadahelps.org/en/charities/centre-for-autism-services-alberta/</span></p>
            </div>
        <button href="#">Apply Online</button>
    </div>

</section>

<?php get_footer(); ?>