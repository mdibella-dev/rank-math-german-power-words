<?php
/**
 * Plugin Name:         Rank Math &mdash; German Power Words
 * Plugin URI:          https://github.com/mdibella-dev/rank-math-german-power-words
 * Description:         This plugin adds german power words to the SEO tool Rank Math.
 * Author:              Marco Di Bella
 * Author URI:          https://www.marcodibella.de
 * License:             MIT License
 * Requires at least:   6
 * Tested up to:        6.2.2
 * Requires PHP:        7
 * Version:             1.0.0
 * Text Domain:         rank-math-gpw
 * Domain Path:         /languages
 *
 * @author  Marco Di Bella
 * @package rank-math-german-power-words
 */

namespace rank_math_german_power_words;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Variables and definitions */

define( __NAMESPACE__ . '\PLUGIN_VERSION', '1.0.0' );
define( __NAMESPACE__ . '\PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( __NAMESPACE__ . '\PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( __NAMESPACE__ . '\PLUGIN_FILE', __FILE__ );
define( __NAMESPACE__ . '\RANK_MATH_PLUGIN', 'seo-by-rank-math/rank-math.php' );



/** Include files */

require_once PLUGIN_DIR . 'includes/setup.php';
require_once PLUGIN_DIR . 'includes/additional-power-words.php';
