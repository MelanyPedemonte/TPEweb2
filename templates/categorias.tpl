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
          <h3>Agregar Categoria</h3>
               <form id="formview" action="addCategoria" method="post">
                    <div class="form-group">
                         <label> Nombre: </label>
                         <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                         <label> Descripcion: </label>
                         <input value=" " name="descripcion" type="text" class="form-control" placeholder="Descripcion">
                    </div>
                         <button type="submit" class="btn btn-outline-success">Agregar</button>     
               </form>         

{include file= "footer.tpl"}

