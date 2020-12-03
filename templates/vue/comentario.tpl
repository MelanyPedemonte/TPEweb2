        <section id="vue-comentarios">
        <h3> COMENTARIOS SOBRE EL PRODUCTO </h3>
        <table id="tbl_comentarios" class="table table-bordered">
            <thead>
                <tr>
                <th >Comentario</th>
                <th >Valoracion</th>
                <th ></th>
                </tr>
            </thead>
            <tbody v-for="comentario in comentarios">
                <tr>
            {literal}
                    
                <td ><span>{{ comentario.comentario }} </span></td>
                <td ><span>{{ comentario.valoracion }} </span></td>
                <td ><span>

            {/literal}
                    {if {$smarty.session.ADMIN} == 1}
                  <button class="btn btn-secondary" @click="deleteComentario(comentario.id_comentario, comentarios)">Borrar</button>
               {/if}</span>
                </td>
                </tr>
            </tbody>
        </table>
       </section>

