<?php 

namespace app\Core;

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
        [$controllerClass, $controllerMethod] = $callback;
        if (!class_exists($controllerClass))
            errorExit("$controllerClass class not found.");
        if (!method_exists($controllerClass, $controllerMethod))
            errorExit("$controllerMethod method not found in $controllerClass");
        $controller = new $controllerClass();
        $controller->$controllerMethod();
    }
}

?>