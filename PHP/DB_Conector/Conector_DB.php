<?php

    function conectar($esRemota){
        
        //Variable que almacena la IP de mi Gestor de BD
        if($esRemota){
            $servidor = "";
        } else {
            $servidor = "localhost:3306";
        }
        //Variable que me almacena el usuario que se conecta a mi Gestor de BD
        $usuario = "root";

        //Contraseña del usuario
        $password = "";

        //El esquema de la BD donde quiero hacer operaciones
        $BD = "pesistasbd";

       // echo "Vamos a intentar conectar con la BD <br>";

        $conector = mysqli_connect($servidor,$usuario,$password,$BD);

        if ($conector){
         //   echo "La conexión se ha realizado con exito <br>";
            return $conector;
        } else {
            echo "ERROR. No se ha podido conectar con la BD";
            //Función que me indica el error cometido al conectar
            echo mysqli_connect_error();
            exit;
        }

    }

   
?>