<?php

get_header();
?>

<main class="cfasa-ps" data-page="rent-our-kitchen-space" id="cfasa-ps">
 <span id="ps-top">
 </span>
 <nav aria-label="Programs and Services section navigation" class="ps-jump">
  <div class="ps-shell">
   <div class="ps-jump-top">
    <a class="ps-jump-brand" href="<?php echo esc_url( home_url( '/programs-services/' ) ); ?>">
     Programs &amp; Services
    </a>
    <span class="ps-jump-caption">
     Jump to page
    </span>
   </div>
   <div class="ps-jump-links">
    <a href="<?php echo esc_url( home_url( '/programs-services/early-childhood-services/' ) ); ?>" title="Early Childhood Services (Edmonton and Calgary)">
     Early Childhood
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/professional-services/' ) ); ?>" title="Professional Services">
     Professional
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/diagnostic-services/' ) ); ?>" title="Diagnostic Services">
     Diagnostic
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/community-social-recreation-programs/' ) ); ?>" title="Community, Social, &amp; Recreation Programs">
     Social Programs
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/independent-living-skills-employment/' ) ); ?>" title="Independent Living Skills &amp; Employment">
     Living Skills
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/inclusive-post-secondary-education-services/' ) ); ?>" title="Inclusive Post-Secondary Education Services (IPSE)">
     IPSE
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/summer-programming/' ) ); ?>" title="Summer Programming">
     Summer Programs
    </a>
    <a aria-current="page" class="is-active" href="<?php echo esc_url( home_url( '/programs-services/rent-our-kitchen-space/' ) ); ?>" title="Rent Our Kitchen Space!">
     Kitchen Rental
    </a>
   </div>
  </div>
 </nav>
 <header class="ps-hero" style="--ps-hero-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/kitchen-web-pic.png)">
  <div class="ps-shell ps-hero-inner">
   <div class="ps-breadcrumb">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
     Home
    </a>
    <span aria-hidden="true">
     ›
    </span>
    <a href="<?php echo esc_url( home_url( '/programs-services/' ) ); ?>">
     Programs &amp; Services
    </a>
    <span aria-hidden="true">
     ›
    </span>
    <span>
     Rent Our Kitchen Space!
    </span>
   </div>
   <div class="ps-hero-copy">
    <h1>
     Rent Our Kitchen Space!
    </h1>
    <p>
     Looking for a warm, well-equipped space for your next gathering?
    </p>
   </div>
  </div>
 </header>
 <section class="ps-section ps-shell">
  <div class="ps-prose">
   <h2>
    About
   </h2>
   <p>
    Centre 104’s kitchen is available to rent during evenings and weekends and can comfortably host groups of up to 45 people. The space features multiple cooking stations, large islands for collaborative preparation, and a spacious dining table—ideal for workshops, team events, cooking classes, and community celebrations.
   </p>
  </div>
  <div class="ps-section-heading">
   <span>
    Details
   </span>
  </div>
  <div class="ps-kitchen-layout">
   <div class="ps-prose">
    <h2>
     Rental Options
    </h2>
    <p>
     <strong>
      Address
     </strong>
     <br/>
     Centre 104
     <br/>
     #144, 5241 Calgary Trail NW
     <br/>
     Edmonton, Alberta
    </p>
    <p>
     <strong>
      Capacity
     </strong>
     <br/>
     Up to 45 people
    </p>
    <p>
     <strong>
      Rental Costs
     </strong>
     <br/>
     Non-Profit Rate: $40/hour
     <br/>
     Private Rate: $50/hour
    </p>
    <div class="ps-note">
     <strong>
      Important Note
     </strong>
     <p>
      The kitchen is not certified by Alberta Health Services (AHS). It can be used for light use, such as warming or serving food, but not for commercial food preparation or events requiring a certified kitchen.
     </p>
    </div>
   </div>
   <div class="ps-kitchen-image">
    <img alt="The Centre 104 kitchen rental space" loading="lazy" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/kitchen-web-pic.png"/>
   </div>
  </div>
 </section>
 <section aria-label="How to contact CFASA" class="ps-contact" id="ps-contact">
  <div>
   <h2>
    Interested in Renting Our Kitchen?
   </h2>
   <p>
    Contact Ewa for availability and rental inquiries.
   </p>
  </div>
  <div class="ps-contact-items">
   <div class="ps-contact-item">
    <span>
     Email
    </span>
    <a href="mailto:ebochinski@centreforautismab.ca">
     ebochinski@centreforautismab.ca
    </a>
   </div>
  </div>
 </section>
 <section class="ps-promo">
  <div class="ps-shell">
   <div>
    <h2>
     Discover What’s Possible
    </h2>
    <p>
     Meet new friends, build skills, and explore something new.
    </p>
    <a class="ps-button-light" href="<?php echo esc_url( home_url( '/programs-services/' ) ); ?>">
     Explore Programs
    </a>
   </div>
  </div>
 </section>
 <div class="ps-back ps-shell">
  <a href="#ps-top">
   Back to top
   <span aria-hidden="true">
    ↑
   </span>
  </a>
 </div>


<?php
// The active theme's footer.php closes the <main> element.
get_footer();
