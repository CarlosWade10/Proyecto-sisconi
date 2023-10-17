
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/estilo.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilosPagina/estilogin.css">
    
    <link rel="stylesheet" href="assets/dist/sweetalert2.min.css">
    <title>SISCONI - Inicio de sesión</title>
</head>
<body>


  <div class="container">
    <form class="form" method="post">
        <H1>INICIAR SESIÓN</H1>
        <?php 
         include "modelo/conexion.php";
         include "controlador/controlador_login.php";
        ?>
        <div class="form-group">
        <label for="Usuario"><span class="glyphicon glyphicon-user"></span> Usuario:</label>
         <input class="form-control" type="text" id="Usuario" name="Usuario" placeholder="ingresa el usuario">
        </div>

        <div class="form-group">
        <label for="Contra"><span class="glyphicon glyphicon-lock"></span> contraseña:</label> 
        <input class="form-control" type="password" id="Contra" name="Contra" placeholder="ingresa la contraseña">
        </div>

        <div class="form-group registrar">
        <!--<button class="btn btn-success" name="Ingresar" >ingresar</button>-->
        <input name="Ingresar" class="btn btn-success" type="submit" value="ingresar">
        <a href="paginas/RegistrarUsuarios.php">¿aún no tienes cuenta? Registrate</a>
        </div>

                

      </form>

  </div>    

 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="assets/dist/sweetalert2.all.min.js"></script>
</body>
</html>
