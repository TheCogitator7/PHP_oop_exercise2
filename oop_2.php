<?php 
namespace en;
class Hi{
    function __construct(){
        echo "Hi~";
    }
}

namespace ko;
class Hi{
    function __construct(){
        echo "안녕~";
    }
}

new \en\Hi();
echo "<br>";
new \ko\Hi();
?>