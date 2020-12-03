{include file="header.tpl"}
<section class="contenedor_table">
    <table class="table table-bordered">
        <thead>
  
        </thead>
        <tbody>
        {foreach from=$categorias item=categoria}
            <tr>
                 <td> {$categoria->nombre_categoria}</td> 
                 <td>{$categoria->descripcion_categoria}</td>
                 <td><button type="button" class="btn btn-secondary" onclick="alert('Al eliminar esta categoria se eliminaran todos los productos que contiene!')"><a href="deletecategoria/{$categoria->id_categoria}">Borrar</a></button></td>
                 <td><button type="button" class="btn btn-secondary"><a href="editC/{$categoria->id_categoria}">Editar</a></button></td>
            </tr>      
          {/foreach}
          </tbody>
          </table> 
</section> 
<!--FORMULARIO PARA INSERTAR CATEGORIA-->
{include file="addCategoria.tpl"}


{include file="footer.tpl"}