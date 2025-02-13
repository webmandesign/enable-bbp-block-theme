<?php
/**
 * Editor class.
 *
 * @package    bbPress for Block Themes
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\bbPress\FSE;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Editor {

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

				add_action( 'init', __CLASS__ . '::register_block_content' );

			// Filters

				if ( get_option( Options::$slug['option']['block_editor'] ) ) {

					add_filter( 'bbp_register_reply_post_type', __CLASS__ . '::show_in_rest' );
					add_filter( 'bbp_register_topic_post_type', __CLASS__ . '::show_in_rest' );
					add_filter( 'bbp_register_forum_post_type', __CLASS__ . '::show_in_rest' );

					// These have to be before `wptexturize` is applied
					// judging by WordPress' filters applied on `the_content`.
					add_filter( 'bbp_get_reply_content', 'do_blocks', 5 );
					add_filter( 'bbp_get_topic_content', 'do_blocks', 5 );
					add_filter( 'bbp_get_forum_content', 'do_blocks', 5 );
				}

	} // /init

	/**
	 * Enable bbPress post types for block/site editor.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $args
	 *
	 * @return  array
	 */
	public static function show_in_rest( array $args ): array {

		// Processing

			$args['show_in_rest'] = true;


		// Output

			return $args;

	} // /show_in_rest

	/**
	 * Register global bbPress block views.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register_block_content() {

		// Processing

			// Block pattern is used as starter content suggestion for templates.
			register_block_pattern(
				'bbp-block-theme/bbpress',
				array(
					'title'         => esc_html__( 'bbPress content', 'bbp-block-theme' ),
					'inserter'      => false,
					'content'       => self::get_template_content(),
					'templateTypes' => array(
						'index',
						'archive',
						'single',
					),
				)
			);

			// Template for displaying all bbPress content.
			// This is essentially `bbpress` template template from `bbp_get_theme_compat_templates()`.
			register_block_template(
				'bbp-block-theme//bbpress',
				array(
					'title'       => esc_html__( 'bbPress content', 'bbp-block-theme' ),
					'description' => esc_html__( 'Global template for bbPress views.', 'bbp-block-theme' ),
					'content'     => '<!-- wp:pattern {"slug":"bbp-block-theme/bbpress"} /-->',
				)
			);

	} // /register_block_content

	/**
	 * Get a theme HTML template content.
	 *
	 * @since  1.0.0
	 *
	 * @return  string
	 */
	public static function get_template_content(): string {

		// Variables

			// We need to provide fallback content, at least.
			$content = '<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->';

			/**
			 * Template hierarchy from bbPress code.
			 *
			 * @see  bbPress/bbp_get_theme_compat_templates()
			 */
			$templates = array(
				'forums',
				'forum',
				'generic',
				'page',
				'single',
				'singular',
				'index',
			);


		// Processing

			// Get starter content from theme template.
			foreach ( $templates as $template ) {

				$file = get_theme_file_path( 'templates/' . $template . '.html' );

				if ( file_exists( $file ) ) {

					ob_start();
					include $file;

					$content = ob_get_clean();

					break;
				}
			}


		// Output

			return $content;

	} // /get_template_content

}
