<?php

class usuariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
    }

    function getUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute(array());
        $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuarios;
    }
     
    function getUsuario($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($user));
        $usuario= $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    public function addUsuario($user, $mail, $pass){
        $sentencia = $this->db->prepare("INSERT INTO usuario (usuario, email , pass) VALUES (?,?,?)");
        $sentencia->execute(array($user, $mail, $pass));

        return $this->db->lastInsertId();
    }

    function deleteUsuario($id){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id=?");
        $sentencia->execute(array($id));
    }

    function editUsuario($id, $admin){
        $sentencia = $this->db->prepare("UPDATE usuario SET admin=? WHERE id=?");
        $sentencia->execute(array($id, $admin));
    }
      
}

?>
