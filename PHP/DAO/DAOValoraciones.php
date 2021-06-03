Listar todas las valoraciones
Añadir valoraciones de un producto
Modificar Valoraciones de un producto

<?php


function listarValoraciones($conexion,$valoraciones){
    $sql = "SELECT  'Valoracion' * FROM 'valoracion'=$valoracion VALUES ('$$valoracion')";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;
}

function insertarValoracion($conexion,$comentario, $valoracion){
    $sql = "INSERT INTO Valoracion (comentario, valoracion );
    VALUES ('$$comentario', '$valoracion')";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;
}

function modificarProducto($conexion,$nombre, $valoracion){
    $sql = " UPDATE `categoria` SET `nombre`=$nombre, `valoracion`=$valoracion WHERE url=$valoracion";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;

}

?>
