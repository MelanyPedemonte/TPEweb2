<?php
    require_once 'Controller/productosController.php';
    require_once 'Controller/categoriasController.php';
    require_once 'Controller/usuariosController.php';
    require_once 'RouterClass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("URL_productoss", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    

    $route = new Router();

    //productos
    $route->addRoute("home","GET","productosController","home");
    $route->addRoute("contacto","GET","productosController","contacto");
    $route->addRoute("productos","GET","productosController","traerProductos");
    $route->addRoute("producto/:ID","GET","productosController","getProducto");
    $route->addRoute("addProducto", "POST", "productosController", "InsertProducto");
    $route->addRoute("deleteproducto/:ID","GET","productosController","borrarProducto");
    $route->addRoute("editP/:ID", "GET", "productosController", "mostrarEditProducto");
    $route->addRoute("editarProducto/:ID","POST","productosController","editProducto");

    //categorias
    $route->addRoute("categorias","GET","categoriasController","traerCategorias");
    $route->addRoute("categoria/:ID","GET","categoriasController","getCategoria");
    $route->addRoute("addCategoria", "POST", "categoriasController", "InsertCategoria");
    $route->addRoute("deletecategoria/:ID","GET","categoriasController","borrarCategoria");
    $route->addRoute("editC/:ID", "GET", "categoriasController", "mostrarEditCategoria");
    $route->addRoute("editarCategoria/:ID","POST","categoriasController","editCategoria");

    //usuarios
    $route->addRoute("login", "GET", "usuariosController", "Login");
    $route->addRoute("logout", "GET", "usuariosController", "Logout");
    $route->addRoute("verifyUser", "POST", "usuariosController", "VerifyUser");
    $route->addRoute("newUser", "POST", "usuariosController", "newUsuario");



    $route->setDefaultRoute("productosController","home");

    $route->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    

?>