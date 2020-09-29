<?php

    class productosModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getProductos(){
            $sentencia = $this->db->prepare("SELECT p.id_producto,p.nombre_producto,p.descripcion_producto, p.precio, c.nombre_categoria FROM producto p INNER JOIN categoria c ON p.id_categoria = c.id_categoria");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }

        function getProducto($id){
            $sentencia = $this->db->prepare("SELECT id_producto,nombre_producto,descripcion_producto,precio FROM producto WHERE id_producto = ?");
            $sentencia->execute([$id]);
            $producto = $sentencia->fetch(PDO::FETCH_OBJ);

            return $producto;
        }

        function getProductosXcategoria($id){
            $sentencia = $this->db->prepare("SELECT id_producto, nombre_producto, descripcion_producto, precio FROM producto  WHERE id_categoria = ? ");
            $sentencia->execute([$id]);
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
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