<?php
    require_once 'Controller/productosController.php';
    require_once 'Controller/categoriasController.php';
    require_once 'Controller/usuariosController.php';
    require_once 'Controller/authController.php';
    require_once 'RouterClass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("URL_productoss", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


    $route = new Router();

    //productos
    $route->addRoute("productos","GET","productosController","getProductos");
    $route->addRoute("producto/:ID","GET","productosController","getProducto");
    $route->addRoute("addProducto", "POST", "productosController", "addProducto");
    $route->addRoute("deleteproducto/:ID","GET","productosController","deleteProducto");
    $route->addRoute("editP/:ID", "GET", "productosController", "showEditProducto");
    $route->addRoute("editarProducto/:ID","POST","productosController","editProducto");
    $route->addRoute("productosAdmin","GET","productosController","productosAdmin");
    $route->addRoute("productoAdmin/:ID","GET","productosController","productoAdmin");
    $route->addRoute("deleteImg/:ID","GET","productosController","deleteImg");


    //categorias
    $route->addRoute("categorias","GET","categoriasController","getCategorias");
    $route->addRoute("categoria/:ID","GET","categoriasController","getCategoria");
    $route->addRoute("addCategoria", "POST", "categoriasController", "addCategoria");
    $route->addRoute("deletecategoria/:ID","GET","categoriasController","deleteCategoria");
    $route->addRoute("editC/:ID", "GET", "categoriasController", "showEditCategoria");
    $route->addRoute("editarCategoria/:ID","POST","categoriasController","editCategoria");
    $route->addRoute("categoriasAdmin","GET","categoriasController","categoriasAdmin");

    //usuarios
    $route->addRoute("registro", "GET", "authController", "showRegistro");
    $route->addRoute("login", "GET", "authController", "showLogin");
    $route->addRoute("logout", "GET", "authController", "logout");
    $route->addRoute("verifyUser", "POST", "authController", "login");
    $route->addRoute("newUser", "POST", "authController", "newUsuario");

    //usuarios admin
    $route->addRoute("usuariosAdmin", "GET", "usuariosController", "showUsuarios");
    $route->addRoute("deleteUsuario/:ID", "GET", "usuariosController", "deleteUsuario");
    $route->addRoute("editU/:ID", "GET", "usuariosController", "showEditUsuario");
    $route->addRoute("editUsuario/:ID", "POST", "usuariosController", "editUsuario");

    //home
    $route->addRoute("home","GET","productosController","home");
    $route->addRoute("contacto","GET","productosController","contacto");






    $route->setDefaultRoute("productosController","home");

    $route->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    

?>