
<?php
include 'header.php';
require './PHP/DAO/DAOProducto.php';
require './PHP/DB_Conector/Conector_DB.php';

$conexion  = conectar(false);
$resultado = listarTodoslosProductos($conexion);


echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>

<div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="img/chavales.png" alt="First slide">
</div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/eleikopesas.jpg" alt="Second slide">
</div>
    <div class="carousel-item">
        <img class="d-block w-100" src="img/pesasraras.jpg" alt="Third slide">
    </div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>';

if (mysqli_num_rows($resultado) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy " .
        "a detenerme.";
    exit;
}

// Mientras exista una fila de datos, colocar esa fila en $fila
// como una matriz asociativa
// Nota: Si solo espera una fila, no hay necesidad de usar un ciclo
// Nota: Si coloca extract($fila); dentro del siguiente ciclo,
//       estará creando $id_usuario, $nombre_completo, y $status_usuario
echo '<div class="container" id=listadoProducto>';


$numfilas = mysqli_num_rows($resultado);
echo $numfilas . ' esto es lo que imprimo';

$i = 0;
echo $i;
while ($i < $numfilas) {
    $fila = mysqli_fetch_assoc($resultado);
    echo '<div class="row justify-content-around">';
    echo '<div class="col-6" >';
    if ($fila['tipoProducto'] == 'ofertado') {
        echo '<div class="" style="border: 1px solid black;"><img src="./img/presaNormal.png" alt="" ></div>';
    } else {
        //pintar diseño normal ;
        echo '<div class="" style="border: 1px solid black;"><img src="./img/tarroOferta.jpg" alt="" ></div>';
    }
    // echo '<TD>'.$fila["idProductos"].'</TD>';
    //echo '<div style="border: 1px solid black" class="col-6" margin-right:" 20%" width: "16%" background: "red">'.$fila["Imagen"].'</div>';
    echo '<div style= "background: blue; text-align: center; width: 100%;" class="col-6">' . $fila["nombre"] . '</div>';
    echo ' <div style="background:#9f9; text-align: end; width: 50%;" class="col-6">' . $fila["precioventa"] .'</div>';
    echo '<form action="http://localhost/(1)lospesistas/PHP/Services/addProductoAlCarrito.php" method="post">
        <input type="hidden" name="Productos_idProductos" value="'.$fila['idProductos'].'">    
        <input type="number" name="cantidad" value="1" min="1" max="'.$fila ['Stock'].'" placeholder="Quantity" required>
            <input type="submit" value="Add To Cart">
        </form> ';
    echo '  </div>';

    

    $i++;

    $fila = mysqli_fetch_assoc($resultado);
   
    echo '<div class="col-6" >';
    if ($fila['tipoProducto'] == 'ofertado') {
        echo '<div class="" style="border: 1px solid black;"><img src="./img/presaNormal.png" alt="" ></div>';
    } else {
        //pintar diseño normal ;
        echo '<div class="" style="border: 1px solid black;"><img src="./img/tarroOferta.jpg" alt="" ></div>';
    }
    // echo '<TD>'.$fila["idProductos"].'</TD>';
    //echo '<div style="border: 1px solid black" class="col-6" margin-right:" 20%" width: "16%" background: "red">'.$fila["Imagen"].'</div>';
    echo '<div style= "background: blue; text-align: center; width: 100%;" class="col-6">' . $fila["nombre"] . '</div>';
    echo ' <div style="background:#9f9; text-align: end; width: 50%;" class="col-6">' . $fila["precioventa"] . '</div>';
    echo '<form action="http://localhost/(1)lospesistas/PHP/Services/addProductoAlCarrito.php" method="post">
        <input type="hidden" name="Productos_idProductos" value="'.$fila['idProductos'].'">    
        <input type="number" name="cantidad" value="1" min="1" max="'.$fila ['Stock'].'" placeholder="Quantity" required>
            <input type="submit" value="Add To Cart">
        </form> ';
            echo ' </div></div>';

    $i++;
}






/*  If( enseñar si == ofertado)
    echo '<TD>'.$fila["tipoProducto"].'</TD>';
    echo '<TD>'.$fila["precioOferta"].'</TD>';
    echo '<TD>'.$fila["porcentajeDescuento"].'</TD>';
   */

echo'</div>';


mysqli_free_result($resultado);




include './footer.php';
