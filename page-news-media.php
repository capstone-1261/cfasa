<?php get_header(); ?>
<?php get_template_part( 'parts/hero-banner-minimal' ); ?>

<main>


<div class="news-and-media">
    <!-- Filter options -->
    <div class="news-and-media-filters">
      <span>Filter by Year:</span>
      <div class="filter-options">
        <!-- Filter options go here: 2026 - 2021 -->
      </div>
      <span>Clear All Filters</span>
    </div>

    <!-- If there are no filters selected, show all cards. If a filter is selected, only show cards for that year. If a year has no cards, hide the section. -->

    <section class="news-year">
      <h2 class="section-title">2026</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>

    <section class="news-year">
      <h2 class="section-title">2025</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>

    <section class="news-year">
      <h2 class="section-title">2024</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>

    <section class="news-year">
      <h2 class="section-title">2023</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>

    <section class="news-year">
      <h2 class="section-title">2022</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>

    <section class="news-year">
      <h2 class="section-title">2021</h2>
      <div class="card-container">
        <!-- ACF goes here -->
      </div>
    </section>
</div>


<?php get_footer(); ?>