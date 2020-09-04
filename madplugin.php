<?php
/**
 * @package madplugin
 */

 /*
 Plugin name: Madplugin
 Plugin URI: http://nestearly.com/madplugin
 Description: This is my first attemp of build wordpress plugin
 Version: 1.0
 Author: Maddy
 Author URI: http://lusttolearn.blogspot.com
 License: GPLv2 or later
 Text Domain: Mad Plugin
 */
/*
This is the test plugin for wordpress
Copyright 2020  Narayanan Madaswamy

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


// ENTRY POINT OF THIS PLUGIN
// If you find ... followed by Step-n that means it has sub level of user codes
// Peek in if you find ... followed by a call, it means the call has some user defined codes.


// Step-1
// If this file called outside the wordpress, abort it
if(! defined ('ABSPATH')){
    die;
}

// Step-2
// Require once the composer autoload
if(file_exists( dirname(__FILE__).'/vendor/autoload.php' )){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

// Step-3
// Use required classes
use Inc\Base\Activate;
use Inc\Base\Deactivate;

// Step-4
// Define constants
define( 'PLUGIN_PATH' , plugin_dir_path(__FILE__) );
define( 'PLUGIN_URL' , plugin_dir_url(__FILE__));
define( 'PLUGIN_NAME' , plugin_basename(__FILE__));

// Step-5...
// Code runs during plugin activation
function activate_madplugin(){
    Activate::activate(); //...
}

// Step-6...
// Code runs during plugin deactivation
function deactivate_madplugin(){
    Deactivate::deactivate(); //...
}

// Step-7
// Register activation and deactivation hooks with above functions
register_activation_hook(__FILE__,'activate_madplugin');
register_deactivation_hook(__FILE__,'deactivate_madplugin');

// Step-8
// Register all plugin services if the class Init exists
if( class_exists('Inc\\Init')){
    Inc\Init::register_services(); //...
}



