<?php

include "../modelo/conexion.php";

if (isset($_FILES['Imagen'])){

        $NombreP = $_POST['Nombre'];
        $CantidadP =$_POST['Cantidad'];
        $PrecioCompraP =$_POST['PreCompra'];
        $PrecioVentaP =$_POST['PreVenta'];
        $ProveedorP =$_POST['Proveedor'];
        $ImagenP = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
       

        $query = "INSERT INTO compras (NombreProducto, Cantidad, PrecioCompra, PrecioVenta, Proveedor, Imagen) VALUES ('$NombreP', '$CantidadP', '$PrecioCompraP', '$PrecioVentaP', '$ProveedorP', '$ImagenP')";
        $resultado = $conexion -> query($query);
          if($resultado){
              header('location: compras.php');  
          } else{
              echo "<div class='alert alert-danger' role='alert'>Ha ocurrido un error</div>";
          }


    }


     //$Insertar = "INSERT INTO compras(NombreProducto, Cantidad, PrecioCompra, PrecioVenta, Proveedor, Imagen) VALUES ('$NombreP', '$CantidadP', '$PrecioCompraP', '$PrecioVentaP', '$ProveedorP', '$ImagenP')";
            
?>
