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

<section class="donation-container">
        <section class="donation-intro">
            <div class="donation-head-text">
                <h2>Donate</h2>
                <p class="blue-highlight">Our work is made possible by the generosity of our donors, sponsors, and partners.</p>
                <p>Make a general donation or contribute to a fundraising campaign or event in support of the Centre for Autism Services Alberta programs or services.</p>
            </div>
            <div class="donation-head-image">
                /* image goes here */
            </div>  
        </section>
    
    <section class="donating-section">
        <div class="donation-secondary">
                <div class="donation-secondary-image">
                    /* image goes here */
                </div>
                <div class="donation-secondary-text">
                    <h2>We are very proud of the work we do.</h3>
                    <p>For over 25 years, the Centre for Autism Services Alberta has provided innovative and comprehensive programs and services to countless Autistic individuals and their families</p>
                    <p>We have created a safe space in which to learn, belong grow, and thrive.</p>
                    <p>Your donation today will help the Centre change outcomes, enrich lives, empower families, foster independence, and transform communities</p>
                    <p class="bold">Thank you.</p>
                </div>
            </div>
        </div>

        <div class="donation-card-section">
            <div class="donation-card-section-title">
                <h2>MAKE A DONATION TODAY!</h2>
            </div>
            <div class="donation-cards">
                <div class="donation-card card-yellow">
                    <div class="note-circle">
                        <p class="note-letter">i</p>
                    </div>
                    <div class="card-text">
                        <h3>Our Canadian Registered Charity Number:</h3>
                        <div class="donate-info">
                            <p class="bold">872973995RR0001</p>
                            <p>Incorporated in Edmonton, Alberta, CA (1997)</p>
                        </div>
                    </div>
                </div>

                <div class="donation-card card-blue">
                    <div class="note-circle">
                        <p class="note-letter">i</p>
                    </div>
                    <div class="card-text">
                        <h3>Donate Online</h3>
                        <div class="donate-info">
                            <p>Donations can be made online by filling the form on this page with secure checkout provided by CanadaHelps. </p>
                            <p>Alternatively, you can donate online through CanadaHelps.org by visiting our page here: <a href="">https://www.canadahelps.org/en/charities/centre-for-autism-services-alberta/</a></p>
                        </div>
                    </div>
                </div>

                <div class="donation-card card-red">
                    <div class="note-circle">
                        <p class="note-letter">i</p>
                    </div>
                    <div class="card-text">
                        <h3>Donate In Person</h3>
                        <div class="donate-info">
                            <p class="bold">For contributions made in-person, donations in support of Centre for Autism Services Alberta programs or services can be sent to:</p>
                            <p class="bold">
                                Centre for Autism Services Alberta #1, 9353 – 50 Street NW,
                            Edmonton, AB T6B 2L5
                            </p>
                            <p>
                            or<br>Contact our office via <span>email</span> or <span>phone:</span> 
                            <span>email:</span> info@centreforautismab.ca
                            <span>phone:</span> 780 488 6600 ext. 0
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div>
            /* Donation Window Goes Here */
        </div>
    </section>

    

</section>

<?php get_footer(); ?>
