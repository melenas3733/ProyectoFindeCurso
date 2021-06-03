<?php
 require './../DAO/DAOUsuario.php';
 require './../DB_Conector/Conector_DB.php';

 crearSesion($fila);
 session_start();
 if(!empty($_SESSION['login_user']))
 {
 $_SESSION['login_user']='';
 session_destroy();
 }
 header("Location: ../../index.php");
 //Me creo un enlace a otra pagina donde imprimo la sesion
 //header('Location: ../../index.php');
 //header('Location: ./UsuarioLogueado.php');
?>