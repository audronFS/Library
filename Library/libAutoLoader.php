<?php
// this works
spl_autoload_register("myAutoLoader");

function myAutoLoader($className) {
    $path = dirname(__DIR__) ."/ObjectOrientated/classes/";
    $extension = "_OGClass.php";
    $fullpath = $path . $className . $extension;
    
    
    echo "this is path " . $fullpath;
    
    // this is to error handle the autoloader
   if (!file_exists($fullpath)){
       return false;
   }
    
   include_once $fullpath; 
   
   
}

?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

