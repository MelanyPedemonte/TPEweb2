{include file="header.tpl"}

<div class="card-group">        
    <table class="table table-bordered">
        <thead>
            <h1>{$categoria->nombre_categoria}</h1>
        </thead>
        <tbody>
            {foreach from=$productos item=producto}
               <tr>
                    <div class="card" style="width: 18rem;">
                         <div class="card-body">
                              <h5 class="card-title"><a href="producto/{$producto.id_producto}"> {$producto.nombre_producto}</a></h5>
                              <p class="card-text">${$producto.precio}</p>
                         </div>
                    </div>
               </tr>      
            {/foreach}
        </tbody>
    </table>  
</div>


{include file="footer.tpl"}

