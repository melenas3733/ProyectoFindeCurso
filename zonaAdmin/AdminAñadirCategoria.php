<?php
include '../header.php';

?>

        <!--Contenedor-->
        <div >

            <section>

                
                    <article class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col align-self-start">
                                <label>Nombre de Categoria:</label>
                                <input type="text" class="form-control" id="producto">
 
                            </div>
                            <div class="col align-self-center" style="margin-bottom: 5%;">
                                <label>Categoria:</label>
                                <select name="menu">
                                    <option>Selecciona...</option>
                                    <option>Barras</option>
                                    <option>Pesas</option>
                                    <option>Calzado</option>
                                    <option>Suplementacion</option>
                                    <option>Mayones</option>
                                  </select>

                            </div>

                            <div class="col align-self-end" style="margin-bottom: 7%;">
                                <label for="casilla1">Super Categoria</label>
                                <input type="checkbox" name="casilla" id="casilla1">
                                
             
                            </div>
                        </div>
                        <div class="row">
                            <div style="margin-left: 50%;">
  
                                <button type="button" class="btn btn-success">Añadir Producto</button>
                            </div>
                        </div>

                        
                    </article>
                
            </section>

          
        </div>
    </div><!--fin del container--><br>






    <!--Bostrap 4.0 js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--js boton que evento escucha-->
    <script src="../login/js/escuchas.js"></script>
</body>
</html>