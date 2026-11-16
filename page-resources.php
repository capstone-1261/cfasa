<?php get_header(); ?>
<?php get_template_part( 'parts/hero-banner-minimal' ); ?>
<main>

<div class="">
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

    <!-- ACF Goes here, using template part called external-resource-card  -->
    <?php get_template_part( 'parts/external-resource-card' ); ?>

  </div>
</section>

<?php get_template_part( 'parts/promo-banner' ); ?>


<?php get_footer(); ?>