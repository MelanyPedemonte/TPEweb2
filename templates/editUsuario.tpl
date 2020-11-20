{include file="headerUsuario.tpl"}
<h1>Editar usuario</h1>
<h2>Usuario: {$usuario->usuario}</h2>
<h2>email: {$usuario->email}</h2>
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
                {if $user->admin == 1}
                    0
                {else}
                    1
                {/if}">
                {if $user->admin == 1}
                    No
                {else}
                    Si
                {/if} 
            </option>       
        </select>
    </p>
    <button class="btn" type="submit">Editar</button>
</form>
{include file="footer.tpl"}