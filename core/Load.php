<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of load
 *
 * @author ishanig
 */
class Load {
    function __construct() {        
    }
    
    function __call($func,$args) { 
        if(method_exists($this, $func)) {
            call_user_func_array($func, $args);
        } else {
            die('Invalid class');
        }
    }
    
    function Controller($classname) {
        $controller_file = 'controller/' . $classname . '.class.php';
        if(file_exists($controller_file)) {
            include_once($controller_file); 
            return new $classname;
        }
        die('Invalid controller file');
    }
}

?>
