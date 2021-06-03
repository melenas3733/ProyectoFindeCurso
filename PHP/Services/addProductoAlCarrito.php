<?php
include '../DAO/DAOProducto.php';
include '../DB_Conector/Conector_DB.php';
//echo'llego';
session_start();
//$product_id = (int)$_POST['Productos_idProductos'];
//$quantity = (int)$_POST['cantidad'];
//echo $product_id.'id del producto';
//echo $quantity.'cantidad';
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['Productos_idProductos'], $_POST['cantidad']) && is_numeric($_POST['Productos_idProductos']) && is_numeric($_POST['cantidad'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['Productos_idProductos'];
    $quantity = (int)$_POST['cantidad'];
    //echo $product_id.' id del producto';
    //echo $quantity.' cantidad';
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    //$stmt = $pdo->prepare('SELECT * FRO WHERE id = ?');
    //$stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $conexion= conectar(false);
    $product = BuscarProductoPorID($conexion,$product_id);
    // Check if the product exists (array is not empty)
    if ($product_id && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
      //  echo'producto y cantidad mayor que 0';
        if (isset($_SESSION['carrito']) && is_array($_SESSION['carrito'])) {
        //    echo'compruebo que puedo editar la sesion carrito';
            if (array_key_exists($product_id, $_SESSION['carrito'])) {
                // Product exists in cart so just update the quanity
          //      echo'el producto existe solo actulizo cantidad ';
                $_SESSION['carrito'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
            
            //    echo'el producto se añade al carrito  ';
                $_SESSION['carrito'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            //echo'el producto es el primero en ser añadido  ';
            $_SESSION['carrito'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    //header('location: ../../index.php');
   // echo 'producto añadido al carro';
    //echo var_dump($_SESSION);
    exit;
}