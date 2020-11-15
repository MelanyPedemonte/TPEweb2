<?php

require_once "./libs/smarty/Smarty.class.php";

class usuariosView{

    private $title;
    

    function __construct(){
        $this->title = "Login";
    }

    function showContactoUsuario(){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->display('templates/contactoUsuario.tpl');

    }

    function showLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 
    }

}


?>
