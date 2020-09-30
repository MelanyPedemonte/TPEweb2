{include file="header.tpl"}

     <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{$producto->nombre_producto}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
            <p class="card-text"> ${$producto->precio}</p>
            <button type="button" class="btn btn-outline-danger"><a href="deleteproducto/{$producto->id_producto}">Borrar</a></button>
        </div>
    </div>
    <h3>Editar Producto</h3>
               <form id="formview" action="editarProducto/{$producto->id_producto}" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                         <label> Precion: </label>
                         <input value=" " name="precio" type="text" class="form-control" placeholder="Precio">
                    </div>
                    <div class="form-group">
                         <label for="inputState">Seleccione Categoria:</label>
                         <select  class="form-control" name="categoria">
                         <option> Seleccione  </option>
                              {foreach from=$categorias item=categoria}
                              <option value="{$categoria->id_categoria} ">{$categoria->nombre_categoria}</option>
                              {/foreach}
                         </select>
                    </div> 
                    
                         <button type="submit" class="btn btn-outline-success">Editar</button>     
               </form>

    <a href="productos" class="btn btn-light btn-sm">Volver</a>
 

{include file= "footer.tpl"}

