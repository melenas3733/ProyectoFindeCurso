<?php
        //Traernos los ficheros que necesitemos
        require './../DAO/DAOProducto.php';
        require './../DB_Conector/Conector_DB.php';
      

        //Recogemos los valores del formulario
      
       // $nombre, $precioventa, $preciocompra, $Stock, $Imagen, $DetallesDelProducto, $tipoProducto, $precioOferta, $porcentajeDescuento

        $id = $_GET['id'];
       // echo $id;
   
        //Creamos la conexion a la BD
        $conexion = conectar(false);

        //Lanzamos la consulta
        
        $consulta = eliminarProducto($conexion,$id);


        //}
        //$consulta = insertarUsuariosCliente($conexion,$Nombre, $Apellido, $Apellido2, $DNI, $Email, $Contraseña);
        
       header('Location: ../../zonaAdmin/AdministrarProductos.php');
?>