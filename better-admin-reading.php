<?php
/*
Plugin Name: Better Admin Reading
Version: 1.1
Description: This admin interface is adjusted for great nation of better reading abilities. It will make the Admin easier to read, especially when you have a lot of menu items by adding padding and subtle lines, etc. For WordPress 3.8 and above
Author: Wycks
License: GPL2
*/

/*

    Copyright (C) wordpress.org

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

   /*
    *
    * @class BAR_AdminInterface
    * @author Avenue Factory, Wycks
    * @version 1.1.0
    */

    new BAR_AdminInterface();

    class BAR_AdminInterface {

        public $assetsUrl = '';

        public function __construct() {

            $this->assetsUrl = plugins_url( 'css', __FILE__ );

            //Register our enqueue assets only to our admin pages
            add_action( 'admin_enqueue_scripts', array( $this, 'enqueueAssets' ) );
        }

        public function enqueueAssets() {
            wp_enqueue_style( 'bar-admin-interface', $this->assetsUrl . '/bar.css', array(), false, 'all' );
        }

    }