<?php

require_once "./libs/smarty/Smarty.class.php";

class usuariosView{

    private $smarty;
    private $titulo;
    

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showUsuarios($usuarios){
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl'); 
    }

    function showEditUsuario($usuario){
        $this->smarty->assign('usuario', $usuario);
        $this->smarty->display('templates/editUsuario.tpl'); 
    }

}


?>
