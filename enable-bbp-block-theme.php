<?php
/**
 * Plugin Name:  Enable bbPress for Block Themes
 * Plugin URI:   https://www.webmandesign.eu/portfolio/enable-bbp-block-theme-wordpress-plugin/
 * Description:  Enables bbPress for a full site editing WordPress block theme.
 * Version:      1.1.0
 * Author:       WebMan Design, Oliver Juhas
 * Author URI:   https://www.webmandesign.eu/
 * License:      GPL-3.0-or-later
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:  enable-bbp-block-theme
 * Domain Path:  /languages
 *
 * Requires PHP:       8.0
 * Requires at least:  7.0
 *
 * GitHub Plugin URI:  https://github.com/webmandesign/enable-bbp-block-theme
 *
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link  https://github.com/webmandesign/enable-bbp-block-theme
 * @link  https://www.webmandesign.eu
 *
 * @package  Enable bbPress for Block Themes
 */

namespace WebManDesign\bbPress\Block_Theme;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Constants.

	const WMD_EBBT_NAMESPACE = __NAMESPACE__;
	const WMD_EBBT_FILE      = __FILE__;
	const WMD_EBBT_PATH      = trailingslashit( plugin_dir_path( WMD_EBBT_FILE ) );

// Load the functionality.

	require_once WMD_EBBT_PATH . 'includes/Autoload.php';

	Load::init();
