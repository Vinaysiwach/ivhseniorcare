<?php

/**
 * Plugin Name: GrandWP Gallery
 * Plugin URI: https://grandwp.com/wordpress-photo-gallery
 * Description: GrandWP Gallery is equipped with all necessary options to make the image publishing process easier and more convenient.
 * Version:     1.0.8
 * Author:      GrandWP
 * Author URI:  https://grandwp.com
 * License: GNU/GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /languages
 * Text Domain: gdgallery
 */

if (!defined('ABSPATH')) {
    exit();
}

if (get_option("gdgallery_removetablesuninstall") == "on") {
    register_uninstall_hook(__FILE__, array('GDGallery\Database\Uninstall', 'run'));
}

require 'autoload.php';

require 'GDGallery.php';


/**
 * Main instance of GDGallery.
 *
 * Returns the main instance of GDGallery to prevent the need to use globals.
 *
 * @return \GDGallery\GDGallery
 */

function GDGallery()
{
    return \GDGallery\GDGallery::instance();
}

$GLOBALS['GDGallery'] = GDGallery();




