<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

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


<section>
    <h2>Our Fundraising Events</h2>
    <div class="fundraising-events-cards">

        /* ACF can be used and go here */

    </div>
</section>



<section class="fundraising-cta">
    <h2>FUNDRAISE FOR THE CENTRE</h2>
    <div class="cta-text">
        <div>
            <h3>Did you know you can host your very own fundraiser for the Centre?</h3>
        </div>
        <div>
            <div>
                /* icon goes here */
                <div>
                    <p>Bake sales, bottle drives, art sales, and more—your imagination is the limit! Contact the Centre’s Development Officer for more information and to arrange your event.</p>
                    <p>Email: <span>lrothman@centreforautismab.ca</span></p>
                </div>
            </div>
            <button href="#">Apply Online</button>
        </div>
    </div>

    <div>
        <div>
        /* icon goes here */
            <div>
                <h3>You can also start fundraising now through CanadaHelps.org </h3>
                <p>Visit: <span>www.canadahelps.org/en/charities/centre-for-autism-services-alberta/</span></p>
            </div>
        </div>
        <button href="#">Apply Online</button>
    </div>

</section>

<?php get_footer(); ?>