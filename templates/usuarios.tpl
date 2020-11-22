{include file="header.tpl"}
<section class="contenedor_table">
    <table class="table table-bordered">
        <thead>
          <h1>USUARIOS</h1>
        </thead>
        <tbody>
        {foreach from=$usuarios item=usuario}
            <tr>
                 <td> {$usuario->usuario}</td> 
                 <td><button type="button" class="btn btn-secondary"><a href="deleteUsuario/{$usuario->id_usuario}">Borrar</a></button></td>
                 <td><button type="button" class="btn btn-secondary"><a href="editU/{$usuario->id_usuario}">Editar</a></button></td>
            </tr>      
          {/foreach}
          </tbody>
          </table> 
</section> 

{include file="footer.tpl"}
