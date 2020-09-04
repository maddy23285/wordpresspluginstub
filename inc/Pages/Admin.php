<?php
/**
 * @Package madplugin
 */

 namespace Inc\Pages;

 class Admin {

    function __construct(){
        
    }

    public function register(){
      add_action('admin_menu',array($this,'add_admin_pages'));
    }
     function add_admin_pages(){
        add_menu_page('Mad Plugin','Mad Admin','manage_options','madplugin_admin',array($this,'admin_index'),'dashicons-store',null);
    }

    function admin_index(){
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
 }
 