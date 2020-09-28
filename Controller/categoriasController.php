<?php   

require_once "./View/categoriasView.php";
require_once "./Model/categoriasModel.php";
//require_once "./Model/categoriasModel.php";


class categoriasController{

    private $view;
    private $model;

function __construct(){
    $this->view = new categoriasView();
    //$this->model = new productosModel();
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



}