<?php

    class PasteleriaModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function GetProductos(){
            $sentencia = $this->db->prepare("SELECT * FROM productos");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

    }

?>