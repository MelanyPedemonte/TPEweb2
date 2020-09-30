
<?php   

require_once "./View/categoriasView.php";
require_once "./Model/categoriasModel.php";
//require_once "./Model/categoriasModel.php";


class categoriasController{

    private $view;
    private $model;

function __construct(){
    $this->view = new categoriasView();
    $this->pmodel = new productosModel();
    $this->model = new categoriasModel();
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
    $this->model->agregarCategoria($_POST['nombre'],$_POST['descripcion']);
    $categorias = $this->model->getCategorias();
    $this->view->Mostrar($categorias);
}


}
