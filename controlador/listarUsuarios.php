<?php
include("../modelo/conexion.php");

$query = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
 die("error");
}else{
 while($data = mysqli_fetch_assoc($resultado)){
  $arreglo["data"][] = $data;  
 }
 echo json_encode($arreglo);   
}

mysqli_free_result($resultado);
mysqli_close($conexion);