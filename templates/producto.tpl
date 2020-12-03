{include file="header.tpl"}
                <div class=container-detalle id= "detalleP">
                        <div class="card" style="width: 18rem;">
                              <img class="img" src="{$producto->imagen}" style="max-width:300px !important; max-height:300px !important;">
                              <div class="card-body">
                                  <h5 class="card-title">{$producto->nombre_producto}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
                                  <p class="card-text"> $ {$producto->precio}</p>
                              </div>
                              <div class="card-footer">
                                   <small class="text-muted">{$categoria->nombre_categoria}</small>
                              </div>
                        </div>
                </div>
                
                    {include file="vue/comentario.tpl"}
                      {if isset($smarty.session.USER_NAME)}
                          <h3 class="textAdd">Agregar Comentario</h3>
                          <form id="form-comentarios" resource="comentario" method="post">
                            <div class="form-group">
                                <label> Comentario: </label>
                                <input class="form-control" type="text" name="comentario" placeholder="Comentario" required>
                            </div>
                            <div class="form-group">
                                <label> Valoracion: </label>
                                <input class="form-control" type="number" min="0" max="5" name="valoracion" placeholder="Valoracion" required>
                            </div>
                            <input type="hidden" name="producto" id="idProducto" value="{$producto->id_producto}">
                            <input type="hidden" name="user" value="{$smarty.session.ID_USER}">
                            <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Comentar">
                          </form>
                      {else}
                          <form id="form-comentarios" resource="comments" method="post">
                           <input type="hidden" name="producto" id="idProducto" value="{$producto->id_producto}">
                          </form>
                      {/if}

                    
    <a href="javascript: history.go(-1)">Volver</a>

<script src="js/main.js"></script>
{include file= "footer.tpl"}
