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
        $productos = $this->model->getProductos();
        $this->view->Mostrar($productos);
    }

    function getProducto($params = null){
        $id = $params[':ID'];
        $producto = $this->model->getProducto($id);
        $this->view->showProducto($producto);
    }

    function InsertProducto($categorias){
        $this->cmodel->getCategoria();
        $this->model->agregarProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria']);
        $this->view->mostrarForm($categorias);
    }



    }