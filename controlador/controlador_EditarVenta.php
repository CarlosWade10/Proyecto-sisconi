<?php

error_reporting(1);

include("../modelo/conexion.php");

$id = $_REQUEST['IDEditar'];

if (isset($_FILES['Imagen'])){

    $NombreP = $_POST['Nombre'];
    $CantidadP =$_POST['Cantidad'];
    $PrecioVentaP =$_POST['PreVenta'];
    $ImagenP = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $query = "UPDATE ventas SET 
      NombreProducto = '$NombreP',
      Cantidad = '$CantidadP', 
      PrecioVenta = '$PrecioVentaP',
      Imagen = '$ImagenP' where ID = $id";
    
    $resultado = $conexion -> query($query);
      if($resultado){
          header('location: ../paginas/ventas.php');  
      } else{
          echo "<div class='alert alert-danger' role='alert'>Ha ocurrido un error</div>";
      }

}
