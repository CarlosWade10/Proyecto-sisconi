<?php

error_reporting(1);

include("../modelo/conexion.php");

$id = $_REQUEST['IDEditar'];

if (isset($_FILES['Imagen'])){

    $NombreP = $_POST['Nombre'];
    $CantidadP =$_POST['Cantidad'];
    $PrecioCompraP =$_POST['PreCompra'];
    $PrecioVentaP =$_POST['PreVenta'];
    $ProveedorP =$_POST['Proveedor'];
    $ImagenP = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $query = "UPDATE compras SET 
      NombreProducto = '$NombreP',
      Cantidad = '$CantidadP',
      PrecioCompra = '$PrecioCompraP', 
      PrecioVenta = '$PrecioVentaP',
      Proveedor = '$ProveedorP',
      Imagen = '$ImagenP' where ID = $id";
    
    $resultado = $conexion -> query($query);
      if($resultado){
          header('location: compras.php');  
      } else{
          echo "<div class='alert alert-danger' role='alert'>Ha ocurrido un error</div>";
      }

}