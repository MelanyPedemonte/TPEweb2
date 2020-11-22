{literal}
<div id="vue-comentarios">
    
    <h1>Comentarios: </h1>

    <ul id="comentarios-list" class="list-group">
        <li 
            v-for="comentario in comentarios"
            :data-id-comentario="comentario.id" 
            class="list-group-item"> 
            
            <span>{{comentario.valoracion}} </span>
            <span>{{comentario.comentario}} </span>
         </li>
    </ul>


</div>
{/literal}

            {if $admin == 1}
                <button class="btn">Borrar</i></button>
            {/if}
            
