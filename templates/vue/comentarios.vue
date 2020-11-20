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

    <h5>Agregar comentario</h5>
        <form  method="POST" id="form-comentario" action="addComentario">
            <div class="form-group">
                <label> valoracion: </label>
                <input value=" " name="valoracion" type="text" class="form-control" placeholder="Valoracion">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">comentario:</label>
              <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Agregar comentario</button>
            </div>
        </form>
    </div>

</div>
{/literal}
