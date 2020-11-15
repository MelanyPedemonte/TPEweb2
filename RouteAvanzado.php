<?php
    require_once 'Controller/productosController.php';
    require_once 'Controller/categoriasController.php';
    require_once 'Controller/usuariosController.php';
    require_once 'RouterClass.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("URL_productoss", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    

    $route = new Router();

    //productos
    $route->addRoute("contacto","GET","productosController","contacto");
    $route->addRoute("productos","GET","productosController","getProductos");
    $route->addRoute("producto/:ID","GET","productosController","getProducto");
    $route->addRoute("addProducto", "POST", "productosController", "addProducto");
    $route->addRoute("deleteproducto/:ID","GET","productosController","deleteProducto");
    $route->addRoute("editP/:ID", "GET", "productosController", "showEditProducto");
    $route->addRoute("editarProducto/:ID","POST","productosController","editProducto");
    $route->addRoute("productosAdmin","GET","productosController","productosAdmin");
    $route->addRoute("productoAdmin/:ID","GET","productosController","productoAdmin");

    //categorias
    $route->addRoute("categorias","GET","categoriasController","getCategorias");
    $route->addRoute("categoria/:ID","GET","categoriasController","getCategoria");
    $route->addRoute("addCategoria", "POST", "categoriasController", "addCategoria");
    $route->addRoute("deletecategoria/:ID","GET","categoriasController","deleteCategoria");
    $route->addRoute("editC/:ID", "GET", "categoriasController", "showEditCategoria");
    $route->addRoute("editarCategoria/:ID","POST","categoriasController","editCategoria");
    $route->addRoute("categoriasAdmin","GET","categoriasController","categoriasAdmin");

    //usuarios
    $route->addRoute("login", "GET", "usuariosController", "login");
    $route->addRoute("logout", "GET", "usuariosController", "logout");
    $route->addRoute("verifyUser", "POST", "usuariosController", "verifyUser");
    $route->addRoute("newUser", "POST", "usuariosController", "newUsuario");

    //home
    $route->addRoute("home","GET","productosController","home");
    $route->addRoute("homeAdmin","GET","productosController","homeAdmin");
    $route->addRoute("contactoUsuario","GET","usuariosController","contactoUsuario");






    $route->setDefaultRoute("productosController","home");

    $route->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
    

?>