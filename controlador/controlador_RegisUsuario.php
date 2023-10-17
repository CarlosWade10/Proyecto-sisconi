<?php
include("../modelo/conexion.php");

if(isset($_POST['RegistrarProveedor'])){
    if(strlen($_POST['NombreUsu'])>=1 && 
    strlen($_POST['ApellidosUsu'])>=1 && 
    strlen($_POST['Usuario'])>=1 &&
    strlen($_POST['ContraUsu'])>=1 ){

      $Nombre = $_POST['NombreUsu'];
      $Apellido = $_POST['ApellidosUsu'];
      $Usuario = $_POST['Usuario'];
      $Contra = $_POST['ContraUsu'];

      $Insertar = "INSERT INTO usuario(Nombre, Apellido, usuario, contraseña) VALUES ('$Nombre','$Apellido','$Usuario','$Contra')";
      $resultado = mysqli_query($conexion, $Insertar);
       
      if($resultado){       
       # header('location: ../paginas/Proveedores.php');
       header('location: ../jsParaProyecto/ExitoUsuarios.php');
        #echo "<div class='alert alert-success'>Registro exitoso</div>";    
       
      } else{
        header('location: ../paginas/Usuarios.php');    
        #echo "<div class='alert alert-danger'>Ha ocurrido un error</div>";  
      }

     }
       else{  
        header('location: ../jsParaProyecto/VacíoUsuarios.php');          
        #echo "<div class='alert alert-info'>campos vacíos, por favor llenelos</div>";  
     }
    
} 
?>