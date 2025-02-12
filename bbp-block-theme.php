<?php
/**
 * Plugin Name:  bbPress for Block Themes
 * Plugin URI:   https://www.webmandesign.eu/portfolio/bbp-block-theme-wordpress-plugin/
 * Description:  Enables bbPress for a full site editing WordPress block theme.
 * Version:      1.0.0
 * Author:       WebMan Design, Oliver Juhas
 * Author URI:   https://www.webmandesign.eu/
 * License:      GPL-3.0-or-later
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:  bbp-block-theme
 * Domain Path:  /languages
 *
 * Requires PHP:       7.0
 * Requires at least:  6.7
 *
 * GitHub Plugin URI:  https://github.com/webmandesign/bbp-block-theme
 *
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link  https://github.com/webmandesign/bbp-block-theme
 * @link  https://www.webmandesign.eu
 *
 * @package  bbPress for Block Themes
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Constants.
define( 'BFBT_FILE', __FILE__ );
define( 'BFBT_PATH', plugin_dir_path( BFBT_FILE ) ); // Trailing slashed.

// Load the functionality.
require_once BFBT_PATH . 'includes/Autoload.php';
WebManDesign\bbPress\FSE\Load::init();
