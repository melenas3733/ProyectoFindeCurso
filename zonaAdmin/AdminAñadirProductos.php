<?php 
include '../header.php';

?>

        <!--Contenedor-->
        <div>

            <section>

                <form id="AñadirProducto" action="../PHP/Services/addProducto.php" method="POST" class="needs-validation">
                    <article class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row" style="padding: 5%; ">



                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <label>Nombre de Producto: </label>
                                    <input type="text" name="nombre" id="nombre">


                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style="margin-left: 7%;">

                                    <label>stok:</label>
                                    <input type="number" style=" margin-right: 90%; width: 20%;" step="1" min=0 name="Stock" id="Stock">

                                </div>
                                <!--<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style="margin-top: 5%; margin-bottom: 5%;">

                                    <select name="menu">
                                        <option>Categoria..</option>
                                        <option>Ofertado</option>
                                        <option>Normal</option>
                                    </select>
                                    

                                </div>-->


                            </div>
                            <div class="row">

                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                    <label>Precio de Venta:</label>
                                    <input type="number" step="0.1" min=0 name="precioVenta" id="precioVenta">

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                                    <label>Precio de Compra:</label>
                                    <input type="number" step="0.1" min=0 name="precioCompra" id="precioCompra">

                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                                    <label>Precio de Oferta:</label>
                                    <input type="number" step="0.1" min=0 name="precioOferta" id="precioOferta" value="0.0">

                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
                                    <label>porcentaje descuento:</label>
                                    <input type="number" step="0.1" min=0 max=100 name="porcentajeDescuento" id="porcentajeDescuento"value="0.0">

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" style="margin-top: 5%; margin-bottom: 5%;">
                                    <label>Detalles del producto:</label>
                                    <textarea rows="5" cols="30" name="DetallesDelProducto" id="DetallesDelProducto"></textarea>

                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" style="margin-top: 5%; margin-bottom: 5%;">
                                    <label>Url Imagen del producto:</label>
                                    <input type="text" name="Imagen" id="Imagen">

                                </div>
                                <div>
                                <select name="categoria_id">
                                    <?php
                                    require '../PHP/DB_Conector/Conector_DB.php';
                                    require '../PHP/DAO/DAOCategoria.php';
                                  $conexion=conectar(false);
                                  $resultado=listarCategorias($conexion);
                                  //echo $resultado;
                                  if (mysqli_num_rows($resultado) == 0) {
                                    echo "No se han encontrado filas, nada a imprimir, asi que voy " .
                                         "a detenerme.";
                                    exit;
                                }
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                  
                                    echo ' <option value="'.$fila["idCategoria"].'">'.$fila["nombre"].'</option>';
                                   
                               
                     
                                }
                                mysqli_free_result($resultado);

                                  
                                       
                                   
                                ?>
                                 </select>
                                </div>

                            </div>
                            <div class="row justify-content-end">
                                <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12" style=" margin-top: 73%;">

                                    <button type="button" class="btn btn-success">Editar</button>
                                    <button type="button" class="btn btn-success">Eliminar</button>
                                </div>
                            </div>



                            <div class="row">
                                <div style="margin-left: 50%; margin-top: 95%;">
                                    <button type="submit" class="btn btn-success">Añadir Producto</button>
                                </div>
                            </div>


                        </div>
                    </article>
                </form>

            </section>


        </div>
    </div>
    <!--fin del container--><br>






    <!--Bostrap 4.0 js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--js boton que evento escucha-->
    <script src="../login/js/escuchas.js"></script>
</body>

</html>