{include file="header.tpl"}
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
						</div>
					</div>
				</div>
                    {/foreach}
			</div>
		</div>
	</div>
</div>
<!--<div class="card-group">     
     <table class="table table-bordered">
          <thead>
          
          </thead>
          <tbody>
               {foreach from=$productos item=producto}
               <tr>
                   <div class="card-group">
                        <div class="card" style="width: 18rem;">
                              
                              <div class="card-body">
                                  <h5 class="card-title"><a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a></h5>
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
--> 
{include file= "footer.tpl"}