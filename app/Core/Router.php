<?php 

namespace app\Core;

use app\Controllers\AuthController;
class Router {
    private array   $routes = [];
    private Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public  function    get(string $path, array $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public  function    post(string $path,  array $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public  function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        show($path);
        show($method);
        show($this->routes);
        $callback = $this->routes[$method][$path] ?? null;
        if (!$callback) {
            require "../app/Controllers/_404Controller.php";
            exit();
        }
        [$controllerObject, $controllerMethod] = $callback;
        if (!method_exists($controllerObject, $controllerMethod))
            errorExit("$controllerMethod method not found.");
        $controllerObject->$controllerMethod();
    }
}

?>