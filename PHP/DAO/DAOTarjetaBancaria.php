Buscar todas las targetas de un usuario
Eliminar tarjeta de un usuario
Eliminar todas las tarjetas de un usuario
Modificar una tarjeta de un usuario

Tarjeta bancaria
idTarjeta Bancaria, Usuario_idUsuario
Tarjeta Bancaria, CVV, fechacaducidad, nombre, nameOwner

<?php

function buscarTodasTarjeta($conexion,$idUsuario ){
    $sql = "SELECT * FROM `tarjeta bancaria` WHERE Usuario_idUsuario='$idUsuario'";
}

function consultarTodaTarjetaUsuario($conexion){
    $sql ="SELECT * FROM  TarjetaBancaria ";

    $resultado= mysqli_query($conexion,$sql);
    return  $resultado ;
}

function modificarTarjetaBancaria($conexion, $Tarjeta_Bancaria, $CVV , $fechacaducidad, $nombre, $ameOwner){
    $sql = "UPDATE 'usuario' SET 'Tarjeta_Bancaria'=$Tarjeta_Bancaria ,'$CVV'=CVV, '$fechacaducidad'=fechacaducidad, '$nombre'=nombre, '$ameOwner'=ameOwner ";
    $resultado = mysqli_query($conexion, $sql);
    return $resultado;
}

function eliminarTarjetaBancaria($conexion){
    $sql = "DELETE FROM 'TarjetaBanaria' ";

    $resultado= mysqli_query($conexion,$sql);
    return  $resultado ;
}

function eliminarTodasLasTarjetasBancarias($conexion){
    $sql = "DELETE FROM * 'TarjetaBanaria' ";

    $resultado= mysqli_query($conexion,$sql);
    return  $resultado ;

}
?>