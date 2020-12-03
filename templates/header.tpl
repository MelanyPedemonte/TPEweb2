<!DOCTYPE html>
<html lang="en">
<head>
   <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    <title>Pasteleria</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home"><img src="./images/TanRico.jpg" class="d-block w-100" alt="..."></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
               </li>
             {if {$smarty.session.ADMIN} == 1}
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                     <div class="dropdown-menu">
                          <a class="dropdown-item" href="productosAdmin">Ver todos los productos</a>
                          <a class="dropdown-item" href="categoriasAdmin">Ver todas categorias</a>
                          <a class="dropdown-item" href="usuariosAdmin">Administrar Usuarios</a>
                     </div>
               </li>   
             {else}
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                     <div class="dropdown-menu">
                          <a class="dropdown-item" href="productos">Ver todos los productos</a>
                          <a class="dropdown-item" href="categorias">Ver por categorias</a>
                    </div>
               </li>
              {/if}
               <li class="nav-item">
                  <a class="nav-link" href="contacto">Contacto</a>
               </li>
            </ul>
             {if isset($smarty.session.USER_NAME)}
                <span class="navbar-text">
                    <a class="nav-link" href="logout">Logout</a>
                </span>
                {else}
                   <span class="navbar-text">
                       <a class="nav-link" href="login">Login</a>
                   </span>
              {/if}
           </div>
       </nav>
    </header>
