
<?php   

require_once "./View/categoriasView.php";
require_once "./Model/categoriasModel.php";
require_once "./Model/productosModel.php";
require_once "./Helpers/authHelper.php";


class categoriasController{

    private $view;
    private $model;
    private $pmodel;

    function __construct(){
        $this->view = new categoriasView();
        $this->pmodel = new productosModel();
        $this->model = new categoriasModel();
        $this->titulo = "Tan Rico";
    }
    
    function getCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->showCategorias($categorias);
    }
    
    function getCategoria($params = null){
        $id = $params[':ID'];  
        $categoria = $this->model->getCategoria($id);    
        $productos =$this->pmodel->productosCategoria($id);
        $this->view->showCategoria($categoria, $productos);
    }
    
    function addCategoria(){
        authHelper::checkLogged();
        if ((isset($_POST['nombre']) && isset($_POST['descripcion']))) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->model->addCategoria($_POST['nombre'],$_POST['descripcion']);
        }
        header("Location: ".BASE_URL. "categoriasAdmin" );
    }
    
    function deleteCategoria($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $this->model->deleteCategoria($id);
        header("Location: ".BASE_URL. "categoriasAdmin");
    }
    
    function showEditCategoria($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $categoria = $this->model->getCategoria($id);
        $productos =$this->pmodel->productosCategoria($id);
        $this->view->showEditCategoria($categoria, $productos);
    }
    
    function editCategoria($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        if ((isset($_POST['nombre']) && isset($_POST['descripcion']))) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->model->editCategoria($id,$nombre,$descripcion);
        }
        header("Location: ".BASE_URL. "categoriasAdmin");
    }
    
    function categoriasAdmin(){
        authHelper::checkLogged();
        $categoria = $this->model->GetCategorias();
        $producto = $this->pmodel->GetProductos();
        $this->view->ShowCategoriasAdmin($producto, $categoria);
    }
    

}
