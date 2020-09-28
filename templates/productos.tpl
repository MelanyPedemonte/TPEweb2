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
                <td>{$producto->nombre_producto}</td>
                <td>{$producto->descripcion_producto}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->id_categoria}</td>
            </tr>      
          {/foreach}
          </tbody>
          </table>                                
        </div>

  <div class="container">

          <ul class="list-group">

              {foreach from=$productos item=producto}
                    <li class="list-group-item ">{$producto->nombre_producto}</li>
              {/foreach}
          
          </ul>
          </div>

{include file= "footer.tpl"}