{include file="header.tpl"}
  <div class="datos-bbdd">
 

    
            <table class="table table-bordered">
            <thead>
                <h1>{$categoria->nombre_categoria}</h1>
            </thead>
            <tbody>
                <tr>
                    {foreach from=$productos item=item}
                        <div class="card" style="width: 18rem;">
                           <div class="card-body">
                               <h5 class="card-title"><a href="producto/{$item.id_producto}">{$item.nombre_producto}</a></h5>
                               <p class="card-text">{$item.descripcion_producto}</p>
                           </div>
                        </div>
                </tr>
                {/foreach}
            </tbody>
            </table> 
            <h3>Editar Categoria</h3>
               <form id="formview" action="editarCategoria/{$categoria->id_categoria}" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                         <button type="submit" class="btn btn-outline-success">Editar</button>     
               </form> 

       
</div>


{include file="footer.tpl"}

