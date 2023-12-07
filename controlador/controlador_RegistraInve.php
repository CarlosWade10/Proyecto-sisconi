<?php
include("../modelo/conexion.php");

if(isset($_POST['RegistrarProveedor'])){
    if(strlen($_POST['Nombre'])>=1 &&  
    strlen($_POST['Numero'])>=1 &&
    strlen($_POST['Numero2'])>=1 &&
    strlen($_POST['Numero3'])>=1 ){

      $Nombre = $_POST['Nombre'];
      $Numero = $_POST['Numero'];
      $FechaRegistro = $_POST['Numero2'];
      $Estado = $_POST['Numero3'];

      $Insertar = "INSERT INTO inventario(NombreProducto, existencia, PrecioCompra, PrecioVenta) VALUES ('$Nombre','$Numero','$FechaRegistro','$Estado')";
      $resultado = mysqli_query($conexion, $Insertar);
       
      if($resultado){       
       # header('location: ../paginas/Proveedores.php');
       header('location: ../jsParaProyecto/mensajeExitoInve.php');
        #echo "<div class='alert alert-success'>Registro exitoso</div>";    
       
      } else{
        header('location: ../paginas/InventarioV2.php');    
        #echo "<div class='alert alert-danger'>Ha ocurrido un error</div>";
        
      }

     }
       else{  
        header('location: ../jsParaProyecto/mensajeVacío.php');          
        #echo "<div class='alert alert-info'>campos vacíos, por favor llenelos</div>";  
     }
    
} 
?>