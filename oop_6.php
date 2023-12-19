<?php 
//callback func.
spl_autoload_register(function($path){
    $path=str_replace('\\', '/', $path);
    $path=$path.'.php';
    var_dump('Path : '.$path);
    require_once $path;
});

use \greeting\en\Hi as EnHi;
use \greeting\ko\Hi as KoHi;

new EnHi();
new KoHi(); 
?>