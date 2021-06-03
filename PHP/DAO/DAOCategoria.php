<!-- Listar todas las categorias
Listar todas las super categorias
Listar todas las categorias de unas uper categorias
Litar todos los productos de una categoria
Añadir una categoria
Añadir un producto a categorias
Añadir una super categoria
Actualizar categoria
Elmininar categoria
-->

<?php

function listarCategorias($conexion){
    $sql = "SELECT  * FROM  categoria ";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}

function actualizarCategoria($conexion,$nombre){
    $sql = " UPDATE `categoria` SET `nombre`=$nombre WHERE url=$nombre";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;

}

function insertarCategoriaAdmin($conexion,$categoria){
    $sql = "INSERT INTO categoria (nombre, );
    VALUES ('$categoria', admin)";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
  
}

function eliminarCategoria($conexion,$sql,$nombre){
    $sql = "  DELETE FROM `categoria` WHERE nombre=$nombre";
    $resultado = mysqli_query($conexion,$sql);
    return $resultado;
}

function ListAllProductosInCategoria ($conexion,$id_categoria){
    $sql="SELECT * FROM Categoria JOin categoria_has ";
    $resultado =mysqli_query($conexion,$sql);

}


//SELECT * FROM productos JOIN categoria_has_productos on productos.idProductos =categoria_has_productos.Productos_idProductos JOIN 
//categoria on categoria.idCategoria= categoria_has_productos.Categoria_idCategoria WHERE productos.idProductos=1;
//
/** SELECT * FROM categoria JOIN categoria_has_productos ON categoria.idCategoria= categoria_has_productos.Categoria_idCategoria JOIN 
 * productos ON productos.idProductos = categoria_has_productos.Productos_idProductos WHERE idCategoria=1; */

?>