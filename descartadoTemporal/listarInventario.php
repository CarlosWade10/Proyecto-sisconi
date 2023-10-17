<?php
include("../modelo/conexion2.php");
include("../controlador/FuncionesInventario.php");

$query = "";
$salida = array();
$query = "SELECT * FROM inventario";

$stmt = $conexion->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll();
$datos = array();
$filtered_rows = $stmt->rowCount();
 foreach($resultado as $fila){
  $imagen = '';
  if ($fila["Imagen"] != '') {
    $imagen = '<img src="img/'.$fila["Imagen"]. '"class="img-thumbnail" width="50" height="50"';
  }else {
    $imagen = '';
  }
  
  $sub_array = array();
  $sub_array[]=$fila["ID"];
  $sub_array[]=$fila["NombreProducto"];
  $sub_array[]=$fila["existencia"];
  $sub_array[]=$fila["PrecioCompra"];
  $sub_array[]=$fila["PrecioVenta"];
  $sub_array[]=$imagen;
  $datos = $sub_array;
 }

 #$salida = array(
  #"draw"            => intval($_POST["draw"]),  
  #"recordsTotal"    => $filtered_rows,
  #"recordsFiltered" => obtener_todos_registros(),
  #"data"            => $datos
 #);

 if (isset($_POST["draw"])) {
    $salida = array(
        "draw"            => intval($_POST["draw"]),
        "recordsTotal"    => $filtered_rows,
        "recordsFiltered" => obtener_todos_registros(),
        "data"            => $datos
    );
} else {
    // Maneja el caso en el que "draw" no está presente en $_POST
    $salida = array(
        "error" => "Índice 'draw' no encontrado en la solicitud POST."
    );
}

 echo json_encode($salida);
