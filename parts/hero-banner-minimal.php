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
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"navy-blue-cfasa","isUserOverlayColor":true,"focalPoint":{"x":0.15,"y":0.54},"minHeight":253,"minHeightUnit":"px","style":{"color":{"duotone":"unset"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="min-height:253px"><span aria-hidden="true" class="wp-block-cover__background has-navy-blue-cfasa-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Inner Container"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"@mobile":{"spacing":{"blockGap":"var:preset|spacing|80"}}},"textColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:group {"metadata":{"name":"Breadcrumbs and Home Link"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minWidth":"100%","minHeight":"0px"},"@tablet":{"layout":{"flexWrap":"wrap"}}},"layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"center","justifyContent":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:0px;min-width:100%"><!-- wp:breadcrumbs {"separator":"\u003e","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px","lineHeight":"1"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"metadata":{"name":"Back to Home Link","blockVisibility":{"viewport":{"mobile":false}}},"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"8px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><!-- wp:html -->
<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.14627 4.40074C4.05264 4.4811 4.00004 4.59002 4.00004 4.7036C4.00004 4.81717 4.05264 4.9261 4.14627 5.00645L9.14626 9.29217C9.24104 9.36787 9.36641 9.40908 9.49594 9.40712C9.62548 9.40517 9.74907 9.36019 9.84068 9.28167C9.93228 9.20314 9.98476 9.09721 9.98704 8.98618C9.98933 8.87515 9.94125 8.7677 9.85293 8.68645L5.20627 4.7036L9.85293 0.720738C9.94125 0.639495 9.98933 0.53204 9.98704 0.421011C9.98476 0.309982 9.93228 0.204047 9.84068 0.125526C9.74907 0.047004 9.62548 0.00202575 9.49594 6.67697e-05C9.36641 -0.00189221 9.24104 0.039321 9.14626 0.115024L4.14627 4.40074Z" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"></path> <path d="M0.146227 4.40074C0.0525932 4.4811 4.76837e-07 4.59002 4.76837e-07 4.7036C4.76837e-07 4.81717 0.0525932 4.9261 0.146227 5.00645L5.14622 9.29217C5.19199 9.33428 5.24719 9.36805 5.30853 9.39147C5.36986 9.4149 5.43607 9.42749 5.5032 9.4285C5.57034 9.42952 5.63703 9.41894 5.69928 9.39738C5.76154 9.37583 5.8181 9.34374 5.86558 9.30305C5.91306 9.26235 5.95049 9.21387 5.97563 9.16051C6.00078 9.10714 6.01313 9.04998 6.01195 8.99244C6.01076 8.9349 5.99607 8.87814 5.96874 8.82557C5.94141 8.773 5.90201 8.72569 5.85288 8.68645L1.20622 4.7036L5.85288 0.720738C5.9412 0.639495 5.98929 0.53204 5.987 0.421011C5.98472 0.309982 5.93224 0.204047 5.84063 0.125526C5.74902 0.047004 5.62543 0.00202575 5.4959 6.67697e-05C5.36637 -0.00189221 5.241 0.039321 5.14622 0.115024L0.146227 4.40074Z" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"></path> </svg>
<!-- /wp:html -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|0","left":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"padding":{"right":"var:preset|spacing|0","left":"var:preset|spacing|0","top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"var:preset|spacing|0","right":"var:preset|spacing|0","top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}},"dimensions":{"width":"var:preset|dimension|100"},"color":{"background":"#edf1f700"}},"fontSize":"button-label"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background has-button-label-font-size has-custom-font-size wp-element-button" href="/" style="background-color:#edf1f700;padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)">Back to Home</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Inner Container"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"},"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":"300px","minWidth":"0px"},"@tablet":{"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":"207px"}},"@mobile":{"dimensions":{"minHeight":"86px"},"spacing":{"blockGap":"var:preset|spacing|0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="min-height:300px;min-width:0px;margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"lineHeight":1.6,"textTransform":"uppercase","fontStyle":"normal","fontWeight":"900"},"@mobile":{"typography":{"fontSize":"var:preset|font-size|display-mobile","lineHeight":"1.2"}}},"textColor":"white","fontSize":"display"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"metadata":{"name":"Hero subtitle"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"21px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
HTML;

echo do_blocks( $hero_markup );