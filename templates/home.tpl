{include file= "header.tpl"}
    <div class="contenedor">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/baner1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/baner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/baner3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="fom-login">
        <div class="area-form">
              <form action="newUser" method="POST">
                    <h1>Registrate Ahora!</h1>
                    <h2>Hace tus compras rapido y facil desde tu hogar</h2>
              
                      <div class="form-group">
                          <label>Usuario</label>
                          <input type="text" name="user" class="form-control" placeholder="Usuario">
                      </div>

                      <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Usuario">
                      </div>
              
                      <div class="form-group">
                          <label>Contraseña</label>
                          <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                      </div>
              
                      <button type="submit" class="btn btn-secondary">Registrarse</button>
                  </form>
        </div>
    </div>
    
  {include file= "footer.tpl"}