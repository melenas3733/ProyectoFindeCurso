<?php 

include '../header.php';
 require '../PHP/DAO/DAOCategoria.php';
require '../PHP/DB_Conector/Conector_DB.php';



$conexion  = conectar(false);
$resultado =listarCategorias($conexion);


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
                                    

                                </TR>';

                                if (mysqli_num_rows($resultado) == 0) {
                                    echo "No se han encontrado filas, nada a imprimir, asi que voy " .
                                         "a detenerme.";
                                    exit;
                                }
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo'<TR ALIGN=center>';
                                    echo '<TD>'.$fila["idCategoria"].'</TD>';
                                    echo '<TD>'.$fila["nombre"].'</TD>';
                                    
                                    echo '<TD> <button type="button" class="btn btn-success" href="/EliminarCategoria/'.$fila["idCategoria"].'">Editar</button></TD>';
                                    echo '<TD> <button type="button" class="btn btn-success" href="/EditarCategoria/'.$fila["idCategoria"].'">Editar</button></TD> </TR>';
                                    
                               
                     
                                }
                                mysqli_free_result($resultado);

                            
                            echo '</table>
                       
                        
                            <div class="row">
                                <div style="margin-left: 30%; margin-top: 5%;">
    
                                    <button type="button" class="btn btn-success ">Añadir Producto</button>
                                </div>
                            </div>



                        
                    </article>
                </div>
                
            </section>

          
        </div>
    <br>';


include '../footer.php';
?>