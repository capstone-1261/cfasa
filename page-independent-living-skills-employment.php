<?php

get_header();
?>
<main id="main-content" class="ps-main">
    <section class="ps-top" aria-label="Programs and services navigation">
        <div class="ps-wrap">
            <h2>Programs &amp; Services</h2>
            <div class="ps-jump-heading">JUMP TO PAGE</div>
            <nav class="ps-jump" aria-label="Programs and Services pages">
                <a href="<?php echo esc_url( home_url('/early-childhood-services/') ); ?>" >Early Childhood Services</a>
                <a href="<?php echo esc_url( home_url('/professional-services/') ); ?>" >Professional Services</a>
                <a href="<?php echo esc_url( home_url('/diagnostic-services/') ); ?>" >Diagnostic Services</a>
                <a href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>" >Social Programs</a>
                <a class="ps-current" href="<?php echo esc_url( home_url('/independent-living-skills-employment/') ); ?>" aria-current="page">Living Skills & Employment</a>
                <a href="<?php echo esc_url( home_url('/inclusive-post-secondary-education-services/') ); ?>" >IPSE</a>
                <a href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" >Summer Programs</a>
                <a href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" >Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <div class="ps-surface">
        <div class="ps-wrap">
            <nav class="ps-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">›</span>
                <a href="<?php echo esc_url( home_url('/programs-services/') ); ?>">Programs &amp; Services</a><span aria-hidden="true">›</span>
                <span>Independent Living Skills &amp; Employment</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Independent Living Skills &amp; Employment</h1>
                    <p class="ps-lead">Build independence and meaningful opportunities.</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/living.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Independent Living Skills &amp; Employment" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>CFASA offers a variety of programs for children, teens, and young adults, including community access, independent living skills, and employment resources.</p></section>
            <section class="ps-section"><h2>Community Access</h2><article class="ps-linkcard"><div><h3>Quest for Independence</h3><p><strong>Ages 18–29.</strong> Quest for Independence is an innovative post-secondary program that helps Autistic young adults build skills of independence for living and integrating into the community.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Ask about this service <span aria-hidden="true">→</span></a></article></section>
            <section class="ps-section"><h2>Home Living Support</h2><article class="ps-linkcard"><div><h3>Supported Independent Living</h3><p>Supported Independent Living (SIL) is designed for individuals who are motivated to build their skills for independence at home and in the community.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Ask about this service <span aria-hidden="true">→</span></a></article></section>
            <section class="ps-section"><h2>Employment and Employer Resources</h2><div class="ps-grid ps-grid--2 ps-feature-cards"><article class="ps-linkcard ps-linkcard--vertical"><div><h3>Employment Works</h3><span class="ps-age">Ages 15–64</span><p>CFASA is part of a Canada-wide initiative through the EmploymentWorks National Project. EmploymentWorks is an innovative service that supports individuals with disabilities who are ready to work and actively looking for employment. This program focuses on finding a job, entering the workforce, and maintaining long-term employment success.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >View program <span aria-hidden="true">→</span></a></article><article class="ps-linkcard ps-linkcard--vertical"><div><h3>Ready, Willing &amp; Able (RWA)</h3><p>CFASA partners with RWA to provide and connect resources for employees and employers.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >View program <span aria-hidden="true">→</span></a></article></div></section>
        </div><!-- .ps-wrap -->
    </div><!-- .ps-surface -->
    <aside class="ps-promo" aria-label="Current program promotion">
        <div class="ps-wrap">
            <h2>FALL PROGRAMS NOW OPEN!</h2>
            <p>Meet new friends and try<br> something new this fall!</p>
            <a class="ps-btn ps-btn--dark" href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>">Explore programs <span aria-hidden="true">→</span></a>
        </div>
    </aside>
<?php

get_footer();
?>
