<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
      estilos para bootstrap5
    -->
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    
    <!--
      estilos para bootstrap antiguo
      <link rel="stylesheet" href="css/bootstrap.min.css">
    -->
    
    <link rel="stylesheet" href="../estilosPagina/estiloDashboard.css">

    <!--

      <title>Dashboard</title>
    -->

</head>
<body>

  <button class="btn-desple btn btn-success mx-2 mt-3" data-bs-toggle="offcanvas" data-bs-target="#intro"> <ion-icon name="menu-outline"></ion-icon> desplegar menú</button>



   <div class="offcanvas offcanvas-start" id="intro">
    <div class="offcanvas-header">
      <div class="offcanvas-title">
       <!--<button class="btn btn-danger" data-bs-dismiss="offcanvas">cerrar menú</button>--> 
      </div>
    </div>

    <div class="offcanvas-body">

      <button class="btn-login btn btn-info mb-2" onclick="redirecPrincipal()">
        <ion-icon name="reader-outline"></ion-icon> Principal </button>
       
      <button class="btn-login btn btn-info mb-2" onclick="redirecCompras()">
        <ion-icon name="bag-add-outline"></ion-icon> Compras </button>

      <button class="btn-login btn btn-info mb-2" onclick="">
        <ion-icon name="cash-outline"></ion-icon> Ventas </button>
          
      <button class="btn-login btn btn-info mb-2" onclick="redirecInventario()">
        <ion-icon name="reader-outline"></ion-icon> Inventario </button>

      <button class="btn-login btn btn-info mb-2" onclick="redirecProveedores()">
        <ion-icon name="person-outline"></ion-icon> Proveedores </button>
          
      <button class="btn-login btn btn-info mb-2" onclick="redirecUsuarios()">
        <ion-icon name="person-outline"></ion-icon></ion-icon> Usuarios </button>

    </div>
   </div>
    <!--
      estilo para bootstrap 5
    -->
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!--
      estilos para bootstrap (versión antigua)
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
    -->

    <!-- 
     script para iconos 
    -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<script>
  function redirecPrincipal(){
   location.href="../paginas/principal.php"  
  }

  function redirecCompras(){
   location.href="../controlador/compras.php"  
  }

  function redirecProveedores(){
   location.href="../paginas/Proveedores.php"  
  }

  function redirecUsuarios(){
  location.href="../paginas/Usuarios.php" 
  }

  function redirecInventario(){
  location.href="../paginas/Inventario.php"
  }
</script>

</body>
</html>