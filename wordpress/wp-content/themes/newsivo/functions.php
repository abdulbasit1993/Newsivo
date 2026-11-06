<?php

/**
 * Newsivo Theme Setup
 */
function newsivo_theme_setup() {
    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable featured images for posts.
    add_theme_support('post-thumbnails');

    // Enable HTML5 markup.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Enable custom logo support.
    add_theme_support('custom-logo');

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'newsivo'),
        'footer' => __('Footer Menu', 'newsivo')
    ));
}
add_action('after_setup_theme', 'newsivo_theme_setup');

/**
 * Enqueue Theme Styles and Scripts
 */
function newsivo_enqueue_assets() {

    $css_path = get_theme_file_path('/assets/css/style.css');

    // Main stylesheet.
    wp_enqueue_style(
        'newsivo-main-style',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        file_exists($css_path) ? filemtime($css_path) : '1.0.0'
    );
    
    $js_path = get_theme_file_path('/assets/js/main.js');

    // Main JavaScript.
    wp_enqueue_script(
        'newsivo-main-script',
        get_theme_file_uri('/assets/js/main.js'),
        array(),
        file_exists($js_path) ? filemtime($js_path) : '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'newsivo_enqueue_assets');