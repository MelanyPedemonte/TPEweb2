<?php

require_once "./libs/smarty/Smarty.class.php";

class usuariosView{

    private $title;
    

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin($message = ""){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 
    }

    function ShowVerify(){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->display('templates/verify.tpl'); 
    }




}


?>
