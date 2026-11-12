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
                <a href="<?php echo esc_url( home_url('/independent-living-skills-employment/') ); ?>" >Living Skills & Employment</a>
                <a href="<?php echo esc_url( home_url('/inclusive-post-secondary-education-services/') ); ?>" >IPSE</a>
                <a href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" >Summer Programs</a>
                <a class="ps-current" href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" aria-current="page">Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <div class="ps-surface">
        <div class="ps-wrap">
            <nav class="ps-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">›</span>
                <a href="<?php echo esc_url( home_url('/programs-services/') ); ?>">Programs &amp; Services</a><span aria-hidden="true">›</span>
                <span>Rent Our Kitchen Space!</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Rent Our Kitchen Space!</h1>
                    <p class="ps-lead">Looking for a warm, well-equipped space for your next gathering?</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/kitchen.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Rent Our Kitchen Space!" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>Centre 104’s kitchen is now available for rental during evenings and weekends and can comfortably host groups of up to 45 people! The space features multiple cooking stations, large islands for collaborative prep, and a spacious dining table—making it ideal for workshops, team events, cooking classes, or community celebrations.</p><p><strong>*Please note:</strong> the kitchen is not certified by Alberta Health Services (AHS). It can be used for light use (e.g., warming or serving food), but not for commercial food preparation or events that require a certified kitchen.</p></section>
            <section class="ps-highlight ps-highlight--mint ps-space"><h2 class="ps-caps">RENTAL OPTIONS:</h2><div class="ps-grid ps-grid--3"><article class="ps-info ps-info--white"><h3>Address:</h3><p>Centre 104 | 144, 5241 Calgary Trail NW, Edmonton, AB</p></article><article class="ps-info ps-info--white"><h3>Capacity:</h3><p>Up to 45 people</p></article><article class="ps-info ps-info--white"><h3>Rates:</h3><p><strong>Non-profit:</strong> $40/hr<br><strong>Private:</strong> $50/hr</p></article></div></section>
            <section class="ps-section"><h2>Inside our kitchen</h2><div class="ps-kitchen-photos"><img src="<?php echo esc_url( get_theme_file_uri('/assets/images/kitchen.jpg') ); ?>" alt="Centre 104 kitchen facilities" loading="lazy"><div class="ps-photo-note">Additional kitchen gallery photos can be added when your team provides the original images.</div></div></section>
            <section class="ps-callout ps-space"><div><h2>INTERESTED IN RENTING OUR KITCHEN?</h2><p>Contact Ewa at <a href="mailto:ebochinski@centreforautismab.ca">ebochinski@centreforautismab.ca</a>.</p></div><a class="ps-btn ps-btn--light" href="mailto:ebochinski@centreforautismab.ca">Email us now <span aria-hidden="true">→</span></a></section>
        </div><!-- .ps-wrap -->
    </div><!-- .ps-surface -->
<?php

get_footer();
?>
