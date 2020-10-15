{include file="headerUsuario.tpl"}
<div class="container-fluid">
<h1>PRODUCTOS</h1> 
	<div class="row">
		<div class="col-md-12">
			<div class="row">
                    {foreach from=$productos item=producto}
				<div class="col-md-3">
					<div class="card">
						<div class="card-block">
							<h5 class="card-title">
								<a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a>
							</h5>
							<p class="card-text">{$producto->descripcion_producto}</p>
                                   <p class="card-text">${$producto->precio}</p>
                                   <p class="card-text">{$producto->nombre_categoria}</p>
							<button type="button" class="btn btn-outline-danger"><a href="deleteproducto/{$producto->id_producto}">Borrar</a></button>
                                   <button type="button" class="btn btn-outline-danger"><a href="editP/{$producto->id_producto}">Editar</a></button>
						</div>
					</div>
				</div>
                    {/foreach}
			</div>
		</div>
	</div>
</div>
<!-- <section class="contenedor_table">   
     <table class="table table-bordered">
          <thead>
              <h1 class="titProductos">PRODUCTOS</h1>
          </thead>
          <tbody>
               {foreach from=$productos item=producto}
               <tr>
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                              
                              <div class="card-body">
                                  <h5 class="card-title"><a href="productoAdmin/{$producto->id_producto}"> {$producto->nombre_producto}</a></h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
                                  <p class="card-text">${$producto->precio}</p>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">{$producto->nombre_categoria}</small>
                              </div>
                         </div>
                    </div>
               </tr>      
               {/foreach}
          </tbody>
     </table>   
</div>
</section>  
-->
<!--FORMULARIO PARA INSERTAR PRODUCTO-->
{include file="addProducto.tpl"}

{include file="footer.tpl"}
