<?php

class usuariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=bbdd_pasteleria;charset=utf8', 'root', '');
    }
     
    function getUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function agregarUsuario($user, $mail, $pass){
        $sentencia = $this->db->prepare("INSERT INTO usuario (usuario, email , pass) VALUES (?,?,?)");
        $sentencia->execute(array($user, $mail, $pass));

        return $this->db->lastInsertId();
    }
      
}

?>
