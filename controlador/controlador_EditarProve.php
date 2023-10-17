<?php

error_reporting(1);

include("../modelo/conexion.php");

#$id = $_REQUEST['IdEditar'];

if(isset($_POST['RegistrarProveedorE'])){
  if(strlen($_POST['NombreE'])>=1 && 
    strlen($_POST['TipoProveedorE'])>=1 && 
    strlen($_POST['NumeroE'])>=1 &&
    strlen($_POST['FechaRegistroE'])>=1 &&
    strlen($_POST['EstadoE'])>=1 ){

    $id = $_POST['IDProveedor'];
    $NombreProve = $_POST['NombreE'];
    $TipoProve =$_POST['TipoProveedorE'];
    $NumeroProve =$_POST['NumeroE'];
    $FechaRegProve =$_POST['FechaRegistroE'];
    $EstadoE =$_POST['EstadoE'];
    

    $query = "UPDATE proveedores SET 
      Nombre = '$NombreProve',
      TipoProveedor = '$TipoProve',
      Numero = '$NumeroProve', 
      FechaRegistro = '$FechaRegProve',
      Estado = '$EstadoE' where ID = $id";
    
    $resultado = $conexion -> query($query);
     
    if($resultado){
          header('location: ../jsParaProyecto/mensajeExito.php');  
      } else{
        header('location: ../paginas/Proveedores.php'); 
      }
      
    }else{  
      header('location: ../jsParaProyecto/mensajeVacío.php');
  }
}