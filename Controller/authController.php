<?php

include_once './View/authView.php';
include_once './Model/usuariosModel.php';
include_once './Helpers/authHelper.php';

Class authController{

    private $view;
    private $umodel;
 
    function __construct() {
        $this->view = new authView();
        $this->umodel = new usuariosModel();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function showRegistro(){
        $this->view->showRegistro();
    }

    function login(){
        $email = $_POST['input_user'];
        $password = $_POST['input_pass']; 
        if(empty($email) || empty($password)){
            $this->view->showLogin("Debe completar todos los campos"); 
        }
        $usuario = $this->umodel->getUsuario($email);
         if($usuario && password_verify($password, $usuario->pass) && ($email == $usuario->email)){
                authHelper::login($usuario);
                header("Location: " . BASE_URL . "home");             
            } else {
                $this->view->showLogin("Email o Contraseña incorrectos");
        }
    }

    function logout(){
        authHelper::logout();
        header("Location:".BASE_URL."home");
    }

    function newUsuario(){
        $user= $_POST['user'];
        $mail= $_POST['email'];
        $password= $_POST['pass'];
        $admin = 0;

        $pass = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($mail) && !empty($password)&& !empty($user)){
            
            $this->umodel->addUsuario($user, $mail, $pass, $admin);
            header('Location: ' . BASE_URL); 
        }
        else {
            $this->view->showRegistro("ERROR, no se pudo crear el usuario, comlete todos los campos requeridos");  //checkear aca 
        }
    }

}
