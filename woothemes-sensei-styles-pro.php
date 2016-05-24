<?php
/*
Plugin Name: Sensei Styles Pro
Plugin URI: http://www.woothemes.com/products/sensei/
Description: A plugin that upgrades the default Sensei styles.
Version: 1.0
Author: WooThemes
Author URI: http://www.woothemes.com/
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
Requires at least: 4.1
Tested up to: 4.5
Text Domain: woothemes-sensei-styles-pro
Domain path: /lang/
*/
/*  Copyright 2013  WooThemes  (email : info@woothemes.com)

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

    /**
     * Returns the global Sensei Styles Instance.
     */
    function Sensei_Styles(){
        return Sensei_Styles_Main::instance();
    }
