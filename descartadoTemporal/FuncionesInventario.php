<?php
 function obtener_todos_registros(){
  include("../modelo/conexion2.php");
  $stmt = $conexion->prepare("SELECT * FROM inventario");
  $stmt -> execute();
  $resultado = $stmt->fetchAll();
  return $stmt->rowCount();   
}