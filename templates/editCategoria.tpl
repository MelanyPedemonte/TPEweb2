{include file="headerUsuario.tpl"}
<div>
<h3>Editar Categoria</h3>
               <form id="formview" action="editarCategoria/{$categoria->id_categoria}" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                         <button type="submit" class="btn btn-outline-success">Editar</button>     
               </form> 
</div>
{include file="footer.tpl"}

