<?php
/*
Plugin Name: Sensei Styles Pro
Plugin URI: http://www.woocommerce.com/products/sensei/
Description: A plugin that upgrades the default Sensei styles.
Version: 1.0
Author: WooThemes
Author URI: http://www.woocommerce.com/
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Requires at least: 4.1
Tested up to: 4.5
Text Domain: woothemes-sensei-styles-pro
Domain path: /lang/
*/
/*  Copyright 2016  WooThemes  (email : info@woothemes.com)

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

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    $sensei_styles_dir = trailingslashit( plugins_url( '', __FILE__ ) );

    require_once( 'includes/hooks/template.php' );

    // Check if Sensei is active
if ( ! in_array( 'sensei-lms/sensei-lms.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  ||
     ! in_array( 'woothemes-sensei/woothemes-sensei.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )) {
    add_action( 'admin_notices', 'nosensei_admin_notice' );
    
} else {

    /**
     * Returns the global Sensei Styles Instance.
     */
    function Sensei_Styles(){
        return Sensei_Styles_Main::instance();
    }
}

// Show notice until Sensei is activated
function nosensei_admin_notice() {
    echo '<div class="error"><p>' . sprintf( __( 'Sensei Styles Pro requires the %s to be installed and active.', 'woothemes-sensei-styles-pro' ), '<a href="https://woocommerce.com/products/sensei/" target="_blank">Sensei plugin</a>' ) . '</p></div>';
}
