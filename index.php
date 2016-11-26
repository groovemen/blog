<?php
    // Display all errors on page
    ini_set('error_reporting', E_ALL);
    
    define("BASE_URL", "https://web6-stefan-grooveman.c9users.io/Practice/final-project/blog/");
    
    define("VIEWS", "app/views/");
    define("MODELS", "app/models/");
    define("CONTROLLERS", "app/controllers/");
    define("HELPERS", "app/helpers/");
    
    define("CSS",BASE_URL."assets/css/");
    define("IMG",BASE_URL."assets/img/");
    define("JS", BASE_URL."assets/js/");
    
    session_start();
    
    // echo "<pre>";
    // print_r($_SERVER);
    
    require "app/configs/pages.php";
    
    // removes " / " - access the routes with or without "/" 
    if (!isset($_SERVER["PATH_INFO"])) {
        $_SERVER["PATH_INFO"] = "/";    
    }
    
    $page = $_SERVER["PATH_INFO"];
        if ($page !== "/") {
            $page = rtrim($page, '/');
        }
    
   
    if (array_key_exists($page, $pages)) {
        // Bring the specific controller
        require CONTROLLERS . $pages[$page]["path"];
        // Class instantiation
        $controller = new $pages[$page]["class"]();
        // Call the index() class
        $controller->$pages[$page]["method"]();    
    }else {
        echo "404. Page not found";
        exit;
    }

?>

  