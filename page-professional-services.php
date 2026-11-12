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
                <a class="ps-current" href="<?php echo esc_url( home_url('/professional-services/') ); ?>" aria-current="page">Professional Services</a>
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
                <span>Professional Services</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Professional Services</h1>
                    <p class="ps-lead">Support for Autistic and neurodivergent people</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/professional.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Professional Services" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>Professional Services (PS) are for individuals with autism or other neurodevelopmental disabilities, who are looking for support to enhance and enrich their lives.</p><p>Through a collaborative partnership, neuroaffirming practices, and person-centered service, our team can support you in many different areas of your life.</p></section>
            <section class="ps-highlight ps-highlight--mint ps-space"><h2>Professional Services can be accessed in a variety of ways:</h2><div class="ps-grid ps-grid--3"><article class="ps-info ps-info--white"><h3>Eligible government funding</h3><p>e.g., FSCD, Jordan’s Principle</p></article><article class="ps-info ps-info--white"><h3>Funded through individual or group health benefit plans</h3><p>*Direct billing may be available to certain insurance companies.</p></article><article class="ps-info ps-info--white"><h3>Private pay</h3><p>(out of pocket)</p></article></div></section>
            <section class="ps-section"><h2>Funded Services</h2><p>We work in partnership with families approved by Family Support for Children with Disabilities (FSCD) who may need support in areas across behaviour, communication and social skills, physical abilities, cognitive abilities, or self-help skills and adaptive functioning.</p><div class="ps-stack">
                <article class="ps-linkcard"><div><h3>Specialized Services (SS) (Edmonton and Calgary)</h3><p>Offered in home, our multidisciplinary team works in collaboration with Autistic children and their families needing support in two or more areas to support their strengths and learning goals.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Ask about this service <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Behavioural & Developmental Supports (BDS) (Edmonton and Calgary, online)</h3><p>BDS agreements support children and youth in need of support in one or two areas with experienced professionals in collaboration with Autistic children and their families.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Ask about this service <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Jordan’s Principle (Province wide)</h3><p>Jordan’s Principle Funding ensures First Nations children can access public services without facing delays, gaps, or denial due to their identity. It aims to provide equitable access to services like healthcare, education, and social services.</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Ask about this service <span aria-hidden="true">→</span></a></article>
            </div></section>
            <section class="ps-section"><h2>Group Programs:</h2><article class="ps-linkcard"><div><h3>START Program (Province wide, online)</h3><p>START at CFASA means Supporting Trust, Autonomy, Relationships, Together. An online communication group that helps parents of young Autistic children, ages 2 to 12, build early language skills through play and everyday routines. The program is delivered by a Speech Language Pathologist (SLP).</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Find out more <span aria-hidden="true">→</span></a></article></section>
            <section class="ps-section"><h2>Private Services (Fee for Service) (Province wide, online)</h2><p>Private fee-for-service supports for Autistic individuals or other neurodevelopmental differences of any age. Delivered through a neuroaffirming, person-centred approach, our team partners with you to learn skills in areas like emotional regulation, communication, executive functioning, motor skills, and daily living. We can offer VIRTUAL supports all across Alberta!</p>
                <div class="ps-highlight ps-highlight--navy"><h3>Through a collaborative partnership and person-centered service, our team can support you in many different areas of your life including:</h3><ul class="ps-checks">
    <li>Emotional or behavioural regulation (e.g., relaxation strategies, managing stress)</li>
    <li>Motor skills (e.g., climbing, jumping, writing)</li>
    <li>Communication (e.g., expressing wants and needs, understanding information)</li>
    <li>Activities of daily living (e.g., eating, dressing, using the bathroom and more)</li>
    <li>Executive functioning (e.g., planning and organization, problem-solving, time management)</li>
</ul></div>
                <p class="ps-small">The Professional Services team will work with you, your child/youth, and/or your family to develop an individualized plan that focuses on goals and priorities. *Remote contracts are possible anywhere in the province (online or in-person), subject to availability.</p>
            </section>
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
