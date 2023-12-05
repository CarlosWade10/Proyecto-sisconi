<?php

include "../modelo/conexion.php";

$id = $_REQUEST['ID'];

$sql = "DELETE FROM ventas WHERE ID = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('location: ../paginas/ventas.php');  
} else{
    echo "No se eliminó el dato";
}