<?php
/**
 * @Package madplugin
 */

 namespace Inc\Base;

 class SettingsLinks{

    public $plugin;
    
    function __construct(){
        $this->plugin = PLUGIN_NAME;
    }

    // Step-8.1.3
     public function register(){
        add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));//...8.1.3.1
     }

     // Step-8.1.3.1
     public function settings_link($links){
         $settings_links = '<a href="admin.php?page=madplugin_admin">Settings</a>';
         array_push($links,$settings_links);
         return $links;
     }
 }