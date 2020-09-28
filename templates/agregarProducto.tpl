{include file="header.tpl"}
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
                              <option value="{$categoria.id_categoria} ">{$categoria.nombre}</option>
                            {/foreach}
                         </select>
                    </div> 
                    
                      <button type="submit" class="btn btn-outline-secondary">Agregar</button>
                    </div>
              </form>