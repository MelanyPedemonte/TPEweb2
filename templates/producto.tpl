{include file="header.tpl"}

     <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{$producto->nombre_producto}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_producto}</h6>
            <p class="card-text"> ${$producto->precio}</p>
            <p class="card-text">{$categoria->nombre_categoria}</p>
        </div>
    </div>
    

    <a href="productos" class="btn btn-light btn-sm">Volver</a>
 

{include file= "footer.tpl"}

