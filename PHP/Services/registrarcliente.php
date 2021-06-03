<?php
        //Traernos los ficheros que necesitemos
        require './../DAO/DAOUsuario.php';
        require './../DB_Conector/Conector_DB.php';
      

        //Recogemos los valores del formulario
      
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Apellido2 = $_POST['Apellido2'];
        $DNI = $_POST['DNI'];
        $Email = $_POST['Email'];
        $Contraseña = $_POST['Contraseña'];
        $Contraseña2 = $_POST['Contraseña2'];


        //Creamos la conexion a la BD
        $conexion = conectar(false);

        //Lanzamos la consulta
        $consulta = insertarUsuariosCliente($conexion,$Nombre, $Apellido, $Apellido2, $DNI, $Email, $Contraseña);
        
        header('Location: ../../index.php');
?>