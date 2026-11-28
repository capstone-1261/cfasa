<?php get_header(); ?>

<main class="single-news-article">
<section>

  <div class="single-news-article-header">
      <!-- Article Title -->
      <h1 style="font-size: var(--wp--preset--font-size--display);"><?php the_title(); ?></h1>

      <!-- Article Image -->
      <?php
        $article_image = get_field( 'article_image' );
       if ( $article_image ) : ?>
        <div class="news-article-image">
          <img src="<?php echo esc_url( $article_image ); ?>" alt="<?php echo esc_attr( $article_title ); ?>">
        </div>
      <?php endif; ?>
  </div>

  <div class="single-news-article-content">
    <!-- Article Date -->
    <p class="tiny-hint" style="color: var(--wp--preset--color--cyan-cfasa-dark);">Date: <?php echo get_the_date(); ?></p>

    <!-- Article Content -->
    <?php the_content(); ?>
  </div>
  
  <!-- Link back to news-media page -->
  <div class="single-news-article-footer">
    <a 
      class="icon-btn" 
      href="<?php echo esc_url( get_permalink( get_page_by_path( '/resources/news-media' ) ) ); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none" style="transform: rotate(180deg);">
        <path d="M5.84085 4.40074C5.93449 4.4811 5.98708 4.59002 5.98708 4.7036C5.98708 4.81717 5.93449 4.9261 5.84085 5.00645L0.84086 9.29217C0.746077 9.36787 0.620713 9.40908 0.491179 9.40712C0.361645 9.40517 0.238055 9.36019 0.146446 9.28167C0.0548378 9.20314 0.00236337 9.09721 7.78981e-05 8.98618C-0.00220758 8.87515 0.0458743 8.7677 0.134194 8.68645L4.78085 4.7036L0.134194 0.720738C0.0458743 0.639495 -0.00220758 0.53204 7.78981e-05 0.421011C0.00236337 0.309982 0.0548378 0.204047 0.146446 0.125526C0.238055 0.047004 0.361645 0.00202575 0.491179 6.67697e-05C0.620713 -0.00189221 0.746077 0.039321 0.84086 0.115024L5.84085 4.40074Z" fill-rule="evenodd" clip-rule="evenodd" fill="#62C6C6"/>
        <path d="M9.84138 4.40074C9.93502 4.4811 9.98761 4.59002 9.98761 4.7036C9.98761 4.81717 9.93502 4.9261 9.84138 5.00645L4.84139 9.29217C4.79562 9.33428 4.74042 9.36805 4.67908 9.39147C4.61775 9.4149 4.55154 9.42749 4.48441 9.4285C4.41727 9.42952 4.35058 9.41894 4.28833 9.39738C4.22607 9.37583 4.16951 9.34374 4.12203 9.30305C4.07455 9.26235 4.03712 9.21387 4.01198 9.16051C3.98683 9.10714 3.97448 9.04998 3.97566 8.99244C3.97685 8.9349 3.99154 8.87814 4.01887 8.82557C4.0462 8.773 4.0856 8.72569 4.13472 8.68645L8.78138 4.7036L4.13472 0.720738C4.04641 0.639495 3.99832 0.53204 4.00061 0.421011C4.00289 0.309982 4.05537 0.204047 4.14698 0.125526C4.23859 0.047004 4.36218 0.00202575 4.49171 6.67697e-05C4.62124 -0.00189221 4.74661 0.039321 4.84139 0.115024L9.84138 4.40074Z" fill-rule="evenodd" clip-rule="evenodd" fill="#62C6C6"/>
        </svg>
        Back to News & Media
    </a>
  </div>
</section>


<?php get_footer(); ?>