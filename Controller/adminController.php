<?php

include_once './View/adminView.php';
include_once './Model/usuariosModel.php';
include_once './Helpers/authHelper.php';

Class adminController{

    private $view;
    private $umodel;
 
    function __construct() {
        $this->view = new adminView();
        $this->umodel = new usuariosModel();
    }
   


    function showUsuarios(){
        $usuarios = $this->umodel->getUsuarios();
        $logueado =  authHelper::checkLogged();
        $admin = authHelper::esAdmin();
        if($logueado && $esAdmin){
            $this->view->showUsuarios($usuarios);
        } else {
            header("Location:  " .  BASE_URL . "home");
        }
    }


    function deleteUsuario($params = null){
        $id = $params[':ID'];
        $logueado =  authHelper::checkLogged(); 
        if($logueado){
            $this->umodel->deleteUsuario($id);
            header("Location:  " .  BASE_URL . "homeAdmin");
        }
        else {
            header("Location:  " .  BASE_URL . "home");
        }
    }

    function showEditUsuario($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        $usuario = $this->umodel->getUsuario($id);
        $this->view->showEditUsuario($usuario);
    }

    function editUsuario($params = null){
        authHelper::checkLogged();
        $id = $params[':ID'];
        if ((isset($_POST['selectAdmin']))) {
            $admin = $_POST['selectAdmin'];
            $this->umodel->editUsuario($id, $admin);
        }
        header("Location: ".BASE_URL. "admin");
    }


}