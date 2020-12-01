{literal}
    <section id="vue-comentarios">
    <h3> COMENTARIOS </h3>
    <ul>
       <li v-for="comentario in comentarios">
           <span>{{ comentario.comentario }} </span>          
       </li> 
    </ul>
    </section>
{/literal}

{if {$smarty.session.ADMIN} == 1}
    <button class="btn_deleteComentario" @click="deleteComentario(comentario.id_comentario, comentarios)">Borrar</button>
{/if}