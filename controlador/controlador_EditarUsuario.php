<?php

error_reporting(1);

include("../modelo/conexion.php");

#$id = $_REQUEST['IdEditar'];

if(isset($_POST['RegistrarProveedorE'])){
  if(strlen($_POST['NombreUsu'])>=1 && 
    strlen($_POST['ApellidosUsu'])>=1 && 
    strlen($_POST['Usuario'])>=1 &&
    strlen($_POST['ContraUsu'])>=1 ){

    $id = $_POST['IDProveedor'];
    $NombreUsu = $_POST['NombreUsu'];
    $ApellidoUsu =$_POST['ApellidosUsu'];
    $Usuario =$_POST['Usuario'];
    $Contra =$_POST['ContraUsu'];
    

    $query = "UPDATE usuario SET 
      Nombre = '$NombreUsu',
      Apellido = '$ApellidoUsu',
      usuario = '$Usuario', 
      contraseña = '$Contra' where ID = $id";
    
    $resultado = $conexion -> query($query);
     
    if($resultado){
          header('location: ../jsParaProyecto/ExitoUsuarios.php');  
      } else{
        header('location: ../paginas/Proveedores.php'); 
      }
      
    }else{  
      header('location: ../jsParaProyecto/VacíoUsuarios.php');
  }
}