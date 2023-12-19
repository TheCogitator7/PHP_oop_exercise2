<?php 
namespace greeting\en;
class Hi{
    function __construct(){
        echo "Hi~<br>";
    }
}

namespace greeting\ko;
class Hi{
    function __construct(){
        echo "안녕~<br>";
    }
}

use \greeting\en\Hi as EnHi;
use \greeting\ko\Hi as KoHi;
new EnHi();
new KoHi();
?>