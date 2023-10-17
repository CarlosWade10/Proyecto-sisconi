<?php
session_start();
 if(empty($_SESSION["ID"])){
  header("location: ../Login.php");  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--

        <title>Páginal principal</title>
    -->
    <link rel="stylesheet" href="../estilosPagina/estiloHeader.css">


</head>
<body>
    <header>
     <div>
      <?php
        echo "Gusto en verte:"." ". $_SESSION["Nombre"]." ". $_SESSION["Apellido"]         
        ?>
     </div>  

     <a class="salir" href="../controlador/controlador_cerrar_sesion.php">Cerrar Sesión</a>
    </header>