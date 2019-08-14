<?php
 /*
 Plugin Name: Change wp-admin login
 Plugin URI: https://wordpress.org/plugins/change-wp-admin-login/
 Description: Change wp-admin login to whatever you want. example: http://www.example.com/my-login. Go under Settings and then click on "Permalinks" and change your URL under "Change wp-admin login".
 Version: 1.0.0
 Author: Nuno Morais Sarmento
 Author URI: https://www.nuno-sarmento.com
 Text Domain: change-wp-admin-login
 Domain Path: /languages
 License: GPL2

 Copyright 2019  Nuno Morais Sarmento  (email : nuno@nuno-sarmento.com)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License, version 2, as
 published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

 /* Do not access this file directly */

 defined('ABSPATH') or die('°_°’');


 /* ------------------------------------------
// Constants ---------------------------
--------------------------------------------- */

/* Set plugin version constant. */

if( ! defined( 'NS_Change_WP_Admin_Login_Version' ) ) {
	define( 'NS_Change_WP_Admin_Login_Version', '1.0.0' );
}

/* Set plugin name. */

if( ! defined( 'NS_Change_WP_Admin_Login_Name' ) ) {
	define( 'NS_Change_WP_Admin_Login_Name', 'Change wp-admin login' );
}

/* Set constant path to the plugin directory. */

if ( ! defined( 'NS_Change_WP_Admin_Login_Path' ) ) {
	define( 'NS_Change_WP_Admin_Login_Path', plugin_dir_path( __FILE__ ) );
}

/* Set the constant path to the plugin directory URI. */

if ( ! defined( 'NS_Change_WP_Admin_Login_Base_Uri' ) ) {
	define( 'NS_Change_WP_Admin_Login_Base_Uri', plugin_dir_url( __FILE__ ) );
}

/* ------------------------------------------
// i18n ----------------------------
--------------------------------------------- */
load_plugin_textdomain( 'change-wp-admin-login', false, basename( dirname( __FILE__ ) ) . '/languages' );

/* ------------------------------------------
// Includes ---------------------------
--------------------------------------------- */
if ( ! @include( 'class-change-wp-admin-login.php' ) ) {
	require_once( NS_Change_WP_Admin_Login_Path . 'includes/class-change-wp-admin-login.php' );
}
