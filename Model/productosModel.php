<?php

    class productosModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getProductos(){
            $sentencia = $this->db->prepare("SELECT * FROM producto");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $productos;
           
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        
        function agregarProducto($nombre,$descripcion,$precio,$categoria){
            $sentencia=$this->db->prepare("INSERT INTO producto(nombre_producto, descripcion_producto, precio,id_categoria) 
            VALUES(?,?,?,?)");
            $sentencia->execute([$nombre, $descripcion, $precio, $categoria]);
            $id_libro=$this->db->lastInsertId();
            return $id_libro;
        }


    }

?>