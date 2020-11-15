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

    function contactoUsuario(){
        $this->view->showContactoUsuario();
    }

    function login(){
        $this->view->showLogin();
    }

    function logout(){
        authHelper::logout();
        header("Location:".BASE_URL."home");
    }

    function verifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->model->getUser($user);
            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario
                if (password_verify($pass, $userFromDB->pass)){
                    authHelper::login($user);
                    header("Location:".BASE_URL."homeAdmin");
                }else{
                    $this->view->showLogin("Contraseña incorrecta");

                }
            }else{
                // No existe el user en la DB
                header("Location:".BASE_URL."home");
            }
        }
    }

    function newUsuario(){
        $user= $_POST['user'];
        $mail= $_POST['email'];
        $password= $_POST['pass'];

        $pass = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($mail) && !empty($password)&& !empty($user)){
            
            $this->model->agregarUsuario($user, $mail, $pass);
            header('Location: ' . BASE_URL); 
        }
        else {
            $this->view->showLogin("ERROR, no se creo el usuario");
        }
    }

}


?>
