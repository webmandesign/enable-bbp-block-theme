<?php
/**
 * Options class.
 *
 * @package    bbPress for Block Themes
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\bbPress\FSE;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Options {

	/**
	 * Slugs.
	 *
	 * @var array
	 */
	public static $slug = array(

		// Options section.
		'_section' => 'bbp_fse',

		// Options.
		'block_editor' => 'bbp_fse_block_editor',
	);

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

				add_action( 'admin_init', __CLASS__ . '::settings', 100 );

	} // /init

	/**
	 * Register forum admin option section.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function settings() {

		// Variables

			$group   = $page = 'bbpress';
			$section = self::$slug['_section'];


		// Processing

			add_settings_section(
				$section,
				esc_html__( 'Block Theme Compatibility', 'bbp-block-theme' ),
				'__return_empty_string',
				$page
			);

				add_settings_field(
					self::$slug['block_editor'],
					esc_html__( 'Enable Block Editor', 'bbp-block-theme' ),
					__CLASS__ . '::field_checkbox',
					$page,
					$section,
					array(
						'label_for'   => self::$slug['block_editor'],
						'description' =>
							esc_html__( 'Allows creating templates for bbPress post types in Site Editor.', 'bbp-block-theme' )
							. ' '
							. esc_html__( 'Allows using blocks in bbPress post type content.', 'bbp-block-theme' )
							. '<br><br>'
							. '<strong>'
							. esc_html_x( 'Tip:', 'advice', 'bbp-block-theme' )
							. '</strong>'
							. ' '
							. esc_html__( 'You can enable block editor just temporarily.', 'bbp-block-theme' )
							. ' '
							. esc_html__( 'While it is enabled, create desired templates in Site Editor.', 'bbp-block-theme' )
							. ' '
							. esc_html__( 'Then disable this option to use classic editor for bbPress post type content, while keeping Site Editor templates still functioning.', 'bbp-block-theme' ),
						'default'     => false,
					)
				);

				register_setting(
					$group,
					self::$slug['block_editor'],
					array(
						'type'              => 'boolean',
						'sanitize_callback' => 'boolval',
						'default'           => false,
					)
				);

	} // /settings

	/**
	 * Checkbox option field.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $args
	 *
	 * @return  void
	 */
	public static function field_checkbox( array $args ) {

		// Requirements check

			if ( ! isset( $args['label_for'] ) ) {
				return;
			}


		// Variables

			$default = isset( $args['default'] ) ? ( $args['default'] ) : ( false );
			$value   = bbp_get_form_option( $args['label_for'], $default );


		// Output

			?>

			<label style="display:block;padding-top:.5em;">

				<input
					type="checkbox"
					name="<?php echo esc_attr( $args['label_for'] ); ?>"
					id="<?php echo esc_attr( $args['label_for'] ); ?>"
					<?php checked( $value ); ?>
					>

				<?php

				if ( isset( $args['description'] ) ) {

					$description = explode( '<br><br>', $args['description'] );

					foreach ( $description as $key => $desc ) {
						if ( 0 === $key ) {
							echo '<em style="vertical-align:middle;"> ' . $desc . '</em>';
						} else {
							echo '<p style="max-width:32em;margin-top:1em;"> ' . $desc . '</p>';
						}
					}
				}

				?>

			</label>

			<?php

	} // /field_checkbox

}
