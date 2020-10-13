{include file="headerUsuario.tpl"}
<section class="contenedor_table">
    <table class="table table-bordered">
        <thead>
          <h1>CATEGORIAS</h1>
        </thead>
        <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                 <td> <a href="categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</a></td> 
                 <td>{$categoria->descripcion_categoria}</td>
                 <td><button type="button" class="btn btn-outline-danger"><a href="deletecategoria/{$categoria->id_categoria}">Borrar</a></button></td>
                 <td><button type="button" class="btn btn-outline-danger"><a href="editC/{$categoria->id_categoria}">Editar</a></button></td>
            </tr>      
          {/foreach}
          </tbody>
          </table> 
</section> 
<!--FORMULARIO PARA INSERTAR CATEGORIA-->
{include file="addCategoria.tpl"}


{include file="footer.tpl"}