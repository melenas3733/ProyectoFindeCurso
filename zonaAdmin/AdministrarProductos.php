<?php 

include '../header.php';
 require '../PHP/DAO/DAOProducto.php';
require '../PHP/DB_Conector/Conector_DB.php';



$conexion  = conectar(false);
$resultado = listarTodoslosProductos($conexion);


       echo '<!--Contenedor-->
        <div >

            <section>

                <div class="row">
                    <article class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                        
                            <div class="rox justify-content-end">
                                <div class="col" style=" margin-bottom: 2%;">
    
                                    <button type="button" class="btn btn-success">Editar</button>
                                    <button type="button" class="btn btn-success">Eliminar</button>
                                </div>
                            </div>

                        
                            <table BORDER >
                                <TR >
                                    <TH>id</TH>
                                    <TH>Nombre</TH>
                                    <TH>Precio Venta</TH>
                                    <TH>Precio Compra</TH>
                                    <TH>Stock</TH>
                                    <TH>Descripcionproducto</TH>
                                    <TH>Tipo de Producto</TH>
                                    <TH>Precio Ofertado</TH>
                                    <TH>Porcentaje Descuento</TH>

                                </TR>';
                            

                                if (mysqli_num_rows($resultado) == 0) {
                                    echo "No se han encontrado filas, nada a imprimir, asi que voy " .
                                         "a detenerme.";
                                    exit;
                                }
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo'<TR ALIGN=center>';
                                    echo '<TD>'.$fila["idProductos"].'</TD>';
                                    echo '<TD>'.$fila["nombre"].'</TD>';
                                    echo '<TD>'.$fila["precioventa"].'</TD>';
                                    echo '<TD>'.$fila["preciocompra"].'</TD>';
                                    echo '<TD>'.$fila["Stock"].'</TD>';
                                    echo '<TD>'.$fila["DetallesDelProducto"].'</TD>';
                                    echo '<TD>'.$fila["tipoProducto"].'</TD>';
                                    echo '<TD>'.$fila["precioOferta"].'</TD>';
                                    echo '<TD>'.$fila["porcentajeDescuento"].'</TD>';
                                    echo '<TD> <a  class="btn btn-success" href="http://localhost/(1)lospesistas/PHP/Services/borrarProducto.php?id='.$fila["idProductos"].'">Eliminar</a></TD>';
                                    echo '<TD> <button type="button" class="btn btn-success" href="EditarProducto/'.$fila["idProductos"].'">Editar</button></TD> </TR>';
                                    
                               
                     
                                }
                                mysqli_free_result($resultado);

                            
                            echo '</table>
                       
                        
                            <div class="row">
                                <div style="margin-left: 30%; margin-top: 5%;">
                                <a href="http://localhost/(1)lospesistas/zonaAdmin/AdminAñadirProductos.php"  class="btn btn-success">Añadir Producto</a>
                                   
                                </div>
                            </div>



                        
                    </article>
                </div>
                
            </section>

          
        </div>
    <br>';


include '../footer.php';
?>