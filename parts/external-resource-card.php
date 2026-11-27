<?php
$resource_logo = get_field( 'resource_logo' );
$resource_link = get_field( 'resource_link' );
$resource_title = get_field( 'resource_title' );
$resource_description = get_field( 'resource_description' );
$resource_tags = get_field( 'resource_tags' );

if ( $resource_tags instanceof WP_Term ) {
  $resource_tags = array( $resource_tags );
} elseif ( ! is_array( $resource_tags ) ) {
  $resource_tags = array();
}

$resource_tag_slugs = array();
foreach ( $resource_tags as $resource_tag ) {
  if ( $resource_tag instanceof WP_Term ) {
    $resource_tag_slugs[] = $resource_tag->slug;
  }
}
?>


<article class="resource-card" data-filter-item data-filter-values="<?php echo esc_attr( implode( ' ', $resource_tag_slugs ) ); ?>">
  <div class="resource-card-body">
    <?php if ( $resource_logo ) : ?>
      <div class="resource-logo">
        <!--If the logo is a svg, display it as an svg -->
        <?php if ( $resource_logo && pathinfo( $resource_logo, PATHINFO_EXTENSION ) === 'svg' ) : ?>
          <?php echo file_get_contents( $resource_logo ); ?>
        <?php else : ?>
          <img src="<?php echo esc_url( $resource_logo ); ?>" alt="<?php echo esc_attr( $resource_title ); ?>">
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="resource-content">
      <?php if ( $resource_title ) : ?>
        <h2 class="resource-title"><?php echo esc_html( $resource_title ); ?></h2>
      <?php endif; ?>
      <?php if ( $resource_description ) : ?>
        <p class="resource-description"><?php echo esc_html( $resource_description ); ?></p>
      <?php endif; ?>
    </div>

    <?php if ( $resource_link ) : ?>
      <div class="resource-link">
        <a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $resource_link ); ?>" class="btn">Take Me There</a>
      </div>
    <?php endif; ?>
  </div>

  <?php if ( $resource_link ) : ?>
    <div class="resource-card-footer">
      <div class="resource-full-link">
        <p class="small-condensed">Full Link:</p>
        <a target="_blank" rel="noopener noreferrer" class="small-condensed" href="<?php echo esc_url( $resource_link ); ?>"><?php echo esc_html( $resource_link ); ?></a>
      </div>
      <?php if ( $resource_tags ) : ?>
        <div class="resource-tags">
          <p class="small-condensed">Topics:</p>
          <?php foreach ( $resource_tags as $resource_tag ) : ?>
            <?php if ( $resource_tag instanceof WP_Term ) : ?>
              <a class="pill-badge"><?php echo esc_html( $resource_tag->name ); ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</article>