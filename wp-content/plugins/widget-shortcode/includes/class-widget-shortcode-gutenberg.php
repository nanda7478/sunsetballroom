<?php
/**
 * Gutenberg compatibility for Widget Shortcode plugin
 *
 * @package Widget Shortcode
 * @since 0.3.4
 */
class Widget_Shortcode_Gutenberg {

	private static $instance = null;

	/**
	 * Creates or returns an instance of this class.
	 *
	 * @return	A single instance of this class.
	 */
	public static function get_instance() {
		return null == self::$instance ? self::$instance = new self : self::$instance;
	}

	private function __construct() {
		if ( ! function_exists( 'register_block_type' ) ) {
			// Gutenberg is not active.
			return;
		}

		add_action( 'init', array( $this, 'register_block' ) );
	}

	function register_block() {
		wp_register_script(
			'widget-shortcode-gutenberg',
			WIDGET_SHORTCODE_URL . 'assets/block.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components' ),
			filemtime( WIDGET_SHORTCODE_DIR . 'assets/block.js' ),
			true
		);

		$widgets = Widget_Shortcode::get_instance()->get_widgets_list();
		array_unshift( $widgets, array( 'value' => '', 'label' => '' ) );
		wp_localize_script( 'widget-shortcode-gutenberg', 'widgetShortcodeGutenberg', array(
			'widgets' => $widgets,
		) );

		register_block_type( 'widget-shortcode/block', array(
			'editor_script' => 'widget-shortcode-gutenberg',
			'render_callback' => array( $this, 'render_callback' ),
			'attributes' => array(
				'id' => array(
					'default' => '',
					'type' => 'string',
				),
			),
		) );
	}

	/**
	 * Render the widget preview in Gutenberg window
	 *
	 * @return string
	 */
	function render_callback( $atts, $content ) {
		if ( ! isset( $atts['id'] ) || empty( $atts['id'] ) ) {
			return '<p>' . __( 'Select the widget you want to show.', 'widget-shortcode' ) . '</p>';
		}

		return Widget_Shortcode::get_instance()->do_widget( array(
			'echo' => false,
			'id' => $atts['id'],
		) );
	}
}