<?php 
$article_title = get_field( 'article_title' );
$article_category = get_the_category( get_the_ID() )[0]->name;
$article_image = get_field( 'article_image' );

?>

<article class="news-article-card" data-filter-item data-filter-values="<?php echo $article_category; ?>">
    <!-- Article Card Image -->
    <?php if ( $article_image ) : ?>
      <div class="news-article-image">
        <img height="212.519" width="437.333" src="<?php echo esc_url( $article_image ); ?>" alt="<?php echo esc_attr( $article_title ); ?>">
      </div>
    <?php endif; ?>

  <!-- Article Card Body -->
  <div class="news-article-card-body">
    <!-- Article Category -->
    <?php if ( $article_category ) : ?>
    <div class="news-article-category">
      <p class="tiny-hint"><?php echo esc_html( $article_category ); ?></p>
    </div>
    <?php endif; ?>

    <!-- Article Title -->
    <?php if ( $article_title ) : ?>
      <h3 class="news-article-card-title"><?php echo esc_html( $article_title ); ?></h3>
    <?php endif; ?>

    <!-- Read More button -->
    <a class="primary-btn" href="<?php the_permalink(); ?>">Read More</a>
  </div>
</article>