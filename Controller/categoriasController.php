
<?php   

require_once "./View/categoriasView.php";
require_once "./Model/categoriasModel.php";
require_once "./View/productosView.php";
require_once "./Model/productosModel.php";


class categoriasController{

    private $view;
    private $model;
    private $pview;
    private $pmodel;

function __construct(){
    $this->view = new categoriasView();
    $this->pview = new productosView();
    $this->pmodel = new productosModel();
    $this->model = new categoriasModel();
    $this->titulo = "Tan Rico";
}

//function home(){
//    $this->view->showHome();
//}

function getCategorias(){
    $categorias = $this->model->getCategorias();
    $this->view->Mostrar($categorias);
}


}
