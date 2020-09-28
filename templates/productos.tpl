{include file="header.tpl"}
  <div class="container">

          <ul class="list-group">

              {foreach from=$productos item=producto}
                    <li class="list-group-item ">{$producto->nombre_producto}</li>
              {/foreach}
          
          </ul>
          </div>

{include file= "footer.tpl"}