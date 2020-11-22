<?php

require_once "./View/usuariosView.php";
require_once "./Model/usuariosModel.php";
require_once "./Helpers/authHelper.php";

class usuariosController{

    private $view;
    private $model;


    function __construct(){
        $this->view = new usuariosView();
        $this->model = new usuariosModel();
    }

    function showUsuarios(){
        $usuarios = $this->model->getUsuarios();
        $logueado =  authHelper::checkLogged();
        $admin = authHelper::esAdmin();
        if($logueado && $admin){
            $this->view->showUsuarios($usuarios);
        } else {
            header("Location:  " .  BASE_URL . "home"); 
        }
    }

    function deleteUsuario($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $this->model->deleteUsuario($id);
        header("Location:  " .  BASE_URL . "usuariosAdmin"); 
    }

    function showEditUsuario($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $usuario = $this->model->getUsuarioID($id);
        $this->view->showEditUsuario($usuario);
    }
    
    function editUsuario($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        if ((isset($_POST['selectAdmin']))) {
            $admin = $_POST['selectAdmin'];
            $this->model->editUsuario($admin, $id);
        }
        header("Location: ".BASE_URL. "usuariosAdmin"); 
    }

}

?>
