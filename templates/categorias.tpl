{include file="header.tpl"}
  <div class="container">

          <ul class="list-group">

              {foreach from=$categorias item=categoria}
                    <li class="list-group-item ">{$categoria->nombre_categoria}<small class="text-muted">  -{$categoria->descripcion_categoria}</small></li>
              {/foreach}
          
          </ul>
          </div>

{include file= "footer.tpl"}

