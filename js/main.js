"use strict"

function getComentarios(){
    fetch('api/comentarios')
    .then(response=>response.json())
    .then(comentarios => console.log(comentarios))
    .catch(error => console.log(error));
}

getComentarios();