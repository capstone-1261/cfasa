<?php get_header(); ?>

<?php get_template_part( 'parts/hero-banner-minimal' ); ?>

<!-- Query Loop for News Articles -->
<?php
$articles = new WP_Query(
  array(
    'post_type'      => 'news-article',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
  )
);
$news_article_ids = wp_list_pluck( $articles->posts, 'ID' );

?>

<main>
  <section class="news-and-media" data-filter-group>

    <!-- Filter options -->  
    <!-- TODO: If there are no filters selected, show all cards. If a filter is selected, only show cards for that year. If a year has no cards, hide the section. -->
    <div class="filter-options-container">
      <span>Filter by Year:</span>
      <div class="filter-options">
        <?php
          $years = array();
          foreach ( $news_article_ids as $article_id ) {
            $year = get_the_date( 'Y', $article_id );
            if ( ! in_array( $year, $years ) ) {
              $years[] = $year;
            }
          }
          rsort( $years );
          foreach ( $years as $year ) {
            echo '<button class="filter-option" data-filter="' . esc_attr( $year ) . '">' . esc_html( $year ) . '</button>';
          }
        ?>
      </div>
      <button class="filter-clear" type="button" data-filter-clear>Clear All Filters</button>
    </div>

    <!-- News Article Cards -->
    <div class="news-article-container">

      <p class="filter-empty-state" data-filter-empty hidden>No resources match this topic.</p>

    

      <?php
        if ( $articles->have_posts() ) :
          while ( $articles->have_posts() ) :
            $articles->the_post();
            get_template_part( 'parts/article-card' );
          endwhile;
        endif;

        wp_reset_postdata();
      ?>
    </div>

  </section>

  <!-- Component: Promo banner -->
<?php get_template_part('parts/promo-banner'); ?>

<?php get_footer(); ?>