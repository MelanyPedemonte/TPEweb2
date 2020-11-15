{include file="headerUsuario.tpl"}
<div>
<h3>Editar Categoria</h3>
               <form id="formview" action="editarCategoria/{$categoria->id_categoria}" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="{$categoria->nombre_categoria}" required>
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input name="descripcion" type="text" class="form-control" placeholder="Descripcion" value="{$categoria->descripcion_categoria}" required>
                    </div>
                         <button type="submit" class="btn btn-secondary btn-lg btn-block">Editar</button>     
               </form> 
</div>

<a href="javascript: history.go(-1)">Volver</a


{include file="footer.tpl"}

