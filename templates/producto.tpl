{include file="header.tpl"}

    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card">
      

                <div class="card-body">
                    <h5 class="card-title">{$producto->nombre_producto}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
                    <p class="card-text"> ${$producto->precio}</p>
                    <p class="card-text">{$categoria->nombre_categoria}</p>
                </div>
            </div>
        </div>
    </div>
    
    <a href="javascript: history.go(-1)">Volver</a
 

{include file= "footer.tpl"}
