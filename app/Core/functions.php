<?php 
namespace app\Core;

// utils functions
function show($stuf) {
    echo "<pre>";
    print_r($stuf);
    echo "</pre>";
}

            
function    errorExit(string $error) {
    echo $error . "<br>";
    exit(1);
}
    
?>