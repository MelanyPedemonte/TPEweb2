<?php   

    require_once "./View/PasteleriaView.php";
    require_once "./Model/PasteleriaModel.php";

    class PasteleriaController{

        private $view;
        private $model;

        function __construct (){
            $this->view = new PasteleriaView();
            $this->model = new PasteleriaModel();
        }

        function Home(){
            $this->view->ShowHome();
        }

        function Servicios(){
            $productos = $this->model->GetProductos();
            $this->view->ShowProductos($productos);

        }



    }