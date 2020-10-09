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

<section class="contenedor_table">
    <table class="table table-bordered">
        <thead>
          <h1>CATEGORIAS</h1>
        </thead>
        <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                 <td> <a href="categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</a></td> 
                 <td>{$categoria->descripcion_categoria}</td>
                 <td><button type="button" class="btn btn-outline-danger"><a href="deletecategoria/{$categoria->id_categoria}">Borrar</a></button></td>
                 <td><button type="button" class="btn btn-outline-danger"><a href="editC/{$categoria->id_categoria}">Editar</a></button></td>
            </tr>      
          {/foreach}
          </tbody>
          </table> 
</section> 
<!--FORMULARIO PARA INSERTAR CATEGORIA-->
{include file="addCategoria.tpl"}


{include file="footer.tpl"}