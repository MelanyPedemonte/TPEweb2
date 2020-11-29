<?php

class comentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
    }

    function getComentariosPorProducto($id){
        $sentencia = $this->db->prepare("SELECT id_comentario, valoracion, comentario FROM comentario WHERE id_producto=?");
        $sentencia->execute(array($id));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $comentarios;
    }

    function getComentario($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute([$id]);
        $comentario= $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function addComentario($id_producto, $id_usuario, $valoracion, $comentario){
        $sentencia = $this->db->prepare("INSERT INTO comentario (id_producto, id_usuario, valoracion, comentario) VALUE (?,?,?,?)");
        $sentencia->execute(array($id_producto, $id_usuario, $valoracion, $comentario));
       
        return $this->db->lastInsertId();
    }

    function deleteComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE comentario.id_comentario = ?");
        $sentencia->execute(array($id));
    }

}