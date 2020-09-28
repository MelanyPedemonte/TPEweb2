<?php

require_once "./libs/smarty/Smarty.class.php";

class productosView{

        private $smarty;
        private $titulo;

        function __construct(){
            $this->smarty = new Smarty();

        }

        function showHome(){
            $this->smarty->display('templates/home.tpl');

        }

        function Mostrar($productos){
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('productos',$productos);
            $this->smarty->display('templates/productos.tpl');

        }

}
?>