<?php

if (!defined('ABSPATH')) { exit; }

function cfasa_ps_hardcoded_pages() {
    return array(
        'programs-services',
        'early-childhood-services',
        'professional-services',
        'diagnostic-services',
        'community-social-recreation-programs',
        'independent-living-skills-employment',
        'inclusive-post-secondary-education-services',
        'summer-programming',
        'rent-our-kitchen-space'
    );
}

function cfasa_ps_enqueue_styles() {
    if (!is_page(cfasa_ps_hardcoded_pages())) { return; }
    // Existing theme also enqueues css/program-services.css. Avoid style conflicts
    // only on our nine pages. Other parts of the theme stay as they are.
    wp_dequeue_style('cfasa-programs-services');
    $file = get_stylesheet_directory() . '/css/cfasa-program-services.css';
    wp_enqueue_style(
        'cfasa-program-services',
        get_stylesheet_directory_uri() . '/css/cfasa-program-services.css',
        array('centre-autism-style'),
        file_exists($file) ? filemtime($file) : '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'cfasa_ps_enqueue_styles', 20);

// header.php already outputs a default hero. Hide that block ONLY on these pages
// so the intentionally hardcoded hero is not duplicated.
function cfasa_ps_body_class($classes) {
    if (is_page(cfasa_ps_hardcoded_pages())) {
        $classes[] = 'cfasa-ps-page';
    }
    return $classes;
}
add_filter('body_class', 'cfasa_ps_body_class');
