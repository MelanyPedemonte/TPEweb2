<?php

require_once "./View/usuariosView.php";
require_once "./Model/usuariosModel.php";
require_once "./Model/productosModel.php";
require_once "./Model/categoriasModel.php";

class usuariosController{

    private $view;
    private $model;
    private $pmodel;
    private $cmodel;

    function __construct(){
        $this->view = new usuariosView();
        $this->model = new usuariosModel();
        $this->pmodel = new productosModel();
        $this->cmodel = new categoriasModel();

    }

    function Login(){
        $logeado = $this->checkLoggedIn();
        if($logeado){
            $this->ShowAdmin();
        } else {
            $this->view->ShowLogin();
        }
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }

    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);

            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario

                if (password_verify($pass, $userFromDB->pass)){

                    session_start();
                    if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY']>1000)){
                        header("Location: ".LOGOUT);
                    }
                    $_SESSION["EMAIL"] = $userFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $this->ShowAdmin();
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }


            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
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

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL'])){
            return false;
        }else return true;
    }  

    function ShowAdmin(){
        $categorias = $this->cmodel->GetCategorias();
        $productos = $this->pmodel->GetProductos();
        $this->view->ShowVerify($productos, $categorias);
    }


}


?>
