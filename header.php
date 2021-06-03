<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pesistas</title>

    <!--boostrap 4.0 css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--css stilo propio-->
    <link rel="stylesheet" href="css/style.css">

    <!-- link css icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!--Imagen favicon-->
    <link rel="icon" href="img/barrapesas.png" type="images">

</head>

<body>


    <div class="container center">
        <!--Div contenedor principal de todo-->

        <!--Logotipo-->
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 thumb ">
                <!--usa las 12 columnas-->
                <a href="index.php">
                    <img class="rounded mx-auto d-block h-35" id="logo" src="img/barrapesas.png">
                    <!--la classe img hace que se mueva al centro-->
                </a>

            </div>

        </div>

        <!--navegado-->
        <div class="navegador">
            <ul class="nav nav-pills nav-fill" id="nav">
                <li class="nav-item">
                    <a class="nav-link btn-danger" href="#">Barras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-danger" href="#">Pesas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-danger" href="#">Calzado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-danger" href="#">Suplementacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-danger" href="#">Mayones</a>
                </li>
               
                <?php
                    session_start();
                   
                    if ($_SESSION['tipoUsuario']=='admin') {
             echo'  <li class="nav-item">
             <a class="nav-link btn-blue" href="http://localhost/(1)lospesistas/zonaAdmin/AdministrarCategoria.php">Administrar Categoria</a>
         </li> <li class="nav-item">
                    <a class="nav-link btn-blue" href="http://localhost/(1)lospesistas/zonaAdmin/AdministrarProductos.php">Administrar Productos</a>
                </li>';
                    }
                ?>
                <li class="nav-item icono">
                    <a href="http://localhost/(1)lospesistas/Carrito/carrito.php"><i class="fas fa-shopping-cart fa-1x fa-lg icono2" id="icono2"></i></a>
                    <?php
                   // session_start();
                   
                    if (isset($_SESSION['idUsuario'])) {
                        //Do stuff
                        echo ' 
                                <a href="http://localhost/(1)lospesistas/PHP/Services/cerrarSesion.php"  > <i class="fas fa-sign-out-alt" id="icono3"></i></a>
                                </li>';
                    } else {
                        echo ' 
               
                    <a href="http://localhost/(1)lospesistas/login/iniciarSesion.php"> <i class="far fa-user fa-1x fa-lg icono2" id="icono3"></i></a>
                </li>';
                    }


                    ?>
            </ul>

        </div>

        <!--Carusel-->

        <!--fin del container-->