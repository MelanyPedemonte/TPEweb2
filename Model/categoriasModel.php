<?php

    class categoriasModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getCategorias(){
            $sentencia = $this->db->prepare("SELECT * FROM categoria");
            $sentencia->execute();
            $categorias=$sentencia->fetchAll(PDO::FETCH_OBJ);
            return $categorias;
        }


        function getCategoria($id){
            $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
            $sentencia->execute([$id]);
            $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
            return $categoria;
        }

        function agregarCategoria($nombre_categoria,$descripcion_categoria){
            $sentencia=$this->db->prepare("INSERT INTO categoria(nombre_categoria, descripcion_categoria) VALUES(?,?)");
            $sentencia->execute(array($nombre_categoria,$descripcion_categoria));
        }
   


    }

?>