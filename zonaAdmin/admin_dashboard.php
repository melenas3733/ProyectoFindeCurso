<?php
include './headerAdmin.php';
require '../PHP/DAO/DAOProducto.php';
require '../PHP/DB_Conector/Conector_DB.php';

$conexion  = conectar(false);
$resultado = listarTodoslosProductos($conexion);


    

    include './footerAdmin.php';
?>

