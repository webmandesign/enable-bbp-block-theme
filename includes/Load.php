<?php
/**
 * Loader class.
 *
 * @package    bbPress for Block Themes
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\bbPress\FSE;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Load {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::setup', 0 );

	} // /init

	/**
	 * Setup.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function setup() {

		// Requirements check

			if (
				! class_exists( 'bbPress' )
				|| ! wp_is_block_theme()
			) {
				return;
			}


		// Processing

			Compatibility::init();
			Editor::init();
			Options::init();

	} // /setup

}
