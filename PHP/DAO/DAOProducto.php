<?php

///PRODUCTOS NORMALES
        function listarTodoslosProductos($conexion){
          $sql="SELECT * FROM Productos ";
          $resultado= mysqli_query($conexion,$sql);
          return  $resultado ;
        }


        function BuscarEntrePrecios($conexion,$precioMax,$precioMin){
            $consulta= "SELECT * FROM Producto  WHERE precioventa BETWEEN $precioMin AND  $precioMax";
            $resultado = mysqli_query($conexion,$consulta);
            return $resultado;
        } 


     
       
        
        function insertarProductoNormal($conexion,$nombre, $precioventa , $preciocompra , $Stock,  $Imagen,  $DetallesDelProducto  ,  $categoria_id){// tipoProducto =normal
            $sql = "INSERT INTO productos ( nombre, precioventa , preciocompra , Stock,  Imagen,  DetallesDelProducto , tipoProducto  ,  categoria_id )
            VALUES ('$nombre', '$precioventa', '$preciocompra', '$Stock', '$Imagen', '$DetallesDelProducto', 'normal','$categoria_id')";
             $resultado = mysqli_query($conexion, $sql);
             if ($resultado === TRUE) {
              //  echo "New record created successfully";
              
              } else {
                echo "Error: " . "<br>".mysqli_error($conexion, $sql);
              }
             return $resultado;
          
        }


        function modificarProductoNormal($conexion, $nombre, $precioventa, $preciocompra, $Stock, $Imagen, $DetallesDelProducto, $tipoProducto, $precioOferta, $porcentajeDescuento){
            $sql = "UPDATE `productos` SET `nombre`=$nombre,`precioventa`=$precioventa,`preciocompra`=$preciocompra,`Stock`=$Stock,`Imagen`=$Imagen,
            `DetallesDelProducto`=$DetallesDelProducto,`tipoProducto`=$tipoProducto,`precioOferta`=$precioOferta,
            `porcentajeDescuento`=$porcentajeDescuento WHERE 1";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;

        }

        function eliminarProductoNormal($conexion){
            $sql = " DELETE FROM `productos` WHERE 0";
            $resultado = mysqli_query($conexion,$sql);
            return $resultado;
        }


///PRODUCTOS OFERTADO

    function ListarProductosOfertados($conexion){
      $sql="SELECT * FROM Productos WHERE tipoProducto = 'ofertado'"; 
      $resultado= mysqli_query($conexion,$sql); 
      return  $resultado ;
    }

    function insertarProductoOfertado($conexion,$nombre, $precioventa , $preciocompra , $Stock,  $Imagen,  $DetallesDelProducto  , $precioOferta , $porcentajeDescuento,  $categoria_id){
        $sql = "INSERT INTO `Productos`( nombre, precioventa , preciocompra , Stock,  Imagen,  DetallesDelProducto , tipoProducto  , precioOferta , porcentajeDescuento,  categoria_id) VALUES 
        ('$nombre','$precioventa','$preciocompra','$Stock','$Imagen','$DetallesDelProducto','ofertado','$precioOferta','$porcentajeDescuento','$categoria_id')";




       
        $resultado = mysqli_query($conexion,$sql);
        if ($resultado === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . "<br>".mysqli_error($conexion);
          }
        return $resultado;
      
    }

   
    function modificarProductoOfertado(){

    }

  

?>