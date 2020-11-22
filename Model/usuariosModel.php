<?php

class usuariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
    }

    function getUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute(array());
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
     
    function getUsuario($email){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($email));
        $usuario= $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    function getUsuarioID($id){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($id));
        $usuario= $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    public function addUsuario($user, $mail, $pass, $admin){
        $sentencia = $this->db->prepare("INSERT INTO usuario (usuario, email , pass , admin) VALUES (?,?,?,?)");
        $sentencia->execute(array($user, $mail, $pass, $admin));
    }

    function deleteUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($id));
    }

    function editUsuario($admin, $id){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
        $sentencia->execute(array($admin, $id));
    }
      
}

?>
