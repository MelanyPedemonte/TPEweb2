"use strict"

let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: []  
    }
});

document.addEventListener('DOMContentLoaded', () => {
    getComentarios();

    document.querySelector('#form-comentario').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();

        addComentario();
    });

});

function getComentarios() {
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => app.conmentarios = comentarios)
        .catch(error => console.log(error));
}

function addComentario() {

    const comentario = {
        id_producto: document.querySelector('input[name="producto"]').value,
        id_usuario: document.querySelector('input[name="usuario"]').value,
        valoracion: document.querySelector('input[name="valoracion"]').checked,
        comentario: document.querySelector('input[name="comentario"]').value
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(task)
    })
        .then(response => response.json())
        .then(comentario => app.comentarios.push(comentario))
        .catch(error => console.log(error));

}
