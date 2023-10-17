<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--estilos bootstrapV5
-->
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!--estilos bootstrapV5-->

    <title>SISCONI - Editar Compra</title>
</head>
<body>
    
<?php
    include "../modelo/conexion.php";
    $Id = $_REQUEST['ID'];

     $sql = "SELECT * FROM compras where ID = $Id";
      $resultado = $conexion->query($sql);

      $fila = $resultado->fetch_assoc();
?>

<div class="container">
<br>
<center>
  <h1>SISCONI | Modificar registros</h1>  
</center>

<form action="../controlador/Controlador_EditarCompra.php?IDEditar=<?php echo $fila['ID']?>" method="POST" enctype="multipart/form-data" id="form" clase="form">
  <div class="mb-3 mt-3 mx-5">
    <label for="Nombre" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="ingresa el nombre del producto" value="<?php echo $fila['NombreProducto'] ?>">
  </div>

  <div class="mb-3 mx-5">
    <label for="Cantidad" class="form-label">Cantidad a comprar</label>
    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="ingresa la cantidad del producto" value="<?php echo $fila['Cantidad'] ?>" min="0">
  </div>

  <div class="mb-3 mx-5">
    <label for="preCompra" class="form-label">Precio de compra</label>
    <input type="number" class="form-control" id="preCompra" name="PreCompra" placeholder="ingresa el precio de compra" value="<?php echo $fila['PrecioCompra'] ?>" min="0">
  </div>

  <div class="mb-3 mx-5">
    <label for="preVenta" class="form-label">Precio de venta</label>
    <input type="number" class="form-control" id="preVenta" name="PreVenta" placeholder="ingresa el precio de venta" value="<?php echo $fila['PrecioVenta'] ?>" min="0">
  </div>

  <div class="mb-3 mx-5">
    <label for="Proveedor" class="form-label">Proveedor</label>
    <input type="text" class="form-control" id="Proveedor" name="Proveedor" value="<?php echo $fila['Proveedor'] ?>">
  </div>

  <td><img style="width: 100px;" src="data:image/jpg;base64, <?php echo base64_encode($fila['Imagen']) ?>" alt=""></td>
      <td>

  <div class="mb-3 mx-5">
    <label for="Imagen" class="form-label">Imagen (opcional)</label>
    <input type="File" class="form-control" id="Imagen" name="Imagen" accept="image/*">
  </div>
  
  <!--
    <button style="background-color: white; border:none;" onclick="redirectCompras()">
      </button>
  -->
  
  <input type="submit" class="btn btn-success" value="Registrar compra" id="btn">

  <a href="../controlador/compras.php" class="btn btn-warning">regresar</a>
</form>

</div>
   
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<!--estilo para bootstrap
5-->
<!--estilo para bootstrap 5-->
</body>
</html>