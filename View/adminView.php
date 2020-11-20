<?php

require_once "./libs/smarty/Smarty.class.php";

class adminView {

    private $smarty;
    private $titulo;

   function __construct() {
       $this->smarty = new Smarty();
   } 

    function showUsuarios($usuarios){
        $this->smarty->assign('titulo', $this->titulo);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl'); 
    }


}


?>