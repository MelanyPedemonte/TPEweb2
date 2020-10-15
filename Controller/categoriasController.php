
<?php   

require_once "./View/categoriasView.php";
require_once "./Model/categoriasModel.php";
require_once "./Model/productosModel.php";
require_once "./View/usuariosView.php";
require_once "./Controller/usuariosController.php";


class categoriasController{

    private $view;
    private $model;
    private $pmodel;
    private $uView;
    private $uControl;

function __construct(){
    $this->view = new categoriasView();
    $this->pmodel = new productosModel();
    $this->model = new categoriasModel();
    $this->uView = new usuariosView();
    $this->uControl = new usuariosController();
    $this->titulo = "Tan Rico";
}

//function home(){
//    $this->view->showHome();
//}

function traerCategorias(){
    $categorias = $this->model->getCategorias();
    $this->view->Mostrar($categorias);
}


function getCategoria($params = null){
    $id = $params[':ID'];  
    $categoria = $this->model->getCategoria($id);    
    $productos =$this->pmodel->productosCategoria($id);
    $this->view->showCategoria($categoria, $productos);
}

function InsertCategoria(){
    $logeado = $this->uControl->checkLoggedIn();
    if($logeado){
        if ((isset($_POST['nombre']) && isset($_POST['descripcion']))) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->model->agregarCategoria($_POST['nombre'],$_POST['descripcion']);
        }
        $categorias = $this->model->getCategorias();
        $productos =$this->pmodel->getProductos();
        $this->uView->ShowCategoriasAdmin($productos, $categorias);
    }else{
        $this->loginView->ShowLogin();
    }
}

function borrarCategoria($params = null){
    $logeado = $this->uControl->checkLoggedIn();
    if($logeado){
        $id = $params[':ID'];
        $this->model->eliminarCategoria($id);
        $categorias = $this->model->getCategorias();
        $productos =$this->pmodel->getProductos();
        $this->uView->ShowCategoriasAdmin($productos, $categorias);
    }else{
        $this->loginView->ShowLogin();
    }
}

function mostrarEditCategoria($params = null){
    $logeado = $this->uControl->checkLoggedIn();
    if($logeado){
        $id = $params[':ID'];
        $categoria = $this->model->getCategoria($id);
        $productos =$this->pmodel->productosCategoria($id);
        $this->view->showEditCategoria($categoria, $productos);
    }else{
        $this->loginView->ShowLogin();
    }
}

function editCategoria($params = null){
    $logeado = $this->uControl->checkLoggedIn();
    if($logeado){
        $id = $params[':ID'];
        if ((isset($_POST['nombre']) && isset($_POST['descripcion']))) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->model->editarCategoria($id,$nombre,$descripcion);
        }
        $categorias = $this->model->getCategorias();
        $productos =$this->pmodel->getProductos();
        $this->uView->ShowCategoriasAdmin($productos, $categorias);
    }else{
        $this->loginView->ShowLogin();
    }
}


}
