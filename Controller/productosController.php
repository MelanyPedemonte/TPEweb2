<?php   

    require_once "./View/productosView.php";
    require_once "./Model/productosModel.php";


    class productosController{

        private $view;
        private $model;

    function __construct(){
        $this->view = new productosView();
        $this->model = new productosModel();
        $this->titulo = "Tan Rico";
    }

    function home(){
        $this->view->showHome();
    }

    function traerProductos(){
        $productos = $this->model->getProductos();
        $this->view->Mostrar($productos);
    }



    }