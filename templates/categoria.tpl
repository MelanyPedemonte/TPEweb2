{include file="header.tpl"}
<h5 class="titCategoria">{$categoria->nombre_categoria}</h5>
<div class="card-group">

    <table class="table table-bordered">
        <thead>
            
        </thead>
        <tbody>
            {foreach from=$productos item=producto}
            
               <tr> 
                    <div class="card-group">
                        <div class="card" style="width: 18rem;">
                              <img class="img" src="{$producto.imagen}" style="max-width:300px !important; max-height:300px !important;">
                              <div class="card-body">
                                  <h5 class="card-title"><a href="producto/{$producto.id_producto}"> {$producto.nombre_producto}</a></h5>
                                  <p class="card-text">${$producto.precio}</p>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted"></small>
                              </div>
                        </div>
                    </div>
               </tr>   
            {/foreach}
        </tbody>
    </table>  
</div>

<a href="javascript: history.go(-1)">Volver</a


{include file="footer.tpl"}


