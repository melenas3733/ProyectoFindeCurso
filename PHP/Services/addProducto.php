<?php
        //Traernos los ficheros que necesitemos
        require './../DAO/DAOProducto.php';
        require './../DB_Conector/Conector_DB.php';
      

        //Recogemos los valores del formulario
      
       // $nombre, $precioventa, $preciocompra, $Stock, $Imagen, $DetallesDelProducto, $tipoProducto, $precioOferta, $porcentajeDescuento

        $nombre = $_POST['nombre'];
      
        $Stock = $_POST['Stock'];
        $precioVenta = $_POST['precioVenta'];
        $precioCompra = $_POST['precioCompra'];
        $precioOferta = $_POST['precioOferta'];
        $porcentajeDescuento = $_POST['porcentajeDescuento'];
        $DetallesDelProducto = $_POST['DetallesDelProducto'];

        $Imagen = $_POST['Imagen'];
        $categoria_id = $_POST['categoria_id'];

       // $tipoProducto = $_POST['tipoProducto'];
       
//echo $Stock;

   
        //Creamos la conexion a la BD
        $conexion = conectar(false);

        //Lanzamos la consulta
        if($porcentajeDescuento==0.0&&$precioOferta==0.0){
        $consulta = insertarProductoNormal($conexion,$nombre,$precioVenta,$precioCompra,$Stock,$Imagen,$DetallesDelProducto,$categoria_id);
    }else{
    $consulta = insertarProductoOfertado($conexion,$nombre, $precioVenta , $precioCompra , $Stock,  $Imagen,  $DetallesDelProducto  , $precioOferta , $porcentajeDescuento,  $categoria_id);
}
        //}
        //$consulta = insertarUsuariosCliente($conexion,$Nombre, $Apellido, $Apellido2, $DNI, $Email, $Contraseña);
        
       header('Location: ../../index.php');
?>