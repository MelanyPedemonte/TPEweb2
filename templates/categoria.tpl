{include file="header.tpl"}
    
    <div class="card">
          <div class="card-body">
          <h3>Categoria</h3>
            <h5 class="card-title">{$categoria->nombre_categoria}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{$producto->descripcion_categoria}</h6>
        </div>
    </div>
    {include file="productos.tpl"}

{include file= "footer.tpl"}

