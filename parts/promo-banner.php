<?php
/**
 * Title: Promo Banner
 * Slug: cfasab-theme/promo-banner
 * Categories: banner, call-to-action
 * Description: Promotional banner with teal fallback background, headline, and register button.
 */
?>

<!-- wp:group {"style":{"backgroundColor":"cyan-cfasa-dark"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--cyan-cfasa-dark);margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase"}},"textColor":"white","fontSize":"display"} -->
<p class="has-white-color has-text-color has-link-color has-display-font-size" style="text-transform:uppercase">Fall Programs NOW OPEN!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h1"} -->
<p class="has-white-color has-text-color has-link-color has-h-1-font-size">Meet new friends and try something new this fall!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
  <!-- wp:button {"backgroundColor":"white","textColor":"navy-blue-cfasa","style":{"elements":{"link":{"color":{"text":"var:preset|color|navy-blue-cfasa"}}},"dimensions":{"width":"174px"},"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"spacing":{"padding":{"left":"0px","right":"0px"}}},"fontSize":"button-label"} -->
  <div class="wp-block-button">
    <a class="wp-block-button__link has-navy-blue-cfasa-color has-white-background-color has-text-color has-background has-link-color has-button-label-font-size has-custom-font-size wp-element-button" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-right:0px;padding-left:0px">Register</a>
  </div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
