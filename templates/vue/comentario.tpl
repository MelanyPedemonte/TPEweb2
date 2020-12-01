{literal}
    <section id="vue-comentarios">
    <h3> COMENTARIOS </h3>
    <ul>
       <li v-for="comentario in comentarios">
           <span>{{ comentario.comentario }} </span>
           <!-- <button id="btn-borrar" value="{{ comment.id }}">Borrar</button> -->
       </li> 
    </ul>
    </section>
{/literal}