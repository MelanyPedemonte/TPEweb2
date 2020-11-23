{include file="header.tpl"}

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
                        
                        {if isset($usuario)}
                            {include file="comment.tpl"}
                        {/if}

                        <div>
                           {include file="vue/comentarios.vue"}
                        </div>
        
    
    <a href="javascript: history.go(-1)">Volver</a>


<script src="js/main.js"></script>
{include file= "footer.tpl"}
