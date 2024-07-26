<?php
/**
 * Functions.php
 * This file is used to add custom functions to the theme.
 * Add your custom functions below the Theme Init class.
 *
 * @package KingdomOne
 */

/**
 * Enqueue the parent stylesheet
 */
add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );

/**
 * Load the Theme Init class
 */
require_once get_stylesheet_directory() . '/includes/class-theme-init.php';
new KingdomOne\Theme_Init();


// ===========================================================================
// Custom Functions
// ===========================================================================
