<?php
        //Traernos los ficheros que necesitemos
        require './../DAO/DAOUsuario.php';
        require './../DB_Conector/Conector_DB.php';
      

        //Recogemos los valores del formulario
      
        $email = $_POST['Email'];
        $contraseña = $_POST['Contraseña'];



        //Creamos la conexion a la BD
        $conexion = conectar(false);

        //Lanzamos la consulta
        $consulta =  consultaLogin($conexion, $email,$contraseña);
        if (mysqli_num_rows($consulta)==1){
            echo "Usuario logueado correctamente. Veamos los datos del usuario.<br>";
            $fila = mysqli_fetch_assoc($consulta);
            foreach ($fila as $atributo=>$valor){
                echo $atributo."= ".$valor."<br>";
            }
            //Creo la sesion del usuario
            crearSesion($fila);

            //Me creo un enlace a otra pagina donde imprimo la sesion
            header('Location: ../../index.php');
           // header('Location: ./UsuarioLogueado.php');
          // echo 'he creado la  session';
        } else{
            echo "ERROR. el usuario no existe. Compruebe si ha introducido bien el usuario/contrseña";
           // header('Location: ../../index.php');
        }
        
        
?>