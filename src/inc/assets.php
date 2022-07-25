<?php
/**
 * Enqueue scripts and styles for the theme
 */

if (!function_exists('wightfibrebusiness_scripts')) {
    function wightfibrebusiness_scripts() {
        global $post;
        wp_enqueue_script('wightfibrebusiness-scripts', get_template_directory_uri().'/js/main.js', 'jquery', null, true);
        wp_enqueue_script('trustpilot', 'https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js', array(), false, false);

        $wnm_custom = array('stylesheet_directory_uri' => get_stylesheet_directory_uri());
        wp_localize_script('wightfibrebusiness-scripts', 'directory_uri', $wnm_custom);
    }
}

if (!function_exists('wightfibrebusiness_styles')) {
    function wightfibrebusiness_styles() {
        // Remove unwanted styles
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-block-style');

        wp_enqueue_style('wightfibrebusiness-styles', get_template_directory_uri().'/css/main.css');
    }
}

add_action('wp_enqueue_scripts', 'wightfibrebusiness_scripts');
add_action('wp_enqueue_scripts', 'wightfibrebusiness_styles');
