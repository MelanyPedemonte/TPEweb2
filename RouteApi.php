<?php

    require_once 'RouterClass.php';
    require_once './api/apiComentariosController.php';

    $router = new Router();
    
    $router->addRoute("comentarios/:ID", "GET", "apiComentariosController", "getComentarios");
    $router->addRoute("comentarios", "POST", "apiComentariosController", "addComentario");
    $router->addRoute("comentarios/:ID", "DELETE", "apiComentariosController", "deleteComentario");
    
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 