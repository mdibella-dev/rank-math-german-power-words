<?php
/**
 * Functions to activate, initiate and deactivate the plugin.
 *
 * @author  Marco Di Bella
 * @package rank-math-german-power-words
 */

namespace rank_math_german_power_words;

use \Exception;



/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * The init function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_init() {
    // Load text domain, use relative path to the plugin's language folder
    load_plugin_textdomain( 'rank-math-gpw', false, plugin_basename( PLUGIN_DIR ) . '/languages' );
}

add_action( 'init', __NAMESPACE__ . '\plugin_init' );



/**
 * The activation function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_activation() {

    if( ! current_user_can( 'activate_plugins' ) ) {
        // Do something?
    }

    $active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

    try {
        x();
    } catch ( Exception $exception ) {
        add_action( 'update_option_active_plugins', __NAMESPACE__ . '\plugin_deactivation_callback' );
    }
}

register_activation_hook( PLUGIN_FILE, __NAMESPACE__ . '\plugin_activation' );

function x() {
    $active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

    if ( ! in_array( RANK_MATH_PLUGIN, $active_plugins ) ) {
        throw new Exception( 'RM is not active (throw)' );
    }
}

// https://wordpress.stackexchange.com/questions/25910/uninstall-activate-deactivate-a-plugin-typical-features-how-to/25979#25979


/**
 * Deactivates the plugin automatically when Rank Math is deactivated.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 */

function plugin_deactivation_callback() {
    deactivate_plugins( "rank-math-german-power-words/plugin.php" );
    // Add a notice?!
}

function plugin_deactivation() {
    add_action( 'update_option_active_plugins', __NAMESPACE__ . '\plugin_deactivation_callback' );
}

register_deactivation_hook( RANK_MATH_PLUGIN, __NAMESPACE__ . '\plugin_deactivation' );
