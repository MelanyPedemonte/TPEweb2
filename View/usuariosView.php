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

    function ShowLogin($message = ""){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 
    }

    function ShowVerify($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/homeUsuario.tpl'); 
    }

    function ShowCategoriasAdmin($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/categoriasAdmin.tpl'); 
    }

    function ShowProductosAdmin($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/productosAdmin.tpl'); 
    }




}


?>
