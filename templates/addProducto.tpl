<h3 class="textAdd">Agregar Producto</h3>
               <form id="formview" action="addProducto" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input  type="text"  name="nombre"class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input  type="text"  name="descripcion" class="form-control" placeholder="Descripcion" required>
                    </div>
                    <div class="form-group">
                         <label> Precio: </label>
                         <input  type="text" name="precio" class="form-control" placeholder="Precio" required>
                    </div>
                     <div class="form-group">
                        <input type="file" name="input_file" id="imageToUpload">
                    </div>
                    <div class="form-group">
                         <label for="inputState">Seleccione Categoria:</label>
                         <select   class="form-control" name="categoria">
                         <option> Seleccione  </option>
                              {foreach from=$categorias item=categoria}
                              <option  value="{$categoria->id_categoria} ">{$categoria->nombre_categoria}</option>
                              {/foreach}
                         </select>
                    </div> 
                    
                         <button type="submit" class="btn btn-secondary btn-lg btn-block">Agregar</button>     
               </form>