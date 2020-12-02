{include file="header.tpl"}
<div class="card-group">     
     <table class="table table-bordered">
          <thead>
          
          </thead>
          <tbody>
               {foreach from=$productos item=producto}
               <tr>
                   <div class="card-group">
                        <div class="card" style="width: 18rem;">
                              <img class="img" src="{$producto->imagen}" style="max-width:300px !important; max-height:300px !important;">
                              <div class="card-body">
                                  <h5 class="card-title"><a href="producto/{$producto->id_producto}"> {$producto->nombre_producto}</a></h5>
                                  <p class="card-text">${$producto->precio}</p>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">{$producto->nombre_categoria}</small>
                              </div>
                         </div>
                    </div>
               </tr>    
               {/foreach}
          </tbody>
     </table>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="productos/page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="productos/page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="productos/page=3">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>         
{include file= "footer.tpl"}