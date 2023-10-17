<?php

include "../modelo/conexion.php";

$id = $_REQUEST['ID'];

$sql = "DELETE FROM compras WHERE ID = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('location: compras.php');  
} else{
    echo "No se eliminó el dato";
}