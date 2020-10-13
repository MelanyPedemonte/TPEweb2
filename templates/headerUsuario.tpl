<!DOCTYPE html>
<html lang="en">
<head>
   <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/22bea3a94b.js" crossorigin="anonymous"></script>
    <title>Pasteleria</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="login">Tan Rico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="login">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorias</a>
                     <div class="dropdown-menu">
                          <a class="dropdown-item" href="productosAdmin">Todos los productos</a>
                          <a class="dropdown-item" href="categoriasAdmin">Todas las categorias</a>
                     </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactoUsuario">Contacto</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a class="nav-link" href="logout">Logout</a>
          </span>
        </div>
    </nav>
