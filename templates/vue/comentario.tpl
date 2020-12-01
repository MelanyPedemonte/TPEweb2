{literal}
    <section id="vue-comentarios">
    <h3> COMENTARIOS </h3>
    <ul>
       <li v-for="comentario in comentarios">
           <span>{{ comentario.comentario }} </span>
           <button class="btn_deleteComentario" @click="deleteComentario(comentario.id_comentario, comentarios)">Borrar</button>
       </li> 
    </ul>
    </section>
{/literal}