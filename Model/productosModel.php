<?php

    class productosModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
        }

        function getProductos(){
            $sentencia = $this->db->prepare("SELECT producto.id_producto,producto.nombre_producto,producto.descripcion_producto,producto.precio, producto.id_categoria as categoria_id, categoria.nombre_categoria as nombre_categoria FROM producto inner JOIN categoria ON producto.id_categoria = categoria.id_categoria");
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }

        function getProducto($id){
            $sentencia = $this->db->prepare("SELECT id_producto,nombre_producto,descripcion_producto,precio, id_categoria FROM producto WHERE id_producto = ?");
            $sentencia->execute([$id]);
            $producto = $sentencia->fetch(PDO::FETCH_OBJ);

            return $producto;
        }


        function productosCategoria($id){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria = ?");
            $sentencia->execute([$id]);
            $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $productos;
        }

        function agregarProducto($nombre_producto,$descripcion_producto,$precio, $id_categoria){
            $sentencia=$this->db->prepare("INSERT INTO producto(nombre_producto, descripcion_producto, precio, id_categoria) 
            VALUES(?,?,?,?)");
            $sentencia->execute(array($nombre_producto,$descripcion_producto,$precio,$id_categoria));
        }

        function eliminarProducto($id){
            $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto = ?");
            $sentencia->execute(array($id));
        }

        function editarProducto($id,$nombre_producto,$descripcion_producto,$precio,$id_categoria){
            $sentencia = $this->db->prepare("UPDATE producto SET nombre_producto=?, descripcion_producto=?, precio=?, id_categoria=? WHERE id_producto=?");
            $sentencia->execute(array($nombre_producto,$descripcion_producto,$precio, $id_categoria,$id));
        }
        


    }

?>