 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			 <a id="modal-978985" href="#modal-container-978985" role="button" class="btn btn-info btn-md btn-block" data-toggle="modal">Agregar Categoria</a>
			
			<div class="modal fade" id="modal-container-978985" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Agregar Categoria</h3> 
							     <button type="button" class="close" data-dismiss="modal">
								     <span aria-hidden="true">×</span>
							     </button>
						</div>
						<div class="modal-body">
							<form id="formview" action="addCategoria" method="post">
                                        <div class="form-group">
                                             <label> Nombre: </label>
                                             <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                             <label> Descripcion: </label>
                                             <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
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
<!--<div>
          <h3>Agregar Categoria</h3>
               <form id="formview" action="addCategoria" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                         <button type="submit" class="btn btn-secondary btn-lg btn-block">Agregar</button>     
               </form>    
</div>
-->