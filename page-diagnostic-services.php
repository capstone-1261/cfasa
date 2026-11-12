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
                <a class="ps-current" href="<?php echo esc_url( home_url('/diagnostic-services/') ); ?>" aria-current="page">Diagnostic Services</a>
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
                <span>Diagnostic Services</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Diagnostic Services</h1>
                    <p class="ps-lead">Comprehensive, multidisciplinary autism assessments for children aged 2 to 8 years old.</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/diagnostic.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Diagnostic Services" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>We strive to provide assessment services that are respectful, culturally responsive, and neurodiversity affirming to help you learn more about your child’s strengths and needs.</p><p>CFASA offers comprehensive, multidisciplinary autism assessments for children aged 2 to 8 years old. Our assessments are offered in Edmonton, Calgary, or remotely across Alberta in partnership with local community organizations (e.g., schools, child care centres, health centres).</p></section>
            <section class="ps-grid ps-grid--2 ps-space" aria-label="Assessment benefits"><article class="ps-info ps-info--blue"><h3>NO WAITLIST</h3><p>Get the support you need without a wait.</p></article><article class="ps-info ps-info--blue"><h3>NO DOCTOR’S REFERRAL NEEDED!</h3><p>You can contact CFASA directly to request an assessment.</p></article></section>
            <section class="ps-callout ps-space"><div><h2>We now offer FREE 15-minute autism screening appointments.</h2><p>These brief sessions take place at our office or online and help determine whether your child may benefit from a full autism assessment.</p></div><a class="ps-btn ps-btn--light" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Schedule now <span aria-hidden="true">→</span></a></section>
            <section class="ps-section ps-split"><div><h2>Supported by a multidisciplinary team</h2><p>Our autism assessments are supported by members of a multidisciplinary team that may include:</p></div><div class="ps-panel"><ul class="ps-checks">
    <li>Registered Psychologist</li>
    <li>Speech Language Pathologist</li>
    <li>Occupational Therapist</li>
</ul></div></section>
            <section class="ps-section"><h2>Our assessment process may include</h2><p>A comprehensive process helps us learn more about your child and determine whether they may benefit from a full autism assessment. This may include:</p><div class="ps-grid ps-grid--2"><div class="ps-panel"><ul class="ps-checks">
    <li>Questionnaires</li>
    <li>Interviews</li>
    <li>Review of health or educational records</li>
</ul></div><div class="ps-panel"><ul class="ps-checks">
    <li>Observations and/or direct assessment</li>
    <li>Report writing including recommendations</li>
    <li>Debriefing and resource sharing</li>
</ul></div></div></section>
            <section class="ps-section"><h2>Costs and Registration</h2><div class="ps-highlight ps-highlight--slate"><p>We offer <strong>DIRECT BILLING!</strong> Autism assessments may be funded by individual or group health benefit plans, eligible government funding (e.g., Jordan’s Principle), or private pay.</p><hr><p>Parents/guardians can contact CFASA directly to request an assessment. You do not need a referral from a doctor or health professional.</p></div></section>
            <section class="ps-highlight ps-highlight--blue ps-space"><div class="ps-flex"><div><h2>Interested in Diagnostic Services?</h2><p>Contact us to learn more or request an assessment.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Contact us <span aria-hidden="true">→</span></a></div><div class="ps-info ps-info--white ps-space"><p>For inquiries or more information, please contact <strong>Kaylei</strong>.<br>Email: <a href="mailto:kweinberger@centreforautismab.ca">kweinberger@centreforautismab.ca</a> · Phone: <a href="tel:+17804886600">(780) 488-6600 ext. 144</a></p></div></section>
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
