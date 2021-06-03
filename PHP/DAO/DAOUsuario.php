<?php
        function consultaUsuarios($conexion){
          $sql="SELECT * FROM Usuario ";
          $resultado= mysqli_query($conexion,$sql);
           return  $resultado ;
        }
        function ConsultarSoloClientes($conexion){

              $sql="SELECT * FROM Usuario WHERE tipoUsuario = cliente";
              $resultado = mysqli_query($conexion, $sql);
              return $resultado;
        }
        function consultaLogin($conexion, $email,$contraseña){
            $sql = "SELECT * FROM usuario WHERE email = '$email' AND contrasena = '$contraseña'";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado;
        }
        function recuperarPassword($conexion,$email,$dni){
            $sql = "SELECT * FROM usuario WHERE email = '$email' AND dni = '$dni'";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }
        function insertarUsuariosCliente($conexion,$nombre, $apellido, $apellido2, $dni, $email, $contraseña){
           $tipoUsario='cliente';
            $sql = "INSERT INTO usuario (nombre, apellido, apellido2, dni, email, contrasena,tipoUsuario )
            VALUES ('$nombre',  '$apellido', '$apellido2', '$dni', '$email','$contraseña','$tipoUsario');";
            echo $sql;
             $resultado = mysqli_query($conexion,$sql);
             if ($resultado === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . "<br>".mysqli_error($conexion);
              }
             return $resultado;
          
        }


        ///nombre apellido apellido2	dni email contraseña Tienda_idTienda tipoUsuario	nomina	cuentabancaria

        function insertarUsuariosAdministrador($conexion, $nombre, $apellido, $apellido2, $dni, $email, $contraseña, $Tienda_idTienda){
            $sql = "INSERT INTO usuario ( nombre, apellido, apellido2, dni, email, contraseña, Tienda_idTienda, tipoUsuario )
            VALUES ('$nombre', '$apellido', '$apellido2', '$dni', '$email', '$contraseña', '$Tienda_idTienda','admin')";
             $resultado = mysqli_query($conexion, $sql);
             if ($resultado === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . "<br>".mysqli_error($conexion);
              }
             return $resultado;
          
        }


        function modificarUsuarios($conexion,$nombre, $contrasena, $email, $dni){
            $sql = " UPDATE `usuario` SET `nombre`=$nombre,usuario `contrasena`=$contrasena,`email`=$email,`DNi`$dni WHERE 'email'=$email";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;

        }

        function eliminarUsuarios($conexion, $email){
            $sql = "  DELETE FROM `usuario` WHERE email=$email";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }

        
        function crearSesion($usuario){
            //Pongo el ID de SeSSION con el DNI
            session_id($usuario['idUsuario']);
            //Creao la sesion
            session_start();
            //Almacenamos todos los datos de sesion
            $_SESSION['nombre']=$usuario['nombre'];
            $_SESSION['apellido']=$usuario['apellido'];
            $_SESSION['apellido2']=$usuario['apellido2'];
            $_SESSION['dni']=$usuario['dni'];
            $_SESSION['contraseña']=$usuario['contrasena'];
            $_SESSION['email']=$usuario['email'];

            $_SESSION['idUsuario']=$usuario['idUsuario'];
          
         
            $_SESSION['tipoUsuario']=$usuario['tipoUsuario'];
            $_SESSION['nomina']=$usuario['nomina'];
            $_SESSION['cuentabancaria']=$usuario['cuentabancaria'];
            
        }
?>