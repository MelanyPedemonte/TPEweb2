{include file="header.tpl"}
<div class="card-group">     
     <table class="table table-bordered">
          <thead>
          
          </thead>
          <tbody>
               {foreach from=$productos item=producto}
               <tr>
                    <div class="card" style="width: 18rem;">
                         <div class="card-body">
                              <h5 class="card-title"><a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a></h5>
                              <p class="card-text">{$producto->descripcion_producto}</p>
                         </div>
                    </div>
               </tr>      
               {/foreach}
          </tbody>
     </table>   
</div>         
          <h3>Agregar Producto</h3>
               <form id="formview" action="addProducto" method="post">
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
                              <option value="{$categoria->id_categoria} ">{$categoria->nombre}</option>
                              {/foreach}
                         </select>
                    </div> 
                    
                         <button type="button" class="btn btn-outline-success"><a href="agregar">Agregar</button>     
               </form>
{include file= "footer.tpl"}