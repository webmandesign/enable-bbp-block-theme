<?php
/**
 * Custom PSR-4 autoloader.
 *
 * @link  https://www.php-fig.org/psr/psr-4/
 *
 * @package    Enable bbPress for Block Themes
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class WMD_EBBT_Autoload {

	/**
	 * Directory to load PHP classes from.
	 *
	 * @var string
	 */
	private static $directory = 'includes';

	/**
	 * Array of white-listed, allowed files for improved security.
	 *
	 * @var array
	 */
	private static $allowed_files = array(
		'/Compatibility.php',
		'/Editor.php',
		'/Load.php',
		'/Options.php',
	);

	/**
	 * Register custom autoload.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $class_name  Class name to load.
	 *
	 * @return  bool  True if the class was loaded, false otherwise.
	 */
	public static function register( $class_name ) {

		// Requirements check

			if ( 0 !== strpos( $class_name, WMD_EBBT_NAMESPACE . '\\' ) ) {
				return false;
			}


		// Variables

			$path  = '';
			$parts = explode( '\\', substr( $class_name, strlen( WMD_EBBT_NAMESPACE . '\\' ) ) );


		// Processing

			foreach ( $parts as $part ) {
				$path .= '/' . $part;
			}
			$path .= '.php';

			if ( ! in_array( $path, self::$allowed_files ) ) {
				return false;
			}

			$path = WMD_EBBT_PATH . self::$directory . $path;

			if ( ! file_exists( $path ) ) {
				return false;
			}

			require_once $path;


		// Output

			return true;

	} // /register

}

spl_autoload_register( 'WMD_EBBT_Autoload::register' );
