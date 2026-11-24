<?php

get_header();
?>

<main class="cfasa-ps" data-page="inclusive-post-secondary-education-services" id="cfasa-ps">
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
    <a aria-current="page" class="is-active" href="<?php echo esc_url( home_url( '/programs-services/inclusive-post-secondary-education-services/' ) ); ?>" title="Inclusive Post-Secondary Education Services (IPSE)">
     IPSE
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/summer-programming/' ) ); ?>" title="Summer Programming">
     Summer Programs
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/rent-our-kitchen-space/' ) ); ?>" title="Rent Our Kitchen Space!">
     Kitchen Rental
    </a>
   </div>
  </div>
 </nav>
 <header class="ps-hero" style="--ps-hero-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/Young-Adult-Social-Night-YASN-1920x800.png)">
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
     Inclusive Post-Secondary Education Services (IPSE)
    </span>
   </div>
   <div class="ps-hero-copy">
    <h1>
     Inclusive Post-Secondary Education Services (IPSE)
    </h1>
   </div>
  </div>
 </header>
 <section class="ps-section ps-shell">
  <div class="ps-prose ps-narrow">
   <h2>
    About
   </h2>
   <p>
    <strong>
     Are you ready for the post-secondary experience?
    </strong>
   </p>
   <p>
    IPSE Services supports adults with developmental disabilities who want to audit post-secondary education and work toward their career goals. Through personalized coaching, learning supports, and peer guidance, participants explore career options, navigate campus life, and build skills for success.
   </p>
   <h2>
    Who This Service Is For
   </h2>
   <p>
    Adults with developmental disabilities who:
   </p>
   <ul>
    <li>
     Have Persons with Developmental Disabilities (PDD) funding
    </li>
    <li>
     Are motivated and interested in attending post-secondary education
    </li>
    <li>
     Want help navigating school and employment
    </li>
    <li>
     Would benefit from individualized coaching to reach school and career goals
    </li>
   </ul>
   <h2>
    What Participants Receive
   </h2>
   <ul>
    <li>
     Support identifying career goals and courses that align with them
    </li>
    <li>
     Help adapting course and exam materials and navigating campus
    </li>
    <li>
     Support building peer connections and participating in clubs, groups, and activities
    </li>
    <li>
     Employment support: job preparation, job search, and on-the-job coaching
    </li>
    <li>
     Help accessing campus resources and supports
    </li>
   </ul>
  </div>
 </section>
 <section aria-label="How to contact CFASA" class="ps-contact" id="ps-contact">
  <div>
   <h2>
    Interested in IPSE Services?
   </h2>
   <p>
    Contact our post-secondary team to learn more.
   </p>
  </div>
  <div class="ps-contact-items">
   <div class="ps-contact-item">
    <span>
     Email
    </span>
    <a href="mailto:postsecondary@centreforautismab.ca">
     postsecondary@centreforautismab.ca
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
