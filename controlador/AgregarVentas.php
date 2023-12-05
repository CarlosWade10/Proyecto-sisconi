<?php

include "../modelo/conexion.php";

if (isset($_FILES['Imagen'])){

        $NombreP = $_POST['Nombre'];
        $CantidadP =$_POST['Cantidad'];
        $PrecioVentaP =$_POST['PreVenta'];
        $ImagenP = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
       

        $query = "INSERT INTO ventas (NombreProducto, Cantidad, PrecioVenta, Imagen) VALUES ('$NombreP', '$CantidadP', '$PrecioVentaP', '$ImagenP')";
        $resultado = $conexion -> query($query);
          if($resultado){
              header('location: ../paginas/ventas.php');  
          } else{
              echo "<div class='alert alert-danger' role='alert'>Ha ocurrido un error</div>";
          }


    }


     //$Insertar = "INSERT INTO compras(NombreProducto, Cantidad, PrecioCompra, PrecioVenta, Proveedor, Imagen) VALUES ('$NombreP', '$CantidadP', '$PrecioCompraP', '$PrecioVentaP', '$ProveedorP', '$ImagenP')";
            
?>