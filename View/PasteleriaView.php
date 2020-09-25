<?php

require_once "./libs/smarty/Smarty.class.php";

class PasteleriaView{

        private $title;

        function __construct(){
            $this->title = "HOLA";
        }

        function ShowHome(){

            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);

            $smarty->display('templates/home.tpl');

        }

        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }

}
?>