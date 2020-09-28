<?php

    class categoriasModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getCategorias(){
            $sentencia = $this->db->prepare("SELECT * FROM categoria");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }


    }

?>