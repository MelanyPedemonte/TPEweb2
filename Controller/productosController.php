<?php   

    require_once "./View/productosView.php";
    require_once "./Model/productosModel.php";
    require_once "./Model/categoriasModel.php";
    require_once "./View/usuariosView.php";
    require_once "./Controller/usuariosController.php";



    class productosController{

        private $view;
        private $model;
        private $cmodel;
        private $uView;
        private $uControl;

    function __construct(){
        $this->view = new productosView();
        $this->model = new productosModel();
        $this->cmodel = new categoriasModel();
        $this->uView = new usuariosView();
        $this->uControl = new usuariosController();
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
        $logeado = $this->uControl->checkLoggedIn();
        if($logeado){
            $categorias= $this->cmodel->getCategorias();
            $this->model->agregarProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria']);
            $productos = $this->model->getProductos();
            $categorias= $this->cmodel->getCategorias();
            $this->uView->showVerify($productos, $categorias);
        }else{
            $this->uView->ShowLogin();
        }
    }

    function borrarProducto($params = null){
        $logeado = $this->uControl->checkLoggedIn();
        if($logeado){
            $id = $params[':ID'];
            $this->model->eliminarProducto($id);
            $productos = $this->model->getProductos();
            $categorias= $this->cmodel->getCategorias();
            $this->uView->showVerify($productos, $categorias);
        }else{
            $this->uView->ShowLogin();
        }
    }

    function mostrarEditProducto($params = null){
        $logeado = $this->uControl->checkLoggedIn();
        if($logeado){
            $id = $params[':ID'];
            $producto = $this->model->getProducto($id);
            $categorias =$this->cmodel->getCategorias();
            $this->view->showEditProducto($producto, $categorias);
        }else{
            $this->loginView->ShowLogin();
        }
    }

    function editProducto($params = null){
        $logeado = $this->uControl->checkLoggedIn();
        if($logeado){
            $id = $params[':ID'];
            $this->model->editarProducto($id,$_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria']);
            $productos = $this->model->getProductos();
            $categorias= $this->cmodel->getCategorias();
            $this->uView->showVerify($productos, $categorias);
        }else{
            $this->uView->ShowLogin();
        }
    }





    }