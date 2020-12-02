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

    function showContacto(){
        $this->smarty->display('templates/contacto.tpl');
    }

    function mostrar($productos, $categorias){
        $this->smarty->assign('titulo', $this->titulo);
        $this->smarty->assign('productos',$productos);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/productos.tpl');
    }

    function showProducto($producto, $categoria){
        $this->smarty->assign('titulo', $this->titulo);
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('templates/producto.tpl');
    }

    function showEditProducto($producto, $categorias){
        $this->smarty->assign('titulo', $this->titulo);
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('templates/editProducto.tpl');
    }

    function showProductosAdmin($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('productos', $productos);
        $smarty->assign('categorias', $categorias);
        $smarty->display('templates/productosAdmin.tpl'); 
    }

    function showProductoAdmin($producto, $categoria){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->titulo);
        $smarty->assign('producto', $producto);
        $smarty->assign('categoria', $categoria);
        $smarty->display('templates/productoAdmin.tpl'); 
    }
        


}
?>