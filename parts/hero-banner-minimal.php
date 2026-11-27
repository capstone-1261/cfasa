<?php
// 1. Fetch and escape native WordPress data
$subtitle = has_excerpt() ? esc_html( get_the_excerpt() ) : '';
$minimal_bg_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

// 2. Build dynamic background JSON (Featured Image if set, otherwise #189696 teal fallback)
if ( $minimal_bg_image ) {
    $safe_url     = esc_url( $minimal_bg_image );
    $desktop_bg   = '"background":{"backgroundImage":{"url":"' . $safe_url . '","source":"file"},"backgroundSize":"cover","backgroundAttachment":"scroll"},';
    $mobile_bg    = ',"background":{"backgroundImage":{"url":"' . $safe_url . '","source":"file"},"backgroundSize":"cover","backgroundAttachment":"scroll"}';
    $fallback_class = '';
    $fallback_css = '';
} else {
    $desktop_bg   = '"color":{"background":"#189696"},';
    $mobile_bg    = '';
    $fallback_class = ' has-background';
    $fallback_css = 'background-color:#189696;';
}

// 3. Only render Subtitle and Intro blocks if they have content
$subtitle_block = $subtitle
    ? '<!-- wp:paragraph {"metadata":{"name":"Hero Subtitle"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-cfasa-dark"}}},"typography":{"fontSize":"21px"},"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}},"textColor":"cyan-cfasa-dark"} --><p class="has-cyan-cfasa-dark-color has-text-color has-link-color" style="font-size:21px">' . $subtitle . '</p><!-- /wp:paragraph -->'
    : '';

$hero_markup = <<<HTML
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"navy-blue-cfasa","isUserOverlayColor":true,"focalPoint":{"x":0.71,"y":0.5},"minHeight":253,"minHeightUnit":"px","style":{"color":{"duotone":"unset"}},"layout":{"type":"default"}} -->
<div class="hero-banner wp-block-cover" style="min-height:253px"><span aria-hidden="true" class="wp-block-cover__background has-navy-blue-cfasa-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Inner Container"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"@mobile":{"spacing":{"blockGap":"var:preset|spacing|80"}}},"textColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:group {"metadata":{"name":"Breadcrumbs and Home Link"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minWidth":"100%","minHeight":"0px"},"@tablet":{"layout":{"flexWrap":"wrap"}}},"layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"center","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:0px;min-width:100%"><!-- wp:breadcrumbs {"separator":"\u003e","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px","lineHeight":"1"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Inner Container"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"},"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":"300px","minWidth":"0px"},"@tablet":{"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":"207px"}},"@mobile":{"dimensions":{"minHeight":"86px"},"spacing":{"blockGap":"var:preset|spacing|0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="min-height:300px;min-width:0px;margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"lineHeight":1.6,"textTransform":"uppercase","fontStyle":"normal","fontWeight":"900"},"@mobile":{"typography":{"fontSize":"var:preset|font-size|display-mobile","lineHeight":"1.2"}}},"textColor":"white","fontSize":"display"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"metadata":{"name":"Hero subtitle"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"21px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
HTML;

echo do_blocks( $hero_markup );