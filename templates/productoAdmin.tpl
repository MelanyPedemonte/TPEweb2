{include file="headerAdmin.tpl"}

                        <div class="card" style="width: 18rem;">
                              
                              <div class="card-body">
                                  <h5 class="card-title">{$producto->nombre_producto}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
                                  <p class="card-text"> $ {$producto->precio}</p>
                                  <button type="button" class="btn btn-secondary"><a href="deleteproducto/{$producto->id_producto}">Borrar</a></button>
                                  <button type="button" class="btn btn-secondary"><a href="editP/{$producto->id_producto}">Editar</a></button>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">{$categoria->nombre_categoria}</small>
                              </div>
                        </div>
        
    {include file="vue/comentario.tpl"}
    <a href="javascript: history.go(-1)">Volver</a
{include file= "footer.tpl"}