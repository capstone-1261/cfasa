<?php 
$article_title = get_field( 'article_title' );
$article_category = get_field( 'article_category' );
$article_image = get_field( 'article_image' );


if ( $article_category instanceof WP_Term ) {
  $article_category = array( $article_category );
} elseif ( ! is_array( $article_category ) ) {
  $article_category = array();
}

$article_category_slugs = array();
foreach ( $article_category as $category ) {
  if ( $category instanceof WP_Term ) {
    $article_category_slugs[] = $category->slug;
  }
}
?>

<article class="news-article-card" data-filter-item data-filter-values="<?php echo esc_attr( implode( ' ', $article_category_slugs ) ); ?>">
  <div class="news-article-card-body">
    <?php if ( $article_image ) : ?>
      <div class="news-article-image">
        <img src="<?php echo esc_url( $article_image ); ?>" alt="<?php echo esc_attr( $article_title ); ?>">
      </div>
    <?php endif; ?>

    <div class="news-article-content">
      <?php if ( $article_title ) : ?>
        <h2 class="news-article-title"><?php echo esc_html( $article_title ); ?></h2>
      <?php endif; ?>
    </div>

    <?php if ( $article_category ) : ?>
      <div class="news-article-category">
        <p class="small-condensed">Category: <?php echo esc_html( implode( ', ', wp_list_pluck( $article_category, 'name' ) ) ); ?></p>
      </div>
    <?php endif; ?>
  </div>
</article>