<?php 
        session_start();
        if (empty($_SESSION['Usuario'])){
            //Si no hay usuario logueado no puede estar en esta pagina
            header ('Location: ../../index.php');
            exit;
        }
?>