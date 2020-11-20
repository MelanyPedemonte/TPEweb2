<?php
require_once " ./api/apiView.php";
require_once " ./api/apiController.php";
require_once "./model/comentariosModel.php";

class apiComentariosController extends ApiController{

    public function  getComentarios($params = null) {
        $id = $params[':ID'];
        
        $comentarios = $this->model->getComentarios($id);
        $this->view->response($comentarios, 200);
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

    public function addComentario($params = null){
        $comment = $this->getData(); // la obtengo del body
        
        // inserta la comment
        $commentId = $this->model->addComentario($comment->id_producto, $comment->id_usuario, $comment->valoracion, $comment->comentario);

        if (!empty($commentId))
            $this->view->response($this->model->getComentario($commentId), 200);
        else
            $this->view->response("Error al insertar comentario", 500);;
    }

}
