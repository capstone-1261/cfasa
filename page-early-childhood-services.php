<?php

get_header();
?>
<main id="main-content" class="ps-main">
    <section class="ps-top" aria-label="Programs and services navigation">
        <div class="ps-wrap">
            <h2>Programs &amp; Services</h2>
            <div class="ps-jump-heading">JUMP TO PAGE</div>
            <nav class="ps-jump" aria-label="Programs and Services pages">
                <a class="ps-current" href="<?php echo esc_url( home_url('/early-childhood-services/') ); ?>" aria-current="page">Early Childhood Services</a>
                <a href="<?php echo esc_url( home_url('/professional-services/') ); ?>" >Professional Services</a>
                <a href="<?php echo esc_url( home_url('/diagnostic-services/') ); ?>" >Diagnostic Services</a>
                <a href="<?php echo esc_url( home_url('/community-social-recreation-programs/') ); ?>" >Social Programs</a>
                <a href="<?php echo esc_url( home_url('/independent-living-skills-employment/') ); ?>" >Living Skills & Employment</a>
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
                <span>Early Childhood Services</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Early Childhood Services</h1>
                    <p class="ps-lead">Specialized Pre-K and Kindergarten Programming</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/early-childhood.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Early Childhood Services" fetchpriority="high">
            </section>

            <section class="ps-intro">
                <p>CFASA is an independent Early Childhood Services (ECS) provider. We offer specialized Pre-K and Kindergarten Programming. Our program is funded by Alberta Education's Program Unit Funding (PUF). PUF is a grant for children with developmental disabilities needing additional support beyond regular ECS programs available in the community.</p>
            </section>
            <section class="ps-grid ps-grid--3 ps-space" aria-label="Who, ages and fees">
                <article class="ps-info ps-info--mint"><h3>Who can attend?</h3><p>CFASA’s onsite program is designed for children identified as Autistic (or queried), or those who need a high level of support in their speech and language development at school.<br><br>Eligibility is dependent on numerous factors which we would be happy to discuss with you prior to applying.</p></article>
                <article class="ps-info ps-info--blue"><h3>Age requirement</h3><p>Children between <strong>2 years 8 months</strong> and <strong>5 years 11 months</strong> of age as of September 1 of their application year.</p></article>
                <article class="ps-info ps-info--cream"><h3>Fees</h3><p>No fees, funded by Alberta Education Program Unit Funding.<br><br>Funding can be provided for up to a <strong>maximum of three years.</strong></p></article>
            </section>
            <section class="ps-callout ps-space"><div><h2>Registration for 2026/2027 school year Edmonton and Calgary NOW OPEN!</h2><p>Please contact us for eligibility and application information.</p></div><a class="ps-btn ps-btn--light" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Contact us <span aria-hidden="true">→</span></a></section>
            <section class="ps-section ps-split"><div><h2>Our Program</h2><p>Our pre-kindergarten and kindergarten classrooms focus on familiarizing your child with the school environment, routines, and engagement with peers. Our goal is to prepare your child to attend Kindergarten or Grade 1 in your community neighbourhood school.</p><p>Our program focus is to create nurturing and supportive learning environments that celebrate each child's strengths and individuality.</p></div>
                <div><ul class="ps-checks">
    <li>Alberta Education Curriculum</li>
    <li>Evidence-based naturalistic developmental behavioural approaches</li>
    <li>Neurodiversity-Affirming Practices</li>
</ul></div></section>
            <article class="ps-highlight ps-highlight--cream"><h3>Learning approach</h3><p>Classes combine play-based and structured activities to enhance school readiness. School readiness goals are tailored to each child’s pace and needs. Daily routines include learning experiences in academics, communication, socialization, motor skills and self-help skills.</p></article>
            <section class="ps-section"><h2>In the Classroom</h2>
                <div class="ps-grid ps-grid--sidebar"><div class="ps-info ps-info--navy"><h3>3 focused learning hours</h3><p>Monday to Thursday<br>(No school on Fridays)</p><hr><p><strong>Morning Class</strong><br>8:45 am – 11:45 am</p><p><strong>Afternoon Class</strong><br>12:45 pm – 3:45 pm</p></div>
                    <div class="ps-panel"><ul class="ps-checks">
    <li>Certified teachers and highly trained educational assistants in each classroom.</li>
    <li>Access to weekly Speech-Language Pathology (SLP) and Occupational Therapy (OT) support.</li>
    <li>Coordinated services for home and school-based support (if applicable).</li>
    <li>Small class sizes (10–12 students).</li>
    <li>Transportation is available but not guaranteed.</li>
</ul></div>
                </div>
            </section>
            <section class="ps-section"><h2>Program Availability</h2><p>Choose a location to begin your registration.</p>
                <div class="ps-grid ps-grid--2"><article class="ps-registration"><div><h3>Edmonton</h3><p>Early Childhood Services</p><span class="ps-status ps-status--open">OPEN</span></div><a class="ps-btn ps-btn--light" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Register now <span aria-hidden="true">→</span></a></article>
                    <article class="ps-registration"><div><h3>Calgary</h3><p>Early Childhood Services</p><span class="ps-status ps-status--closed">SOLD OUT</span></div><a class="ps-btn ps-btn--light" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Join waitlist <span aria-hidden="true">→</span></a></article></div>
            </section>
            <section class="ps-section"><h2>Classroom Locations</h2><p>We have onsite Pre-Kindergarten and Kindergarten in both Edmonton and Calgary.</p><div class="ps-grid ps-grid--2"><article class="ps-info ps-info--white"><h3>Edmonton:</h3><p>#1, 9353 50 Street NW, Edmonton, AB T6B 2L5</p></article><article class="ps-info ps-info--white"><h3>Calgary:</h3><p>#226, 3510 29th Street NE, Calgary, AB T1Y 5W4</p></article></div></section>
            <section class="ps-highlight ps-highlight--mint ps-space"><h2>Interested in our program?</h2><p>Contact us to learn more about eligibility and registration!</p><div class="ps-grid ps-grid--2"><article class="ps-info ps-info--white"><h3>Edmonton</h3><p>Email: <a href="mailto:puf@centreforautismab.ca">puf@centreforautismab.ca</a></p></article><article class="ps-info ps-info--white"><h3>Calgary</h3><p>Email: <a href="mailto:pufcalgary@centreforautismab.ca">pufcalgary@centreforautismab.ca</a></p></article></div></section>
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
