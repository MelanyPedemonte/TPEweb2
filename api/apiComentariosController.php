<?php

require_once "apiController.php";
require_once "./Model/comentariosModel.php";

class apiComentariosController extends apiController{

    public function __construct() {
        parent::__construct();
        $this->model = new comentariosModel();
    }

    public function getComentarios($params = null) {
        $id = $params[':ID'];
        $comentarios = $this->model->getComentariosPorProducto($id);
        if (!empty($comentarios)){
            $this->view->response($comentarios, 200);
        }
    }

    public function addComentario($params = null){
        $comentario = $this->getData(); 
        
        $comentarioId = $this->model->addComentario($comentario->id_producto, $comentario->id_usuario, $comentario->valoracion, $comentario->comentario);

        if (!empty($comentarioId)){
            $this->view->response($this->model->getComentario($comentarioId), 201);
        }else{
            $this->view->response("Error al insertar comentario", 404);
        }
    }


    public function deleteComentario($params = null){
        $id = $params[':ID'];
        $comentario = $this->model->deleteComentario($id);
        
        if($comentario > 0) {
            $this->view->response("El comentario con el id=$id fue eliminado", 200);
        } else {
            $this->view->response("El comentario con el id=$id no existe", 404);
        }
    }

    
}
