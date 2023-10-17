<?php
// Conecta a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'sisconi_klary');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener todas las imágenes
$sql = "SELECT * FROM inventario";
$resultado = $conexion->query($sql);

$imagenes = array();

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $imagen = '<img src="data:image/jpeg;base64,' . base64_encode($fila['Imagen']) . '" width="90" height="90" />';
        $imagenes[] = array('id' => $fila['ID'], 'Imagen' => $imagen, 
        'np' => $fila['NombreProducto'], 'Imagen' => $imagen, 
        'exis' => $fila['existencia'], 'Imagen' => $imagen, 
        'PC' => $fila['PrecioCompra'], 'Imagen' => $imagen,
        'PV' => $fila['PrecioVenta'], 'Imagen' => $imagen);
    }
}

// Devuelve las imágenes como JSON
echo json_encode(array('data' => $imagenes));

$conexion->close();
?>
