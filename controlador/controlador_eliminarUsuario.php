<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php

include "../modelo/conexion.php";

$id = $_POST['ID'];

$sentencia = $conexion -> query("DELETE FROM usuario WHERE ID = $id");

#$sql = "DELETE FROM proveedores WHERE ID = $id";

#$resultado = $conexion->query($sql);

#if($resultado){
    #header('location: ../jsParaProyecto/mensajeExito.php');
    
 #} else{
    #echo "No se eliminó el dato";
#} ?>