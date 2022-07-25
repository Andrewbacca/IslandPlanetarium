<?php
/**
 * Theme setup
 */

if(!function_exists('wightfibrebusiness_setup')) {
  function wightfibrebusiness_setup() {
    // Add menu support
    add_theme_support('menus');

    // Register menu locations
    register_nav_menus(
      array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
      )
    );
  }
}
add_action('after_setup_theme', 'wightfibrebusiness_setup');