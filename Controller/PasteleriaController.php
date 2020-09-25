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
            //$this->model->GetProductos();
            $this->view->ShowHome();
        }



    }