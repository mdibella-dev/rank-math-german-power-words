<?php
/**
 * Functions to handle the backend.
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
 *
 * @see   https://rankmath.com/kb/filters-hooks-api-developer/
 *
 * @param array $power_words The list of power words originally provided by Rank Math
 *
 * @return array The modified (in case of error: unmodified) list of power words
 */

function add_power_words( $power_words ) {
    try {

        $nouns      = include( PLUGIN_DIR . 'includes/lists/list-nouns.php' );
        $verbs      = include( PLUGIN_DIR . 'includes/lists/list-verbs.php' );
        $adjectives = include( PLUGIN_DIR . 'includes/lists/list-adjectives.php' );

        return array_merge( $power_words, $nouns, $verbs, $adjectives );

    } catch( Exception ) {
        return $power_words;
    }
}

add_filter( 'rank_math/metabox/power_words',  __NAMESPACE__ . '\add_power_words' );
