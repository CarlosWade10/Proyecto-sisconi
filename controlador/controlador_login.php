<?php
 session_start();
 if(!empty($_POST["Ingresar"])){
  if (!empty($_POST["Usuario"]) and !empty($_POST["Contra"])) {
   $usuario = $_POST["Usuario"];
   $contra = $_POST["Contra"];
    $sql=$conexion->query(" select * from usuario where usuario='$usuario' and contraseña='$contra' ");
     if ($datos=$sql->fetch_object()) {
      $_SESSION["ID"]=$datos->ID;
      $_SESSION["Nombre"]=$datos->Nombre;
      $_SESSION["Apellido"]=$datos->Apellido;
      header("location: paginas/principal.php");
     } else {
      echo "<div class='alert alert-danger'>Acceso denegado</div>";
     }
     
}else{
   echo "<div class='alert alert-info'>campos vacios, favor de llenarlos</div>"; 
     } 
     } 
     #"<div class='alert alert-info'>campos vacios, favor de llenarlos</div>"
                               

?>