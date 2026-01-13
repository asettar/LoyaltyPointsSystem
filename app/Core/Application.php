<?php 

namespace app\Core;

class Application {
    private Router $router;

    public function __construct() {
        $this->router = new Router();
        echo "<br>App constructor.<br>";
    }
    public function run() {
        $this->router->resolve();
    }
}

?>