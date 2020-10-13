{include file="headerUsuario.tpl"}
<section class="contenedor_table">   
     <table class="table table-bordered">
          <thead>
              <h1>PRODUCTOS</h1>
          </thead>
          <tbody>
               {foreach from=$productos item=producto}
               <tr>
                    <div class="card" style="width: 18rem;">
                         <div class="card-body">
                              <h5 class="card-title"><a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a></h5>
                              <p class="card-text">{$producto->descripcion_producto}</p>
                              <p class="card-text">${$producto->precio}</p>
                              <p class="card-text">{$producto->nombre_categoria}</p>
                              <button type="button" class="btn btn-outline-danger"><a href="deleteproducto/{$producto->id_producto}">Borrar</a></button>
                              <button type="button" class="btn btn-outline-danger"><a href="editP/{$producto->id_producto}">Editar</a></button>
                         </div>
                    </div>
               </tr>      
               {/foreach}
          </tbody>
     </table>   
</div>
</section>  
<!--FORMULARIO PARA INSERTAR PRODUCTO-->
{include file="addProducto.tpl"}

{include file="footer.tpl"}