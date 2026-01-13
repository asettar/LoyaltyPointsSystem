<?php 

namespace app\Core;

class Router {
    public function __construct() { 

    }

    private function getUrl() {
        $URL = $_GET['url'] ?? 'home';   // if url is / it will be empty
        $URL = explode('/', $URL); 
        return $URL;
    }
    
    public function resolve() {
        $URL = $this->getUrl();
        $fileName = "../app/Controllers/" . ucfirst($URL[0]) . "Controller.php";
        if (!file_exists($fileName)) 
            $fileName = "../app/Controllers/_404Controller.php";
        echo "filename: ";
        show($fileName);
        require($fileName);
    }
}

?>