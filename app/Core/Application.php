<?php 

namespace app\Core;
use app\Controllers\AuthController;

class Application {
    public Router $router;

    public function __construct($router) {
        $this->router = $router;
        $this->router->get('/login', [AuthController::class, 'loginForm']);
        $this->router->post('/login', [AuthController::class, 'login']);
        $this->router->get('/register', [AuthController::class, 'registerForm']);
        $this->router->post('/register', [AuthController::class, 'register']);
        echo "<br>App constructor.<br>";
    }
    public function run() {
        $this->router->resolve();
    }
}

?>