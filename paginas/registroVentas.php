<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
      estilos para bootstrap5
    -->
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <!--
      link para bootstrat (versión antiga)
      <link rel="stylesheet" href="../css/bootstrap.min.css">  
      <link rel="stylesheet" href="../estilosPagina/estiloRegUsu.css">
    -->


    <title>SISCONI - Nueva venta</title>
</head>
<body>
  
<center>
  <h1 class="mt-3">REGISTRO DE LAS VENTAS</h1>  
</center>

<?php
     include("../controlador/AgregarVentas.php");
?>

<div class="container">

<form action="../controlador/AgregarVentas.php" method="POST" enctype="multipart/form-data" id="form" clase="form">
  <div class="mb-3 mt-3 mx-5">
    <label for="Nombre" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="ingresa el nombre del producto">
  </div>

  <div class="mb-3 mx-5">
    <label for="Cantidad" class="form-label">Cantidad a comprar</label>
    <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="ingresa la cantidad del producto" min="0">
  </div>

  <div class="mb-3 mx-5">
    <label for="preVenta" class="form-label">Precio de venta</label>
    <input type="number" class="form-control" id="preVenta" name="PreVenta" placeholder="ingresa el precio de venta" min="0">
  </div>

  <div class="mb-3 mx-5">
    <label for="Imagen" class="form-label">Imagen (opcional)</label>
    <input type="File" class="form-control" id="Imagen" name="Imagen" accept="image/*">
  </div>
  
  <!--
    <button style="background-color: white; border:none;" onclick="redirectCompras()">
      </button>
  -->
  
  <input disabled type="submit" class="btn btn-success" value="Registrar compra" id="btn">

  <a href="../paginas/ventas.php" class="btn btn-warning">regresar</a>
</form>
<br>
</div>


    <!--
      estilos para bootstrap (versión antigua)
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
    -->

<!-- estilo para bootstrap 5 -->
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

<!--
    <script>
  function redirecPrincipal(){
   location.href="compras.php"  
  }
</script>
-->
<script>
 let form = document.querySelector('#form');
 let btn = document.querySelector('#btn');

 function validar(){
  let desabilitar = false;

  if(form.Nombre.value === ""){
   desabilitar = true;
  }

  if(form.Cantidad.value === ""){
   desabilitar = true;
  }


  if(form.preVenta.value === ""){
   desabilitar = true;
  }

  if(desabilitar === true){
   btn.disabled = true; 
  }else{
    btn.disabled = false; 
  }
 }

 form.addEventListener('keyup', validar);

</script>

</body>
</html>