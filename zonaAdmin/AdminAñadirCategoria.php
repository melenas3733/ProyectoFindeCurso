<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pesistas</title>

    <!--boostrap 4.0 css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--css stilo propio-->
    <link rel="stylesheet" href="../css/styleCarrito.css">

    <!-- link css icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!--Imagen favicon-->
    <link rel="icon" href="../img/barrapesas.png" type="images">


</head>
<body>


    <div class="container center"><!--Div contenedor principal de todo-->

        <!--Logotipo-->
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 thumb "> <!--usa las 12 columnas-->
                <img class="rounded mx-auto d-block h-35" id="logo"  src="../img/barrapesas.png" > <!--la classe img hace que se mueva al centro-->
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

                <li class="nav-item">
                    <a class="nav-link btn-blue" href="./AdministrarProductos.php">Administrar Productos</a>
                </li>

                <li class="nav-item icono">
                    <i class="fas fa-shopping-cart fa-1x fa-lg icono2" id="icono2"></i>
                    <i class="far fa-user fa-1x fa-lg icono2" id="icono3"></i>
                </li>
            </ul>

        </div>

        <!--Contenedor-->
        <div >

            <section>

                
                    <article class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col align-self-start">
                                <label>Nombre de Categoria:</label>
                                <input type="text" class="form-control" id="producto">
 
                            </div>
                            <div class="col align-self-center" style="margin-bottom: 5%;">
                                <label>Categoria:</label>
                                <select name="menu">
                                    <option>Selecciona...</option>
                                    <option>Barras</option>
                                    <option>Pesas</option>
                                    <option>Calzado</option>
                                    <option>Suplementacion</option>
                                    <option>Mayones</option>
                                  </select>

                            </div>

                            <div class="col align-self-end" style="margin-bottom: 7%;">
                                <label for="casilla1">Super Categoria</label>
                                <input type="checkbox" name="casilla" id="casilla1">
                                
             
                            </div>
                        </div>
                        <div class="row">
                            <div style="margin-left: 50%;">
  
                                <button type="button" class="btn btn-success">Añadir Producto</button>
                            </div>
                        </div>

                        
                    </article>
                
            </section>

          
        </div>
    </div><!--fin del container--><br>






    <!--Bostrap 4.0 js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--js boton que evento escucha-->
    <script src="../login/js/escuchas.js"></script>
</body>
</html>