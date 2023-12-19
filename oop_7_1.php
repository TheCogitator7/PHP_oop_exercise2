<?php 
//callback func.
spl_autoload_register(function($path){
    $path=str_replace('\\', '/', $path);
    $path=$path.'.php';
    var_dump('Path : '.$path);
    require_once $path;
});
?>