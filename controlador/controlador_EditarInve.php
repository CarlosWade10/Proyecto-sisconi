<?php

error_reporting(1);

include("../modelo/conexion.php");

#$id = $_REQUEST['IdEditar'];

if(isset($_POST['RegistrarProveedorE'])){
  if(strlen($_POST['NombreE'])>=1 &&  
    strlen($_POST['NumeroE'])>=1 &&
    strlen($_POST['NumeroE2'])>=1 &&
    strlen($_POST['NumeroE3'])>=1 ){

    $id = $_POST['IDProveedor'];
    $NombreProve = $_POST['NombreE'];
    $NumeroProve =$_POST['NumeroE'];
    $FechaRegProve =$_POST['NumeroE2'];
    $EstadoE =$_POST['NumeroE3'];
    

    $query = "UPDATE inventario SET 
      NombreProducto = '$NombreProve',
      existencia = '$NumeroProve', 
      PrecioCompra = '$FechaRegProve',
      PrecioVenta = '$EstadoE' where ID = $id";
    
    $resultado = $conexion -> query($query);
     
    if($resultado){
          header('location: ../jsParaProyecto/mensajeExitoInve.php');  
      } else{
        header('location: ../paginas/InventarioV2.php'); 
      }
      
    }else{  
      header('location: ../jsParaProyecto/mensajeVacío.php');
  }
}