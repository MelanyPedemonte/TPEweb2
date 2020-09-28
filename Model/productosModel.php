<?php

    class productosModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getProductos(){
            $sentencia = $this->db->prepare("SELECT p.id_producto, p.nombre_producto, p.descripcion_producto, p.precio, p.id_categoria FROM producto p INNER JOIN categotia c ON p.id_categoria = c.id_categoria");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            var_dump($productos);
            return $productos;
           
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