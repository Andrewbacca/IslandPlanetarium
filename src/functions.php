<?php
/**
 * Functions and definitions
 */

// Get theme template directory
$template_directory = get_template_directory();

// Theme setup
require $template_directory . '/inc/setup.php';

// Assets
require $template_directory . '/inc/assets.php';

// Blocks
require $template_directory . '/inc/blocks.php';

// Additional Classes
require_once $template_directory . '/inc/classes/navwalker.php';

// Custom Shortcodes
require_once $template_directory . '/inc/shortcodes.php';
