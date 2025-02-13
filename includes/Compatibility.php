<?php
/**
 * Block theme compatibility class.
 *
 * @package    bbPress for Block Themes
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\bbPress\FSE;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Compatibility {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Filters

				/**
				 * Tell bbPress what theme template file to use.
				 *
				 * @see  bbPress/bbp_get_theme_compat_templates()
				 * @see  bbPress/bbp_get_query_template()
				 */
				$key = 'bbpress';
				add_filter( "bbp_{$key}_template", __CLASS__ . '::template', 10, 2 );

				/**
				 * Add helper post attribute to identify bbPress content.
				 *
				 * @see  bbPress/bbp_parse_args()
				 * @see  bbPress/bbp_theme_compat_reset_post()
				 */
				$key = 'theme_compat_reset_post';
				add_filter( "bbp_before_{$key}_parse_args", __CLASS__ . '::post_args' );

	} // /init

	/**
	 * Set theme template to display bbPress content.
	 *
	 * @see  bbPress/bbp_get_theme_compat_templates()
	 * @see  bbPress/bbp_get_query_template()
	 *
	 * @since  1.0.0
	 *
	 * @param  string $template
	 * @param  array  $templates
	 *
	 * @return  string
	 */
	public static function template( string $template, array $templates ): string {

		// Processing

			if ( is_bbpress() ) {

				// Fix bbPress content display when needed → see `post_content()` below for more info.
				add_filter( 'the_content', __CLASS__ . '::post_content', 0 );
			}

			if ( is_singular() ) {
				array_unshift( $templates, 'single-' . get_post_type() . '.php' );
			} elseif ( is_archive() ) {
				array_unshift( $templates, 'archive-' . get_post_type() . '.php' );
			}


		// Output

			return locate_block_template( $template, 'bbpress', $templates );

	} // /template

	/**
	 * Add helper post attribute to identify bbPress content.
	 *
	 * @see  bbPress/bbp_parse_args()
	 * @see  bbPress/bbp_theme_compat_reset_post()
	 *
	 * @since  1.0.0
	 *
	 * @param  array $args
	 *
	 * @return  array
	 */
	public static function post_args( array $args ): array {

		// Processing

			$args['is_bbpress_content'] = true;


		// Output

			return $args;

	} // /post_args

	/**
	 * Modify post content for `core/post-content` block.
	 *
	 * Fixes display of bbPress:
	 * - archives,
	 * - search results,
	 * - user account page sections.
	 *
	 * More info about the issue:
	 * The `get_the_content()` in `render_block_core_post_content()`
	 * provides incorrect post content string for some bbPress views.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $content
	 *
	 * @return  string
	 */
	public static function post_content( string $content ): string {

		// Processing

			/**
			 * Conditions are taken from bbPress code.
			 *
			 * @see  bbPress/bbp_template_include_theme_compat()
			 */
			if (

				// Archives & search results.
				// No need to use bbPress conditional functions,
				// we can simply use WordPress' native `is_archive()`.
				is_archive()

				// User account screen.
				|| bbp_is_single_user()
				|| bbp_is_single_user_edit()
			) {

				$_post = get_post();

				if ( ! empty( $_post->is_bbpress_content ) ) {

					/**
					 * Post Content block uses string replace.
					 *
					 * @see  render_block_core_post_content()
					 */
					$content = str_replace( ']]>', ']]&gt;', $_post->post_content );
				}
			}


		// Output

			return $content;

	} // /post_content

}
