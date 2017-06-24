<?php

spl_autoload_register(function ($class_name) {
    
    $diretorio=array("Classes/");
    
    foreach ($diretorio as $dir):
        var_dump($dir.$class_name.".php");
        if(file_exists($dir.$class_name.".php")){
            require_once $dir.$class_name.".php";
        }
          
    endforeach;

  
   // var_dump($class_name.".php",__CLASS__);
    /*include __DIR__."".$class_name.'.php';
    var_dump( __DIR__.''.$class_name.'.php');*/
});