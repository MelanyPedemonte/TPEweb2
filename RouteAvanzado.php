<?php
    require_once 'Controller/PasteleriaController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    $r->addRoute("home", "GET", "PasteleriaController", "Home");




    
    // rutas
    $r->addRoute("home", "GET", "PasteleriaController", "Home");
    
    //Esto lo veo en PasteleriaView
    $r->addRoute("insert", "POST", "PasteleriaController", "Servicios");

    /*
    $r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
    $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");
    $r->addRoute("edit/:ID", "GET", "TasksController", "EditTask");
    */

    //Ruta por defecto.
    $r->setDefaultRoute("PasteleriaController", "Home");

    //Advance
    //$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");
    
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    

?>