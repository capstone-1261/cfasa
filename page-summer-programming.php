<?php

get_header();
get_template_part('parts/hero-banner-minimal'); ?>

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
                <a class="ps-current" href="<?php echo esc_url( home_url('/summer-programming/') ); ?>" aria-current="page">Summer Programs</a>
                <a href="<?php echo esc_url( home_url('/rent-our-kitchen-space/') ); ?>" >Kitchen Rental</a>
            </nav>
        </div>
    </section>
    <div class="ps-surface">
        <div class="ps-wrap">
            <nav class="ps-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a><span aria-hidden="true">›</span>
                <a href="<?php echo esc_url( home_url('/programs-services/') ); ?>">Programs &amp; Services</a><span aria-hidden="true">›</span>
                <span>Summer Programming</span>
            </nav>
            <section class="ps-hero">
                <div>
                    <h1>Summer Programming</h1>
                    <p class="ps-lead">This summer, join us for a season full of fun, friendship, and new experiences!</p>
                </div>
                <?php
                $ps_hero = get_the_post_thumbnail_url( get_queried_object_id(), 'large' );
                if ( ! $ps_hero ) {
                    $ps_hero = get_theme_file_uri( '/assets/images/summer.jpg');
                }
                ?>
                <img src="<?php echo esc_url( $ps_hero ); ?>" alt="Summer Programming" fetchpriority="high">
            </section>

            <section class="ps-intro"><p>Our summer programming (respite) is designed for children and teens to stay active, engaged, and creative while school is out. With a mix of indoor and outdoor activities, hands-on projects, and group games, each day offers something new to explore in a safe and supportive environment.</p><p>It’s the perfect way to build confidence, make new friends, and enjoy everything summer has to offer. All CFASA summer programs are supervised by Centre-trained aides and employ a high staff-to-participant ratio.</p></section>
            <section class="ps-highlight ps-highlight--cream ps-space"><h2 class="ps-caps">OUR SUMMER PROGRAMS</h2><div class="ps-stack">
                <article class="ps-linkcard"><div><h3>Little Aces Summer Respite</h3><p>Edmonton (ages 3 to 5)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Junior Ace Summer Respite</h3><p>Edmonton (ages 6 to 8)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Senior Ace Summer Respite</h3><p>Edmonton (ages 9 to 12)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
                <article class="ps-linkcard"><div><h3>Teen Summer Programming (Respite)</h3><p>Edmonton (ages 13 to 17)</p></div><a class="ps-btn" href="<?php echo esc_url( home_url('/contact-us/') ); ?>" >Learn more <span aria-hidden="true">→</span></a></article>
            </div></section>
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

<main class="cfasa-ps" data-page="summer-programming" id="cfasa-ps">
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
    <a aria-current="page" class="is-active" href="<?php echo esc_url( home_url( '/programs-services/summer-programming/' ) ); ?>" title="Summer Programming">
     Summer Programs
    </a>
    <a href="<?php echo esc_url( home_url( '/programs-services/rent-our-kitchen-space/' ) ); ?>" title="Rent Our Kitchen Space!">
     Kitchen Rental
    </a>
   </div>
  </div>
 </nav>
 <header class="ps-hero" style="--ps-hero-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/just-4-teens-iStock-501861979-1920x800.jpg)">
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
     Summer Programming
    </span>
   </div>
   <div class="ps-hero-copy">
    <h1>
     Summer Programming
    </h1>
    <p>
     Join us for a season of fun, friendship, and new experiences!
    </p>
   </div>
  </div>
 </header>
 <section class="ps-section ps-shell">
  <div class="ps-prose ps-narrow">
   <h2>
    About
   </h2>
   <p>
    Our summer programming (respite) is designed for children and teens to stay active, engaged, and creative while school is out. With indoor and outdoor activities, hands-on projects, and group games, each day offers something new to explore in a safe and supportive environment.
   </p>
   <p>
    All CFASA summer programs are supervised by Centre-trained aides and have a high staff-to-participant ratio.
   </p>
  </div>
  <div class="ps-section-heading">
   <span>
    Summer Programs
   </span>
  </div>
  <div class="ps-program-list">
   <article class="ps-program-row">
    <div class="ps-program-row-copy">
     <div class="ps-program-meta">
      <span>
       Ages 3–5
      </span>
      <span>
       Edmonton
      </span>
     </div>
     <h3>
      Little Aces Summer Respite
     </h3>
     <p>
      A structured summer program with physical and creative activities designed to support growth and fun for Autistic children ages 3 to 5.
     </p>
    </div>
    <a class="ps-pill" href="mailto:info@centreforautismab.ca?subject=Program%20enquiry%3A%20Little%20Aces%20Summer%20Respite">
     Ask About Program
    </a>
   </article>
   <article class="ps-program-row">
    <div class="ps-program-row-copy">
     <div class="ps-program-meta">
      <span>
       Ages 6–8
      </span>
      <span>
       Edmonton
      </span>
     </div>
     <h3>
      Junior Ace Summer Respite
     </h3>
     <p>
      Build skills through play, fun, and social interaction in a safe and supportive environment.
     </p>
    </div>
    <a class="ps-pill" href="mailto:info@centreforautismab.ca?subject=Program%20enquiry%3A%20Junior%20Ace%20Summer%20Respite">
     Ask About Program
    </a>
   </article>
   <article class="ps-program-row">
    <div class="ps-program-row-copy">
     <div class="ps-program-meta">
      <span>
       Ages 9–12
      </span>
      <span>
       Edmonton
      </span>
     </div>
     <h3>
      Senior Ace Summer Respite
     </h3>
     <p>
      Art, science, and movement activities inspired by children’s interests, with chances to build skills and friendships.
     </p>
    </div>
    <a class="ps-pill" href="mailto:info@centreforautismab.ca?subject=Program%20enquiry%3A%20Senior%20Ace%20Summer%20Respite">
     Ask About Program
    </a>
   </article>
   <article class="ps-program-row">
    <div class="ps-program-row-copy">
     <div class="ps-program-meta">
      <span>
       Ages 13–17
      </span>
      <span>
       Edmonton
      </span>
     </div>
     <h3>
      Teen Summer Programming (Respite)
     </h3>
     <p>
      Summer adventures with physical activity, skill development, imagination, and social interaction.
     </p>
    </div>
    <a class="ps-pill" href="mailto:info@centreforautismab.ca?subject=Program%20enquiry%3A%20Teen%20Summer%20Programming%20%28Respite%29">
     Ask About Program
    </a>
   </article>
  </div>
 </section>
 <section aria-label="How to contact CFASA" class="ps-contact" id="ps-contact">
  <div>
   <h2>
    Interested in Summer Programming?
   </h2>
   <p>
    Contact us for program dates, availability, and registration information.
   </p>
  </div>
  <div class="ps-contact-items">
   <div class="ps-contact-item">
    <span>
     Email
    </span>
    <a href="mailto:info@centreforautismab.ca">
     info@centreforautismab.ca
    </a>
   </div>
   <div class="ps-contact-item">
    <span>
     Phone
    </span>
    <a href="tel:+17804886600">
     780-488-6600
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
