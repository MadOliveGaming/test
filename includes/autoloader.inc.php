<?php

// Include in needed class files
spl_autoload_register('autoLoader');

function autoLoader($className){
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    // Return false if the class file doesn't exist
    if(!file_exists($fullPath)){
      return false;
    }

    include_once $fullPath;
}

?>
