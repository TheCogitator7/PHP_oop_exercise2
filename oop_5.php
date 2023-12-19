<?php 
function autoloader($path){
    $path=str_replace('\\', '/', $path);
    $path=$path.'.php';
    var_dump('Path : '.$path);
    require_once $path;
}

spl_autoload_register('autoloader');

use \greeting\en\Hi as EnHi;
use \greeting\ko\Hi as KoHi;

new EnHi();
new KoHi(); 
?>