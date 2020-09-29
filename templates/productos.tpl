{include file="header.tpl"}
<div class="card-group">
                    
          
      <table class="table table-bordered">
        <thead>
          <tr class="table-active">
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$productos item=producto}
            <tr>
                <td><a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a></td>
                <td>{$producto->descripcion_producto}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->id_categoria}</td>
            </tr>      
          {/foreach}
          </tbody>
          </table>                                
        </div>

{include file= "footer.tpl"}