<?php 

namespace app\Core;
class Request {

    public function __construct() {
        // echo "<br>Request constructor<br>";
    }

    public function getPath() : string {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getMethod() : string {
        return ($_SERVER['REQUEST_METHOD']);  // to know if request is get or post.
    }
}

?>