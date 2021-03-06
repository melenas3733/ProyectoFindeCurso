<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    
    <!--Imagen favicon-->
    <link rel="icon" href="../img/barrapesas.png" type="images">

    <!--boostrap 4.0 css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleRegistro.css">
</head>
<body>
    
    <div>
                <!--Logotipo-->
                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 thumb "> <!--usa las 12 columnas-->
                        <a href="./../index.php">
                            <img class="rounded mx-auto d-block h-40" id="logo"  src="../img/barrapesas.png" > <!--la classe img hace que se mueva al centro-->
                        </a>
                    </div>
                    
                </div>
        
            <div class="contenedor "><!-- m-0 justify-content-center align-items-center vh-100 -->
                <div class="contenedor2 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h3>Recuperar Contraseña</h3>
                    <form id="Login" name="Login" action="../PHP/Services/RecuperarContrasena.php" method="POST" class="needs-validation">
                      

                            <div class="form-row">

                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                <label>Email:</label>
                                <input type="email" placeholder ="outlock@mail.com" class="form-control" name="Email" id="Email">
                                <div class="alert alert-danger" role="alert" hidden=true id="EmailError"></div>
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <label>DNI:</label>
                                <input type="text" placeholder ="numero y letra" class="form-control" name="DNI" id="DNI">
                                <div class="alert alert-danger" role="alert" hidden=true id="dniError"></div>
                            </div>

                            


                            <div class="col-sm-12 col-md-12" id="boton">
                                <button type="submit" class="send btn btn-success" style="color: honeydew;"> Aceptar</button>
                                <a href="./registro.php" class="send btn btn-success">Registrar</a>
                                <a href="./iniciarSesion.php" class="send btn btn-success">Iniciar Sesion</a>
                                <!--<button class="send btn btn-success" > <a href="registro.php" style="color: honeydew;"> Registrar</a></button>
                                <button class="send btn btn-success"><a href="iniciarSesion.php" style="color: honeydew;">Iniciar Sesion</a></button>-->

                            </div>
                            
                      
                    </form>
                </div>
            </div>
        

    </div>

    <!--Bostrap 4.0 js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--validar formulario-->
    <script src="js/validarRecuperarCont.js"> </script>
</body>
</html>