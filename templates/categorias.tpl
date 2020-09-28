{include file="header.tpl"}
  <div class="container">

          <ul class="list-group">

              {foreach from=$categorias item=categoria}
                    <li class="list-group-item ">{$categoria->nombre_categoria}</li>
              {/foreach}
          
          </ul>
          </div>

{include file= "footer.tpl"}