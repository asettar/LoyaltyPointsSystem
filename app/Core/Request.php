<?php 

namespace app\Core;
class Request {

    public function __construct() {
        // echo "<br>Request constructor<br>";
    }

    public function getPath() : string {
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?'); 
        if ($position !== false) $path = substr($path, 0, $position); 
        return $path;
    }

    public function getMethod() : string {
        show($_SERVER['REQUEST_METHOD']);
        return $_SERVER['REQUEST_METHOD'];  // to know if request is get or post.
    }
}

?>