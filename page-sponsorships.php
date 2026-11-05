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

<section class="sponsorship-head">
    <div class="sponsorship-head-text">
        <h2>SPONSORSHIPS & PARTNER SHIPS</h2>
        <p>Commited and Conected to Your Community</p>
        <p>Become a Sponsor or Partner!</p>
    </div>
    <div class="sponsorship-head-image">
        /* image goes here */
    </div>  
</section>

<section class="fundraising-events">
    <h2>OUR FUNDRAISING EVENTS</h2>
    <div class="sponsorships">
        <h3>Sponsorships</h3>
        <p>
            At CFASA, we recognize sponsorship is a powerful way to allocate marketing dollars while increasing return on investment, brand loyalty, employee engagement, and community awareness, among other benefits.
        </p>
        <p>
            We can develop individual sponsorship opportunities to suit your business and marketing objectives.
        </p>
        <p>
            Sponsorship can bring your brand closer to your community and strengthen your relationship in that community, creating a lasting impact on more children, youth, and adults with autism and their families. With your assistance, we can extend our reach further and provide valuable programming to more individuals and families in Alberta.
        </p>
    </div>

    <div class="partnerships">
        <h3>Community Partnerships</h3>
        <p>
            Our community partners help us reach out further into the community and spread the word about what we do and extend our work throughout our cities and towns.
        </p>

        <p>
            Community partners can be public entities such as zoos or libraries, but they can also be businesses that partner with us to offer programming to our families or to assist us in providing our programs in a wider variety of spaces and places.
        </p>

        <p>
            Being a community partner with the CFASA means together, we can transform communities and increase the capacity of those communities to accept and include Autistic individuals.
        </p>
    </div>
</section>

<section class="sponsorship-cta">
    <h2>MAKE A DONATION TODAY</h2>
    <div class="cta-text">
        <div>
            <h3>Considering becoming a sponsor or partner?</h3>
            <p>We would love to chat about opportunities that would be the best fit for oyu</p>
        </div>
        <div>
            <div>
                /* icon goes here */
                <div>
                    <p>For inquiries or more information</p>
                    <p>Email: <span>mphilips@centreforautismab.ca</span></p>
                </div>
            </div>
            <button href="#">Email Us</button>
        </div>
    </div>
</section>

<?php get_footer(); ?>