<?php

function centre_autism_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    // Register navigation menu locations
    register_nav_menus(array(
        'main-nav' => 'Main Navigation',
        'about-nav' => 'About Us Navigation',
        'involved-nav' => 'Get Involved Navigation'
    ));
}

add_action('after_setup_theme', 'centre_autism_theme_setup');


function centre_autism_theme_styles() {

    wp_enqueue_style(
        'centre-autism-style',
        get_stylesheet_uri()
    );
}
function centre_autism_acf_json_save_point($path) {
    return get_stylesheet_directory() . '/acf-json';
}

add_filter('acf/settings/save_json', 'centre_autism_acf_json_save_point');


function centre_autism_acf_json_load_point($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;
}

add_filter('acf/settings/load_json', 'centre_autism_acf_json_load_point');

add_action('wp_enqueue_scripts', 'centre_autism_theme_styles');

function cfasa_enable_page_features() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'cfasa_enable_page_features' );




/*  Programs & Services CSS  */

function cfasa_programs_services_styles() {

    if ( is_page( array(
        'programs-services',
        'early-childhood-services',
        'professional-services',
        'diagnostic-services',
        'community-social-recreation-programs',
        'independent-living-skills-employment',
        'inclusive-post-secondary-education-services',
        'summer-programming',
        'rent-our-kitchen-space'
    ) ) ) {

        wp_enqueue_style(
            'cfasa-programs-services',
            get_theme_file_uri('/css/program-services.css'),
            array('centre-autism-style'),
            '1.0.0'
        );

    }
}

add_action('wp_enqueue_scripts', 'cfasa_programs_services_styles');


/* End of Programs & Services CSS  */

/* Get Involved CSS */

function cfasa_get_involved_styles() {

    if ( is_page(array(
        'volunteer',
        'get-involved',
        'fundraisers',
        'sponsorships',
        'donate',
        'careers',
        'council'
    ) ) ) {

        wp_enqueue_style(
            'cfasa-get-involved',
            get_theme_file_uri('/css/get-involved.css'),
            array('centre-autism-style'),
            '1.0.0'
        );

    }
}

add_action('wp_enqueue_scripts', 'cfasa_get_involved_styles');

/* End of Get Involved CSS */