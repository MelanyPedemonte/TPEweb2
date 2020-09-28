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

        function Mostrar($categorias){
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('categorias',$categorias);
            $this->smarty->display('templates/categorias.tpl');

        }

}
?>