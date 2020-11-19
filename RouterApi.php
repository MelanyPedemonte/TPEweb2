<?php
    require_once 'RouterClass.php';
    require_once 'api/apiComentariosController.php';

    // instacio el router
    $router = new Router();

    // armo la tabla de ruteo de la API REST
    $router->addRoute("producto/:ID/comentarios", "GET", "apiComentariosController", "getComentarios");
    $router->addRoute("/comentarios", "POST", "apiComentariosController", "addComentario");
    $router->addRoute("/comentarios/:ID", "DELETE", "apiComentariosController", "deleteComentario");
    
    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
