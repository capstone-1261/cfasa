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

// Register a dedicated "Hero Intro Text" box in the Page sidebar
function cfasa_add_hero_intro_metabox() {
    add_meta_box(
        'cfasa_hero_intro_box',          // Unique ID
        'Hero Intro Text',               // Box Title in Sidebar
        'cfasa_render_hero_intro_box',   // Callback function
        'page',                          // Post type ('page')
        'side',                          // Position ('side' places it in the right sidebar)
        'default'                        // Priority
    );
}
add_action( 'add_meta_boxes', 'cfasa_add_hero_intro_metabox' );

// Render the textarea inside the sidebar box
function cfasa_render_hero_intro_box( $post ) {
    wp_nonce_field( 'cfasa_save_hero_intro', 'cfasa_hero_intro_nonce' );
    $value = get_post_meta( $post->ID, 'intro_text', true );
    ?>
    <p style="margin-top: 4px; color: #646970; font-size: 12px;">
        Displays below the subtitle inside the page hero banner.
    </p>
    <textarea 
        name="cfasa_intro_text" 
        id="cfasa_intro_text" 
        rows="4" 
        style="width: 100%; margin-top: 4px;"
    ><?php echo esc_textarea( $value ); ?></textarea>
    <?php
}

// Save the field securely when the page is saved
function cfasa_save_hero_intro_box( $post_id ) {
    if ( ! isset( $_POST['cfasa_hero_intro_nonce'] ) || ! wp_verify_nonce( $_POST['cfasa_hero_intro_nonce'], 'cfasa_save_hero_intro' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['cfasa_intro_text'] ) ) {
        update_post_meta( $post_id, 'intro_text', sanitize_textarea_field( $_POST['cfasa_intro_text'] ) );
    }
}
add_action( 'save_post_page', 'cfasa_save_hero_intro_box' );

