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



// https://rankmath.com/kb/filters-hooks-api-developer/

function add_power_words( $words ) {
    try {

        $nouns      = include( PLUGIN_DIR . 'includes/lists/list-nouns.php' );
        $verbs      = include( PLUGIN_DIR . 'includes/lists/list-verbs.php' );
        $adjectives = include( PLUGIN_DIR . 'includes/lists/list-adjectives.php' );

        return array_merge( $words, $nouns, $adjectives );

    } catch( Exception ) {
        return $words;
    }
}

add_filter( 'rank_math/metabox/power_words',  __NAMESPACE__ . '\add_power_words' );
