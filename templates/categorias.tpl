{include file="header.tpl"}
  <div class="container">

          <table class="table table-bordered">
        <thead>
          
        </thead>
        <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                 <td> <a href="categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</a></td> 
                 <td>{$categoria->descripcion_categoria}</td>
            </tr>      
          {/foreach}
          </tbody>
          </table>        

{include file= "footer.tpl"}

