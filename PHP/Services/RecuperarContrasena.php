<?php
        //Traernos los ficheros que necesitemos
        require '../DB_Conector/Conector_DB.php';
        require '../DAO/DAOUsuario.php';
        echo "<h2> Mi primer login con PHP </h2> <br>";

        //Recogemos los valores del formulario
        $dni = $_POST['DNI'];
        $email = $_POST['Email'];
        $Contrasena = $_POST['contrasena'];

        echo "Usuario: ".$dni." <br> contraseña: ".$email."<br> Contraseña: ".$Contrasena."<br>";


        //Creamos la conexion a la BD
        $conexion = conectar(false);

        //Lanzamos la consulta
        $consulta = recuperarPassword($conexion,$dni,$email,$Contrasena);
        
        if (mysqli_num_rows($consulta)==1){
            echo "Usuario logueado correctamente. Veamos los datos del usuario.<br>";
            $fila = mysqli_fetch_assoc($consulta);
            foreach ($fila as $atributo=>$valor){
               if($atributo=='Contrasena')
                echo $atributo."= ".$valor."<br>";
            }
            //Creo la sesion del usuario
            crearSesion($fila);

            //Me creo un enlace a otra pagina donde imprimo la sesion
            $url="Usuario_Logueado.php";
            $mensaje="HAz clic para ir a otra pagina";
            echo "<a href=$url>$mensaje</a>";
        } else{
            echo "ERROR. el usuario no existe. Compruebe si ha introducido bien el usuario/contrseña";
        }
?>