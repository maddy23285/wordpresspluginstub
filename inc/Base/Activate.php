<?php
/**
 * @Package madplugin
 */

 namespace Inc\Base;

 class Activate{
     // Step-5.1
     public static function activate(){
         flush_rewrite_rules();
     }
 }