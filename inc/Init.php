<?php

/**
 * @Package madplugin
 */

namespace Inc;

final class Init{

    /**
     * Store all the classes inside an array and return the array
     */
    // Step-8.1.1
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them
     * If the class has register method, call it
     */
    // Step-8.1...
    public static function register_services(){
        foreach (self::get_services() as $class) { //...8.1.1
            $service = self::instantiate($class); //...8.1.2
            if( method_exists($service,'register') ){
                $service->register(); //...8.1.3
            }
        }
    }

    /**
     * Parameter it accepts from the register_services method
     * Initialize the class
     * Return the class
     */
    //Step-8.1.2
    private static function instantiate($class){
        return new $class();
    }
}

/*use Inc\Base\Activate;
use Inc\Base\Deactivate;

if(!class_exists('MadPlugin'))
{
class MadPlugin{

public $plugin;

    function __construct(){
        add_action('init',array($this,'custom_post_type'));
        $this->plugin = plugin_basename(__FILE__);
    }

    function register(){
        
        
        add_filter("plugin_action_links_$this->plugin",array($this,'settings_link'));
    }

    function settings_link($links){
        $settings_link = '<a href="admin.php?page=madplugin_admin">Settings</a>';
        array_push($links,$settings_link);
        return $links;
    }

    function add_admin_pages(){
        add_menu_page('Mad Plugin','Mad Admin','manage_options','madplugin_admin',array($this,'admin_index'),'dashicons-store',null);
    }

    function admin_index(){
        require_once plugin_dir_path(__FILE__).'templates/admin.php';
    }

    function activate(){
        $this -> custom_post_type();
        Activate::activate();
    }

    function deactivate(){
        Deactivate::deactivate();
    }

    function custom_post_type(){
        register_post_type('book',['public'=> true,'label' => 'Books']);
    }
    
    function enqueue(){
        wp_enqueue_style('madpluginstyle',plugins_url('madplugin/assets/mystyle.css'),__FILE__);
        wp_enqueue_script('madpluginscript',plugins_url('madplugin/assets/myscript.js'),__FILE__);
    }
}

$madPlugin = new MadPlugin();    
$madPlugin->register();

register_activation_hook(__FILE__,array($madPlugin,'activate'));
register_deactivation_hook(__FILE__,array($madPlugin,'deactivate'));
}*/