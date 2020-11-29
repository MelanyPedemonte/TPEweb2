<?php

    require_once 'RouterClass.php';
    require_once './api/apiComentariosController.php';

    $router = new Router();
    
    $router->addRoute("producto/:ID/comentarios", "GET", "apiComentariosController", "getComentarios");
    $router->addRoute("comentario", "POST", "apiComentariosController", "addComentario");
    $router->addRoute("comentario", "DELETE", "apiComentariosController", "deleteComentario");
    
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 