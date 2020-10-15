<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			 <a id="modal-978985" href="#modal-container-978985" role="button" class="btn btn-info btn-md btn-block" data-toggle="modal">Agregar Producto</a>
			
			<div class="modal fade" id="modal-container-978985" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Agregar Producto</h3> 
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
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
                         <label> Precio: </label>
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
                    
                         <button type="submit" class="btn btn-outline-success">Agregar</button>     
               </form>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
          <!--   <form id="formview" action="addProducto" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                    <div class="form-group">
                         <label> Precio: </label>
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
                    
                         <button type="submit" class="btn btn-outline-success">Agregar</button>     
               </form>
               -->