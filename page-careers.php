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

<section class="careers-container">
    <div class="careers-intro">
        <div>
            <h2>Careers</h2>
            <h3>Our Team is Growing</h3>
            <p>CFASA is expanding!</p>
            <p>We pride ourselves on being responsive to the needs of our community. The need for exceptional autism services across Alberta is growing, and so are we!</p>
        </div>
        <div>
            /* image goes here */
        </div>
    </div>

    <div class="openings">
        <h2>CURRENT OPENINGS</h2>
        <div class="openings-split">
            <div class="openings-edmonton">
                <h3>Edmonton</h3>

                /* ACF go here */
            </div>

            <div class="openings-calgary">
                <h3>Calgary</h3>

                /* ACF go here */
            </div>
        </div>
    </div>
</section>

<section class="careers-cta">
    <div class="careers-cta-intro">
        <h2>Start a Career That Matters</h2>
        <p>View a job listing page for more information on how to apply</p>
    </div>

    <div class="careers-cta-contact">
        /* icon goes here */

        <div>
            <p>For inquiries or more information, please contact Human Resources.</p>
            <p>Email:<span> humanresources@centreforautismab.ca</span></p>
        </div>

    </div>

</section>

<?php get_footer(); ?>