<?php get_header(); ?>
<?php get_template_part( 'parts/hero-banner-minimal' ); ?>
<?php
$resources = new WP_Query(
  array(
    'post_type'      => 'resource',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
  )
);
$resource_ids = wp_list_pluck( $resources->posts, 'ID' );
$resource_tags = $resource_ids
  ? get_terms(
    array(
      'taxonomy'   => 'post_tag',
      'object_ids' => $resource_ids,
      'hide_empty' => false,
    )
  )
  : array();
?>
<main>

<section class="external-resources" data-filter-group>

  <!-- Filter options -->
  <div class="filter-options-container">
    <span>Filter by Topic:</span>
    <div class="filter-options">
      <?php
      if ( ! empty( $resource_tags ) && ! is_wp_error( $resource_tags ) ) {
        foreach ( $resource_tags as $tag ) {
          printf(
            '<button type="button" class="filter-option" data-filter-option data-filter-value="%1$s" aria-pressed="false">%2$s</button>',
            esc_attr( $tag->slug ),
            esc_html( $tag->name )
          );
        }
      }
      ?>
    </div>
    <button type="button" class="filter-clear" data-filter-clear disabled>Clear All Filters</button>
  </div>

  <!-- Resource cards -->
  <div class="external-resources-container">
    <p class="filter-empty-state" data-filter-empty hidden>No resources match this topic.</p>
    <?php
    if ( $resources->have_posts() ) :
      while ( $resources->have_posts() ) :
        $resources->the_post();
        get_template_part( 'parts/external-resource-card' );
      endwhile;
    endif;

    wp_reset_postdata();
    ?>
  </div>
</section>

<!-- Component: Promo banner -->
<?php get_template_part('parts/promo-banner'); ?>

<?php get_footer(); ?>