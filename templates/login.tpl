{include file="header.tpl"}

<div class="registro">
     <div>
        {if empty($message)}
            {$message}
        {else}
            <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
    </div>
    <h1>Iniciar Sesión</h1>
    <h6>Porfavor ingrese su email y contraseña!</h6>
       <form action="verifyUser" method="post">
                    <div class="form-group">
                        <label for="user">Email: </label>
                        <input class="form-control" id="user" name="input_user">
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password: </label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>
                    
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Ingresar</button>
        </form>

        <h6>Aun no estas registrado?</h6>
        <a href="registro" class="btn btn-secondary btn-lg btn-block">Registrarse</a>


        <a class="volver" href="home">Volver</a>

</div>

 

{include file="footer.tpl"}
