<?php   

    require_once "./View/productosView.php";
    require_once "./Model/productosModel.php";
    require_once "./Model/categoriasModel.php";


    class productosController{

        private $view;
        private $model;

    function __construct(){
        $this->view = new productosView();
        $this->model = new productosModel();
        $this->cmodel = new categoriasModel();
        $this->titulo = "Tan Rico";
    }

    function home(){
        $this->view->showHome();
    }

    function traerProductos(){
        $categorias= $this->cmodel->getCategorias();
        $productos = $this->model->getProductos();
        $this->view->Mostrar($productos, $categorias);
    }

    function getProducto($params = null){
        $id = $params[':ID'];
        $categorias= $this->cmodel->getCategorias();
        $producto = $this->model->getProducto($id);
        $this->view->showProducto($producto, $categorias);
    }

    function InsertProducto(){
        $categorias= $this->cmodel->getCategorias();
        $this->model->agregarProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria']);
        $productos = $this->model->getProductos();
        $this->view->Mostrar($productos, $categorias);
    }

    function borrarProducto($params = null){
        $id = $params[':ID'];
        $this->model->eliminarProducto($id);
        $productos = $this->model->getProductos();
        $categorias= $this->cmodel->getCategorias();
        $this->view->Mostrar($productos, $categorias);
    }

    function editProducto($params = null){
        $id = $params[':ID'];
        $this->model->editarProducto($id,$_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria']);
        $producto = $this->model->getProducto($id);
        $categorias= $this->cmodel->getCategorias();
        $this->view->showProducto($producto, $categorias);
    }





    }