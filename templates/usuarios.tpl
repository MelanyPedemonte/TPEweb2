<section class="contenedor_table">   
     <table class="table table-bordered">
          <thead>
              <h1 class="tituloUsuarios">Usuarios</h1>
          </thead>
          <tbody>
               {foreach from=$usuarios item=usuario}
               <tr>
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                              
                              <div class="card-body">
                                  <h5 class="card-title"><a href=""> {$usuario->usuario}</a></h5>
                                  <button type="button" class="btn btn-secondary"><a href="deleteUsuario/{$usuario->id_usuario}">Borrar</a></button>
                                  <button type="button" class="btn btn-secondary"><a href="editU/{$usuario->id_usuario}">Editar</a></button>
                              </div>
                         </div>
                    </div>
               </tr>      
               {/foreach}
          </tbody>
     </table>   
</div>
</section>  

