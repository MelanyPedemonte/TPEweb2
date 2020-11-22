{include file="header.tpl"}
<h1>Editar usuario</h1>
<h6>Usuario: {$usuario->usuario}</h6>
<h6>email: {$usuario->email}</h6>
<h6>Desea otorgar permisos de administrador a este usuario?</h6>
<form action="editUsuario/{$usuario->id_usuario}" method="post">
    <p>Seleccione: 
        <select name="selectAdmin">
            <option selected="{$usuario->admin}">
                {if $usuario->admin == 0}
                    No
                {else}
                    Si
                {/if}  
            </option>   
            <option value="
                {if $usuario->admin == 1}
                    0
                {else}
                    1
                {/if}">
                {if $usuario->admin == 1}
                    No
                {else}
                    Si
                {/if} 
            </option>       
        </select>
    </p>
    <button type="submit" class="btn btn-secondary btn-lg btn-block">Editar</button>     
</form>

<a href="javascript: history.go(-1)">Volver</a

{include file="footer.tpl"}