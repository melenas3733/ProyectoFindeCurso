Insertar imagen de un producto
Eliminar imagen de un producto
Eliminar todas las imagenes de un producto
Modificar imagen de un producto
Listar todas las imagenes de un producto

<?php

function insertarImagenProducto($conexion,$idImagen, $url, $Productos_idProductos){
    $sql = "INSERT INTO imagen (idImagen, url, Productos_idProductos) VALUES ('$idImagen','$url','$Productos_idProductos')";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}

function eliminarImagen($conexion,$idImagen, $url, $Productos_idProductos){
    $sql = "DELETE FROM `imagen` WHERE  idImagen= $varId";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}

function eliminarTodasLasImagenesProducto(){

    $sql = "DELETE FROM `imagen` WHERE  idProducto= $idProducto";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}
   
}


function modificarImagenProducto($conexion, $idImagen,$url, $Productos_idProductos){
    $sql = "UPDATE `imagen` SET `idImagen`=$idImagen,`url`=$url,`Productos_idProductos`=$Productos_idProductos WHERE 1";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;

}

function ListarImagenProducto($conexion,$idImagen,$url, $Productos_idProductos){
    $sql = "SELECT `idImagen`, `url`, `Productos_idProductos` FROM `imagen` WHERE 1";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}
?>