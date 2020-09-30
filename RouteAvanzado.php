<?php
    require_once 'Controller/productosController.php';
    require_once 'Controller/categoriasController.php';
    require_once 'RouterClass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("URL_productoss", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    

    $route = new Router();


    $route->addRoute("home","GET","productosController","home");
    $route->addRoute("productos","GET","productosController","traerProductos");
    $route->addRoute("producto/:ID","GET","productosController","getProducto");
    $route->addRoute("categorias","GET","categoriasController","traerCategorias");
    $route->addRoute("categoria/:ID","GET","categoriasController","getCategoria");
    $route->addRoute("addCategoria", "POST", "categoriasController", "InsertCategoria");


    $route->setDefaultRoute("productosController","home");

    $route->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    

?>