<?php
/**
 * @Package madplugin
 */

namespace Inc\Base;

class Enqueue {

   // Step-8.1.3
   public function register(){
    add_action('admin_enqueue_scripts',array($this,'enqueue')); //...8.1.3.1
   }

   // Step-8.1.3.1
   function enqueue(){
    wp_enqueue_style('madpluginstyle', PLUGIN_URL.'/assets/mystyle.css');
    wp_enqueue_script('madpluginscript', PLUGIN_URL.'/assets/myscript.js');
   }
}
