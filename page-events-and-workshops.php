<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

<div class="events-and-workshops-intro">
  <div>
      <h2>Upcoming Events</h2>
      <p>Family events and learning opportunities.</p>
  </div>
</div>


<section class="upcoming-events">
  <div class="upcoming-events-container">
    <!-- ACF Goes here, using template part / figma component called event-card-large -->
     <!-- If no event is available, display a message -->
  </div>
</section>

<div class="banner page-shoutout-dark">
  <!-- arrow circle icon -->
  <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81" fill="none">
    <path d="M29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z" fill="#62C6C6"/>
    <mask id="stroke0_1079_13247" maskUnits="userSpaceOnUse" x="0" y="0" width="81" height="81" fill="black">
      <rect fill="white" width="81" height="81"/>
      <path d="M78 40.5C78 61.2107 61.2107 78 40.5 78C19.7893 78 3 61.2107 3 40.5C3 19.7893 19.7893 3 40.5 3C61.2107 3 78 19.7893 78 40.5Z"/>
      <path d="M29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z"/>
    </mask>
    <path d="M78 40.5C78 61.2107 61.2107 78 40.5 78C19.7893 78 3 61.2107 3 40.5C3 19.7893 19.7893 3 40.5 3C61.2107 3 78 19.7893 78 40.5ZM29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z" stroke-width="6" stroke="#FFD02D" mask="url(#stroke0_1079_13247)"/>
  </svg>

  <!-- banner text -->
  <div>
    <h2 class="display-smaller">Personalized Workshops</h2>
    <p class="hero-subtitle">Check out our customizable Professional Development!</p>
  </div>

  <!-- call to action -->
  <a href="/events-and-workshops/personalized-workshops" class="icon-btn-light">Take Me There</a>

</div>

<div class="banner page-shoutout-light">
  <!-- arrow circle icon -->
  <svg xmlns="http://www.w3.org/2000/svg" width="81" height="81" viewBox="0 0 81 81" fill="none">
    <path d="M29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z" fill="#FFD02D"/>
    <mask id="stroke0_1079_13252" maskUnits="userSpaceOnUse" x="0" y="0" width="81" height="81" fill="black">
    <rect fill="white" width="81" height="81"/>
    <path d="M78 40.5C78 61.2107 61.2107 78 40.5 78C19.7893 78 3 61.2107 3 40.5C3 19.7893 19.7893 3 40.5 3C61.2107 3 78 19.7893 78 40.5Z"/>
    <path d="M29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z"/>
    </mask>
    <path d="M78 40.5C78 61.2107 61.2107 78 40.5 78C19.7893 78 3 61.2107 3 40.5C3 19.7893 19.7893 3 40.5 3C61.2107 3 78 19.7893 78 40.5ZM29.4781 56.0015L25.1496 51.673L43.4234 33.3811H29.6954L29.7317 27.477H53.656V51.4194H47.7157L47.7519 37.7096L29.4781 56.0015Z" stroke-width="6" stroke="#62C6C6" mask="url(#stroke0_1079_13252)"/>
  </svg>

  <!-- banner text -->
  <div>
    <h2 class="display-smaller">Missed a Workshop?</h2>
    <p class="hero-subtitle">Get caught up with our Workshops On Demand</p>
  </div>

  <!-- call to action -->
  <a href="/events-and-workshops/workshops-on-demand" class="icon-btn-light">Take Me There</a>
  
</div>

<!-- Component: Promo banner -->
<?php get_template_part('parts/promo-banner'); ?>

<?php echo do_blocks( '<!-- wp:pattern {"slug":"cfasab-theme/promo-banner"} /-->' ); ?>




<?php get_footer(); ?>