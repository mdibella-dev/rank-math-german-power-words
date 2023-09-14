<?php
/**
 * Functions to activate, initiate and deactivate the plugin.
 *
 * @author  Marco Di Bella
 * @package rank-math-german-power-words
 */

namespace rank_math_german_power_words;



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
 * Helper function: Deactivates this plugin.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 *
 * @used-by plugin_deactivation()
 *          plugin_check_for_activated_rank_math()
 */

function plugin_deactivation_callback() {
    deactivate_plugins( "rank-math-german-power-words/plugin.php" );
}



/**
 * Deactivates the plugin automatically when Rank Math is deactivated.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 */

function plugin_deactivation() {
    add_action( 'update_option_active_plugins', __NAMESPACE__ . '\plugin_deactivation_callback' );
}

register_deactivation_hook( RANK_MATH_PLUGIN, __NAMESPACE__ . '\plugin_deactivation' );



/**
 * Does not activate the plugin if RM is also not activated.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/a/95183
 */

function plugin_check_for_activated_rank_math() {

    $active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

    if ( in_array( RANK_MATH_PLUGIN, $active_plugins ) ) {
        // all fine, return
        return;
    }

    // Suppress "Plugin activated" notice
    unset( $_GET['activate'] );

    printf(
        '<div class="error"><p>Rank Math missing</p><p>This has been deactivated.</p></div>',
    );

    // Deactivate this plugin
    plugin_deactivation_callback();
}

if ( ! empty ( $GLOBALS['pagenow'] ) and 'plugins.php' === $GLOBALS['pagenow'] ) {
    add_action( 'admin_notices', __NAMESPACE__ . '\plugin_check_for_activated_rank_math', 0 );
}
