<?php
/**
 * Shortcode generator for Widget Shortcode plugin
 *
 * @package Widget Shortcode
 * @since 0.3.4
 */
class Widget_Shortcode_TinyMCE {

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
		add_filter( 'mce_external_plugins', array( $this, 'mce_external_plugins' ) );
		add_filter( 'mce_buttons', array( $this, 'mce_buttons' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'editor_parameters' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'editor_parameters' ) );
	}

	function mce_external_plugins( $plugins ) {
		$plugins['widgetShortcode'] = WIDGET_SHORTCODE_URL . 'assets/tinymce.js';

		return $plugins;
	}

	function mce_buttons( $mce_buttons ) {
		array_push( $mce_buttons, 'separator', 'widgetShortcode' );
		return $mce_buttons;
	}

	function editor_parameters() {
		wp_localize_script( 'editor', 'widgetShortcodeTinyMCE', array(
			'title' => __( 'Widget Shortcode', 'widget-shortcode' ),
			'widgets' => Widget_Shortcode::get_instance()->get_widgets_list(),
			'image' => WIDGET_SHORTCODE_URL . 'assets/widget-icon.png',
		) );
	}
}