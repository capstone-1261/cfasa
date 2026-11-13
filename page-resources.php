<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>

<div class="resources-intro">
  <h2>External Resources</h2>
    <h3>A list of general external resources</h3>
</div>

<section class="external-resources">

  <!-- Filter options -->
  <div class="external-resources-filters">
    <span>Filter by Topic:</span>
    <div class="filter-options">
      <!-- Filter options go here -->
    </div>
    <span>Show More Topics...</span>
    <span>Clear All Filters</span>
  </div>

  <!-- Resource cards -->
  <div class="external-resources-container">
  <div class="resource-card">
  <div class="resource-card-body">
    <div class="resource-logo">
      <!-- resource logo goes here -->
    </div>

    <div class="resource-content">
      <h2>Resource Title</h2>
      <p>Resource description</p>
    </div>

    <div class="resource-link">
      <a href="#" class="btn">Take Me There</a>
    </div>
  </div>

  <div class="resource-card-footer">
    <div class="resource-full-link">      
      <p class="small-condensed">Full Link:</p>
      <a class="small-condensed" href="#">Resource Full Link</a>
    </div>
    <div class="resource-tags">
      <p class="small-condensed">Topics:</p>
      <span class="pill-badge">
        <!-- Topic/category Tag -->
      </span>
    </div>
  </div>
</div>
    <!-- ACF Goes here, using template part called external-resource-card  -->
  </div>
</section>

<?php echo do_blocks( '<!-- wp:pattern {"slug":"cfasab-theme/promo-banner"} /-->' ); ?>


<?php get_footer(); ?>