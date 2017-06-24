<?php


spl_autoload_register(function ($class_name) {
    if(!file_exists($class_name.".php")){
        throw Exception("Erro ao tenta incluir o arquivo ( {$class_name} )");
    }  
    require_once $class_name.".php" ;
});
