<?php   

    require_once "./View/productosView.php";
    require_once "./Model/productosModel.php";
    require_once "./Model/categoriasModel.php";
    require_once "./Helpers/authHelper.php";



    class productosController{

        private $view;
        private $model;
        private $cmodel;


    function __construct(){
        $this->view = new productosView();
        $this->model = new productosModel();
        $this->cmodel = new categoriasModel();
        $this->titulo = "Tan Rico";
    }

    function home(){
        $loggedIn =  authHelper::checkLogged();
        if($loggedIn){
            $this->view->showHome();
        } else {
            $this->view->showHome();
        }
    }

    function contacto(){
        $loggedIn =  authHelper::checkLogged();
        if($loggedIn){
            $this->view->showContacto();
        } else {
            $this->view->showContacto();
        }
    }

    function getProductos(){
        $categorias= $this->cmodel->getCategorias();
        $productos = $this->model->getProductos();
        $this->view->mostrar($productos, $categorias);
    }

    function getProducto($params = null){
        $usuario = authHelper::checkLogged();
        $id = $params[':ID'];
        $producto = $this->model->getProducto($id);
        $categoria_id= $producto->id_categoria;
        $categoria= $this->cmodel->getCategoria($categoria_id);
        $this->view->showProducto($producto, $categoria, $usuario);
    }

    function addProducto(){
        authHelper::checkLogged();
        $categorias= $this->cmodel->getCategorias();
        if ((isset($_POST['nombre']) && isset($_POST['descripcion'])) && (isset($_POST['precio']) && isset($_POST['file']) && isset($_POST['categoria']))  && ($_FILES['input_file']['type'] == "image/jpg" || $_FILES['input_file']['type'] == "image/jpeg" || $_FILES['input_file']['type'] == "image/png")) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $fileTemp = $_FILES['file']['tmp_name'];
            $this->model->addProducto($nombre,$descripcion,$precio, $fileTemp,$categoria);
        } else{
            $this->model->addProducto($nombre,$descripcion,$precio,$categoria);
        }
        header("Location: ".BASE_URL. "productosAdmin" );
    }

    function deleteProducto($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $this->model->deleteProducto($id);
        header("Location: ".BASE_URL. "productosAdmin");
    }

    function showEditProducto($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $producto = $this->model->getProducto($id);
        $categorias =$this->cmodel->getCategorias();
        $this->view->showEditProducto($producto, $categorias);
    }

    function editProducto($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        if ((isset($_POST['nombre']) && isset($_POST['descripcion'])) && (isset($_POST['precio'])) && (isset($_POST['categoria'])) && ($_FILES['edit_file']['type'] == "image/jpg" || $_FILES['edit_file']['type'] == "image/jpeg" || $_FILES['edit_file']['type'] == "image/png")) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $fileTemp = $_FILES['edit_file']['tmp_name'];
            $this->model->editProductoImg($id,$nombre,$descripcion,$precio, $fileTemp, $categoria);
        } else{
            if ((isset($_POST['nombre']) && isset($_POST['descripcion'])) && (isset($_POST['precio'])) && (isset($_POST['categoria']))){
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $precio = $_POST['precio'];
                $categoria = $_POST['categoria'];
                $this->model->editProducto($id,$nombre,$descripcion,$precio, $categoria);
            }

        }
        header("Location: ".BASE_URL. "productosAdmin");
    }

    function productosAdmin() {
        authHelper::checkLogged();
        $productos = $this->model->getProductos();
        $categorias= $this->cmodel->getCategorias();
		$this->view->showProductosAdmin($productos, $categorias);
    }
    
    function productoAdmin($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $producto = $this->model->getProducto($id);
        $categoria_id= $producto->id_categoria;
        $categoria= $this->cmodel->getCategoria($categoria_id);
        $this->view->showProductoAdmin($producto, $categoria);
    }

    function deleteImg($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $filepath = $this->model->getFilepath($id);
        $this->model->deleteImg($id);
        $enUso = $this->model->imagenEnUso($filepath->imagen);
            if(!$imagenEnUso){
                unlink($filepath->imagen);
            }
        header("Location: ".BASE_URL. "editP/$id");
    }



}