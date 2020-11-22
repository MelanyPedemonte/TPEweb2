<?php

require_once "./libs/smarty/Smarty.class.php";

class authView {

    private $smarty;
    private $titulo;

   function __construct() {
       $this->smarty = new Smarty();
       $this->titulo = "Login";
   } 

   function showLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 
    }

    function showRegistro($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('message', $message);
        $smarty->display('templates/registro.tpl'); 
    }

}


?>