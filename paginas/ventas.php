<?php
include("../adicionales/encabezado.php");
?>

<?php
include("../adicionales/dashboard.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- libreria de sweetalert2 -->
    <link rel="stylesheet" href="../assets/dist/sweetalert2.min.css">
    <!-- libreria de sweetalert2 -->
    
    <!--estilos bootstrapV5

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
-->
    <!--estilos bootstrapV5-->

    <title>SISCONI - Ventas</title>
</head>
<body>

    
<div class="container">
<br>
<center>
 <h1>venta de productos</h1>   
</center> 
<br>
<div class="container">
<a href="registroVentas.php" class="btn btn-primary mb-3">Agregar</a>
 

<div class="table-responsive">

<table class="table align-middle table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio de venta</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
   
   <?php
    include "../modelo/conexion.php";
     $sql = "select * from ventas";
      $resultado = $conexion->query($sql);

      while($fila = $resultado->fetch_assoc()){ ?> 

    <tr>
      <th scope="row"><?php echo $fila['ID'] ?></th>
      <td><?php echo $fila['NombreProducto'] ?></td>
      <td><?php echo $fila['Cantidad'] ?></td>
      <td><?php echo $fila['PrecioVenta'] ?></td>-
      <td><img style="width: 60px;" src="data:image/jpg;base64, <?php echo base64_encode($fila['Imagen']) ?>" alt=""></td>
      <td>
       <a href="../paginas/Vista_EditarVenta.php?ID=<?php echo $fila['ID']?>" class="btn btn-warning">editar</a>
       <a href="../controlador/controlador_EliminarVenta.php?ID=<?php echo $fila['ID']?>" class="btn btn-danger">eliminar</a> 
      </td>
    </tr>
  </tbody>

  <?php }?>

</table>

</div>

</div>

</div>

<!--estilo para bootstrap

<script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
5-->
<!--estilo para bootstrap 5-->

<!--script del sweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--script del sweetAlert2-->

</body>
</html>