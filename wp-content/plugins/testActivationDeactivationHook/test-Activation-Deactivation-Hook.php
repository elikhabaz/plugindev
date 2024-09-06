<?php
/**
 * Plugin Name: Activation and Deactivation Hook
 * Author: Tilda
 * Version: 1.0.0
 * Description: This is a plugin for Learning Activation and Deactivation Hook I store it in my gitHub
 */




 function activation(){
     $php = 8.1;
     if( version_compare(PHP_VERSION , $php , '<')){
         die(
             'your php Version is not Okey!'
            );
        }
        $add_log= plugin_dir_path(__FILE__).'log.txt';
        file_put_contents($add_log ,date('Y-m-d ,H:i:s').':' . ' plugin is Active!' .PHP_EOL , FILE_APPEND);
    }
 register_activation_hook(__FILE__ , 'activation');




function deactivation(){
        $add_log= plugin_dir_path(__FILE__).'log.txt';
        file_put_contents($add_log ,date('Y-m-d ,H:i:s').':' . ' plugin is Deactive!' .PHP_EOL , FILE_APPEND);
    }
 register_deactivation_hook(__FILE__ , 'deactivation');

?>