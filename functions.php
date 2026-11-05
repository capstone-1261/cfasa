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