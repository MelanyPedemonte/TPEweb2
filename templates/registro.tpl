{include file="header.tpl"}

<div class="registro">
     <div>
        {if empty($message)}
            {$message}
        {else}
            <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
</div>

<div class="fom-login">
        <div class="area-form">
              <form action="newUser" method="POST">
                    <h3>¡Regístrate Ahora!</h3>

              
                      <div class="form-group">
                          <label>Usuario: </label>
                          <input type="text" name="user" class="form-control" placeholder="Nombre de usuario">
                      </div>

                      <div class="form-group">
                          <label>Email: </label>
                          <input type="text" name="email" class="form-control" placeholder="Email">
                      </div>
              
                      <div class="form-group">
                          <label>Contraseña: </label>
                          <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                      </div>
              
                      <button type="submit" class="btn btn-secondary btn-lg btn-block">Registrarse</button>
                      
                      <a href="login" class="btn btn-secondary btn-lg btn-block">Iniciar sesión</a>

                  </form>
         </div>
</div>

{include file="footer.tpl"}

