<?php get_header(); ?>
<?php get_template_part('parts/hero-banner-basic'); ?>
<main>


<div class="hero">
  <div>
      <h1>Workshops On Demand</h1>
      <p class="hero-subtitle">We have compiled a list of links for previous CFASA and AIDE Canada workshops hosted by the Centre for Autism Services Alberta.</p>
      <p class="hero-description">Simply click the linked images to access workshop recordings through the AIDE Canada platform or on our YouTube channel.</p>
  </div>

  <div class="hero-image">
    <!-- Hero image goes here -->
  </div>
</div>

<section class="workshops-on-demand">

  <!-- Filter options -->
  <div class="workshops-filters">
    <span class="h3">Browse Workshops</span>
    <p>Explore past recordings by year</p>
    <div class="filter-options">
      <!-- Filter options go here -->
       <button class="filter-button">All Years</button>
       <button class="filter-button">2027</button>
       <button class="filter-button">2026</button>
       <button class="filter-button">2025</button>
       <button class="filter-button">2024</button>
       <button class="filter-button">2023</button>
       <button class="filter-button">2022</button>
       <button class="filter-button">2021</button>
       <button class="filter-button">2020</button>
    </div>
  </div>

  <div class="workshops-on-demand-container">
      <!-- 2027 -->
     <section class="2027">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2027</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

      <!-- 2026 -->
     <section class="2026">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2026</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2025 -->
     <section class="2025">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2025</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2024 -->
     <section class="2024">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2024</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2023 -->
     <section class="2023">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2023</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2022 -->
     <section class="2022">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2022</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2021 -->
     <section class="2021">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2021</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>

     <!-- 2020 -->
     <section class="2020">
        <!-- Section Title: lines variant -->
        <div class="section-title-lines">
          <span class="section-title-vertical-line"></span>
          <h2>2020</h2>
          <span class="section-title-horizontal-line"></span>
        </div>

        <!-- Workshop cards container -->
         <div class="workshops-on-demand-cards-container">
          <!-- ACF Goes here, using template part called external-resource-card  -->
        </div>
     </section>
  </div>

</section>

<!-- Component: Promo banner -->
<?php echo do_blocks( '<!-- wp:pattern {"slug":"cfasab-theme/promo-banner"} /-->' ); ?>

 <?php get_footer(); ?>