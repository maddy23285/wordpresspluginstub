<?php
/**
 * @Package madplugin
 */

 namespace Inc\Base;

 class Deactivate{
     // Step-6.1
     public static function deactivate(){
         flush_rewrite_rules();
     }
 }