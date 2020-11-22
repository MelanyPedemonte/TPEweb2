{include file="header.tpl"}
<div>
<h3>Editar Producto</h3>
               <form id="formview" action="editarProducto/{$producto->id_producto}" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="{$producto->nombre_producto}" required>
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input name="descripcion" type="text" class="form-control" placeholder="Descripcion" value="{$producto->descripcion_producto}" required>
                    </div>
                    <div class="form-group">
                         <label> Precio: </label>
                         <input name="precio" type="text" class="form-control" placeholder="Precio" value="{$producto->precio}" required>
                    </div>
                    <div class="form-group">
                         <label for="inputState">Seleccione Categoria:</label>
                         <select  class="form-control" name="categoria">
                         <option> Seleccione  </option>
                             {foreach from=$categorias item=categoria}
                                 {if $categoria->id_categoria == $producto->id_categoria}
                                     <option selected="{$categoria->id_categoria}" value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                                 {else}
                                     <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                                 {/if}
                             {/foreach}
                         </select>
                    </div> 
                    
                         <button type="submit" class="btn btn-secondary btn-lg btn-block">Editar</button>     
               </form>
</div>

<a href="javascript: history.go(-1)">Volver</a


{include file="footer.tpl"}