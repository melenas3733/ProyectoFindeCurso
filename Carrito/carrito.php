<?php

require '../PHP/DAO/DAOProducto.php';
require '../PHP/DB_Conector/Conector_DB.php';
include '../header.php';
?>
<div class="cart content-wrapper">
    <h1>Carrito</h1>
    <form action="realizarEnvio.php" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                    <?php ///$products=$_SESSION['carrito']; 
                  // echo var_dump($_SESSION);
                   $carrito=$_SESSION['carrito'];
                   //echo var_dump($carrito);
                  // print_r(array_keys( $carrito));
               // implode("|",$carrito);
               $precioTotal=0;
               $conexion=conectar(false);
                   if(empty($carrito)){
                       echo '<tr>
                       <td colspan="5" style="text-align:center;">No hay productos en el carrito</td>
                   </tr>
             ';
                   }else{
                  
                       foreach($carrito as $producto=>$cantidad){
                           
                         
                   $currentProducto =BuscarProductoPorID($conexion,$producto);
                       // echo $producto.' id sacado del carrito ';
                       // foreach($linea as $cantidad)
                      //  echo $cantidad.' cantidad ';
                    // echo $currentProducto;
                   
                   
                    echo'<tr>
                           <td class="img">
                           <input type ="hidden" value=" '.$currentProducto["idProductos"].'"> 
                               <a href="index.php?page=product&id=>">
                                 ' . $currentProducto["nombre"].'
                               </a>
                           </td>
                           <td>
                               <a href="index.php?page=product&id="></a>
                               <br>
                               <a href="index.php?page=cart&remove=" class="remove">Remove</a>
                           </td>
                           <td class="price"><a href="index.php?page=product&id=>">
                           '  . $currentProducto["precioventa"].'
                         </a> </td>
                           <td class="quantity">
                               <input type="number" name="" value="'.$cantidad.'" min="1" max="" placeholder="Quantity" required>
                           </td>
                           <td class=""><input type="number" name="" value="'.$cantidad* $currentProducto["precioventa"].'" min="1" max="" placeholder="Quantity" required></td>
                       </tr>';
                       $precioTotal+=($cantidad* $currentProducto["precioventa"]);
                   } 
                           
                       }
                    
                   
           
                
          echo'</tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <input class="price" type="number" value="'.$precioTotal.'">
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
        </div>
    </form>
</div>'; 
            


include '../footer.php';

?>