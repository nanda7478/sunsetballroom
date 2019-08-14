<?php
/*
Plugin Name:    Widget Shortcode
Description:    Output widgets using a simple shortcode.
Author:         Hassan Derakhshandeh
Version:        0.3.4
Text Domain:    widget-shortcode
Domain Path:    /languages

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined( 'ABSPATH' ) || die;

define( 'WIDGET_SHORTCODE_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'WIDGET_SHORTCODE_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

include WIDGET_SHORTCODE_DIR . 'includes/class-widget-shortcode.php';
include WIDGET_SHORTCODE_DIR . 'includes/class-widget-shortcode-tinymce.php';
include WIDGET_SHORTCODE_DIR . 'includes/class-widget-shortcode-gutenberg.php';

Widget_Shortcode::get_instance();
Widget_Shortcode_TinyMCE::get_instance();
Widget_Shortcode_Gutenberg::get_instance();