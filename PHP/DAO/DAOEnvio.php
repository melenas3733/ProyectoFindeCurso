<?php

envios. 
Carrito_idCarrito, TarjetaBancaria_idTarjeta Bancaria, 
codigoPostal, provincia, localidad, direccionEnvio, nombre, Envioscol


function insertarEnvios($idEnvio, $Carrito_idCarrito, $Tarjeta Bancaria_idTarjeta Bancaria, $codigoPostal, $dni,$provincia, $localidad, $direccionEnvio ,$nombre, $Envioscol, $Usuario_idUsuario){
    $sql = "INSERT INTO usuario (`idEnvio`, `Carrito_idCarrito`, `Tarjeta Bancaria_idTarjeta Bancaria`, 
    `codigoPostal`, `provincia`, `localidad`, `direccionEnvio`, `nombre`, `Envioscol`, `Usuario_idUsuario`) VALUES
     ('$idEnvio', '$Carrito_idCarrito', '$Tarjeta Bancaria_idTarjeta Bancaria', '$codigoPostal', '$provincia', '$localidad', '$direccionEnvio', '$nombre', '$Envioscol','$Usuario_idUsuario')";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
  
}

function modificarEnvios($codigoPostal, $provincia, $localidad, $direccionEnvio, $nombre, $Envioscol){
    $sql = " UPDATE `Envios` SET = `codigoPostal`$codigoPostal, `provincia`=$provincia,`localidad`=$localidad,`direccionEnvio`$direccionEnvio, `nombre`=$nombre,`Envioscol`=$Envioscol WHERE email=$email";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;

}


function eliminarEnvios($conexion,$codigoPostal, $provincia, $localidad, $direccionEnvio, $nombre, $Envioscol){
    $sql = "DELETE FROM `envios` WHERE 0";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}


        
?>