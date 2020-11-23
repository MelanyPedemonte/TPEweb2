{include file="header.tpl"}
  <div class="container">

          <table class="table table-bordered">
        <thead>
          
        </thead>
        <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                 <div class="card w-75">
                     
                     <div class="card-body">
                         <h5 class="card-title"><a href="categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</a></h5>
                         <p class="card-text">{$categoria->descripcion_categoria}.</p>
                     </div>
                 </div>
            </tr>      
          {/foreach}
          </tbody>
          </table>        

{include file= "footer.tpl"}



