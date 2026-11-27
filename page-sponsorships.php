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

<section class="sponsorship-container">
    <section class="sponsorship-head">
        <div class="sponsorship-head-text">
            <h2>SPONSORSHIPS & PARTNERSHIPS</h2>
            <p>Commited and Conected to Your Community</p>
            <p>Become a Sponsor or Partner!</p>
        </div>
        <div class="sponsorship-head-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hands-together-team.png" alt="An image of a group of people putting their hands in a circle like a team">
        </div>  
    </section>
    
    <section class="sponsorship-events">
        <div class="sponsorship-title">
            <h2>Sponsorship & Partnership Opportunities</h2>
        </div>
        <div class="sponsorship-and-partnership">
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
    
        </div>
    
        <section class="sponsorship-cta">
                    <div class="decorative-circles">
    
            </div>
            <div class="sponsorship-cta-intro">
                    <h2>Considering becoming a sponsor or partner?</h2>
                    <p>We would love to chat about opportunities that would be the best fit for you.</p>
                </div>
                <div class="sponsorship-cta-text-info">
                    <div class="sponsorship-cta-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                                <rect width="75" height="75" rx="37.5" fill="#62C6C6"/>
                                <path d="M21 32.505V45.375C21 46.5685 21.4967 47.7131 22.3808 48.557C23.2649 49.4009 24.464 49.875 25.7143 49.875H49.2857C50.536 49.875 51.7351 49.4009 52.6192 48.557C53.5033 47.7131 54 46.5685 54 45.375V32.505L39.9703 40.7445C39.2274 41.1808 38.3722 41.4118 37.5 41.4118C36.6278 41.4118 35.7726 41.1808 35.0297 40.7445L21 32.505Z" fill="#FCFDFE"/>
                                <path d="M54 29.862V29.625C54 28.4315 53.5033 27.2869 52.6192 26.443C51.7351 25.5991 50.536 25.125 49.2857 25.125H25.7143C24.464 25.125 23.2649 25.5991 22.3808 26.443C21.4967 27.2869 21 28.4315 21 29.625V29.862L36.2649 38.829C36.6363 39.0471 37.0639 39.1626 37.5 39.1626C37.9361 39.1626 38.3637 39.0471 38.7351 38.829L54 29.862Z" fill="#FCFDFE"/>
                                </svg>
                        <div class="sponsorship-cta-contact">
                            <div class="sponsorship-cta-contact-spec">
                                <p>For inquiries or more information</p>
                                <p>Email: <span>mphilips@centreforautismab.ca</span></p>
                            </div>
                        </div>
                    </div>
                    <button href="#">Email Us</button>
                </div>
        </section>
    </section>

</section>


<?php get_footer(); ?>