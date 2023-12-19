<?php 
require_once 'greeting/en/Hi.php';
require_once 'greeting/ko/Hi.php';

use \greeting\en\Hi as EnHi;
use \greeting\ko\Hi as KoHi;

new EnHi();
new KoHi(); 
?>