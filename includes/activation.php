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
 * Reacts to the deactivation of Rank Math plugin.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 */

function rank_math_activation() {
    add_action( 'update_option_active_plugins', __NAMESPACE__ . '\rank_math_activation_callback' );
}

register_deactivation_hook( RANK_MATH_PLUGIN, __NAMESPACE__ . '\rank_math_activation' );



/**
 * Reacts to the activation of Rank Math plugin.
 *
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 */

function rank_math_deactivation() {
    add_action( 'update_option_active_plugins', __NAMESPACE__ . '\rank_math_deactivation_callback' );
}

register_deactivation_hook( RANK_MATH_PLUGIN, __NAMESPACE__ . '\rank_math_deactivation' );



/**
 * In case of plugin Rank Math activation, the transient that previously signaled the plugin deactivation is removed.
 *
 * @since 1.0.0
 */

function rank_math_activation_callback() {
    delete_transient( 'RANK_MATH_IS_DEACTIVATING' );
}



/**
 * In case of plugin Rank Math deactivation, a transient, which serves as a signal, is set.
 *
 * @since 1.0.0
 */

function rank_math_deactivation_callback() {
    set_transient( 'RANK_MATH_IS_DEACTIVATING', true );
}



/**
 * Checks if Rank Math is enabled. If not, a notice is issued and the plugin is deactivated.
 *
 * @since 1.0.0
 *
 * @see https://wordpress.stackexchange.com/a/95183
 * @see https://wordpress.stackexchange.com/questions/27850/deactivate-plugin-upon-deactivation-of-another-plugin
 */

function plugin_check_for_activated_rank_math() {

    if( true == get_transient( 'RANK_MATH_IS_DEACTIVATING' ) ) {

        $notices = new \WPTRT\AdminNotices\Notices();
        $notices->add(
            'RANK_MATH_NOT_ACTIVE',
            false,
            sprintf(
                __( 'Rank Math SEO has been disabled. As a result, the %1$s plugin was also disabled.', 'rank-math-gpw' ),
                __( 'Rank Math - German Power Words', 'rank-math-gpw' )
            ),
            [
                'type' => 'error'
            ]
        );
        $notices->boot();

        delete_transient( 'RANK_MATH_IS_DEACTIVATING' );
        deactivate_plugins( 'rank-math-german-power-words/plugin.php' );
        return;
    }


    $active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

    if ( ! in_array( RANK_MATH_PLUGIN, $active_plugins ) ) {

        // Suppress "Plugin activated" notice
        unset( $_GET['activate'] );

        // Show our notice instead
        $notices = new \WPTRT\AdminNotices\Notices();
        $notices->add(
            'my_notice',
            false,
            sprintf(
                __( 'The %1$s plugin cannot be activated because the required Rank Math Seo plugin has not been activated.', 'rank-math-gpw' ),
                __( 'Rank Math - German Power Words', 'rank-math-gpw' )
            ),
            [
                'type' => 'error'
            ]
        );
        $notices->boot();

        deactivate_plugins( 'rank-math-german-power-words/plugin.php' );
    }
}

if ( ! empty ( $GLOBALS['pagenow'] ) and 'plugins.php' === $GLOBALS['pagenow'] ) {
    add_action( 'admin_notices', __NAMESPACE__ . '\plugin_check_for_activated_rank_math', 0 );
}
