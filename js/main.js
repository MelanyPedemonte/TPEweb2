"use strict"

let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: [],
    },

})

function getComentarios(producto) {
    fetch("api/comentarios/" + producto)
    .then(response => response.json())
    .then(comentarios => app.comentarios = comentarios)
    .catch(error => console.log(error));
}

let producto = document.querySelector("#idProducto").value;
getComentarios(producto);

document.querySelector("#form-comentarios").addEventListener('submit', addComentario);

function addComentario(e) {
    e.preventDefault();
    
    let data = {
        id_producto:  document.querySelector("input[name=producto]").value,
        id_usuario:  document.querySelector("input[name=user]").value,
        valoracion:  document.querySelector("input[name=valoracion]").value,
        comentario:  document.querySelector("input[name=comentario]").value,
    }
    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => {
        getComentarios(data.id_producto);
     })
     .catch(error => console.log(error));
}
