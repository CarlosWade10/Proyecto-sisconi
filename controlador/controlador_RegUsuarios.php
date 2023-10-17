<?php
include("../modelo/conexion.php");

if(isset($_POST['RegistrarUsuario'])){
    if(strlen($_POST['Nombre'])>=1 && 
    strlen($_POST['Apellido'])>=1 && 
    strlen($_POST['usuario'])>=1 &&
    strlen($_POST['Confirmar'])>=1){
      $Nombre = $_POST['Nombre'];
      $Apellido = $_POST['Apellido'];
      $Usuario = $_POST['usuario'];
      $Confirmar = $_POST['Confirmar'];
      $Insertar = "INSERT INTO usuario(Nombre, Apellido, usuario, contraseña) VALUES ('$Nombre','$Apellido','$Usuario','$Confirmar')";
      $resultado = mysqli_query($conexion, $Insertar);
        if($resultado){
            echo "<div class='alert alert-success'>te has registrado con exito</div>";   
        } else{
            echo "<div class='alert alert-danger'>Ha ocurrido un error</div>";
        }
        #echo "<div class='alert alert-info'>por favor llene los campos</div>";
    }else{     
     
     echo "<div class='alert alert-info'>por favor llene los campos</div>";
     
    }
    
} 
?>
