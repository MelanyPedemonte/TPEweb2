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

        function showProducto($producto){
            $this->smarty->assign('titulo', $this->titulo);
            $this->smarty->assign('producto',$producto);
            $this->smarty->display('templates/producto.tpl');
        }

        function mostrarForm($categorias){
            $this->smarty->assign('categorias',$categorias);
            $this->smarty->display('templates/productos.tpl');
          }


}
?>