<?php

require_once "./libs/smarty/Smarty.class.php";

class categoriasView{

    private $smarty;
    private $titulo;

    function __construct(){
        $this->smarty = new Smarty();

    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');

    }

    function showCategorias($categorias){
        $this->smarty->assign('titulo', $this->titulo);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/categorias.tpl');
    }

    function showCategoria($categoria, $productos){
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/categoria.tpl');
    }

    function ShowEditCategoria($categoria, $productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('templates/editCategoria.tpl'); 
    }

    function ShowCategoriasAdmin($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/categoriasAdmin.tpl'); 
    }


}
?>