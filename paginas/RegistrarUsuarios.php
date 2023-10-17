<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--
      estilos para bootstrap5
      <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    -->

   <!--
      link para bootstrat (versión antiga)
    -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../estilosPagina/estiloRegUsu.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <link rel="stylesheet" href="../assets/dist/sweetalert2.min.css">
    <title>SISCONI - registro de usuario</title>
</head>
<body>

    <div class="container">
      <form novalidate class="form needs-validation" action="" method="post" id="formulario">
        <h1 class="">REGISTRO DE USUARIOS</h1>

        <?php
        include("../controlador/controlador_RegUsuarios.php");
        ?>      

<div class="form-group ">
    <label for="Nombre">Nombre:</label>
     <input class="form-control" type="text" id="Nombre" name="Nombre" placeholder="ingresa tu nombre" onkeypress="return SoloLetras(event);">
</div>

<div class="form-group ">
    <label for="Apellido">Apellido:</label> 
     <input class="form-control" type="text" id="Apellido" name="Apellido" placeholder="escribe tu apellido" onkeypress="return SoloLetras(event);">
</div>

<div class="form-group ">
    <label for="Usuario">Usuario:</label>
     <input class="form-control" type="text" id="Usuario" name="usuario" placeholder="escribe el usuario">
</div>


     <div class="form-group">
         <label for="Confirmar">Contraseña:</label>
         <input class="form-control" type="password" id="Confirmar" name="Confirmar" placeholder="Ingresar la contraseña">
         <span class="show-btn"><i class="fas fa-eye"></i></span>
           
        </div>


    <div class="form-group registrar">
     <!--<button class="btn btn-success" name="Ingresar" >ingresar</button>-->
      <input name="RegistrarUsuario" class="btn btn-success" type="submit" value="Registrar usuario">
      <a href="../Login.php">¿ya tienes cuenta? Inicia sesión</a>
    </div>
      </form>  
      
    </div>    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--
      estilo para bootstrap 5
      <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    -->

    <!--
      estilos para bootstrap (versión antigua)
    -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../assets/dist/sweetalert2.all.min.js"></script>
    
<!--script del sweetAlert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
     const passField = document.getElementById("Confirmar");
     const showBtn = document.querySelector("span i");
     
     showBtn.onclick = (()=> {
      if(passField.type === "password"){
        passField.type = "text";
        showBtn.classList.add("hide-btn")
      }else{
       passField.type = "password";
       showBtn.classList.remove("hide-btn"); 
      }  
     })
    </script>
    
  <!-- script de función solo letras -->
    <script>
     function SoloLetras(e){
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toString();
      letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyzáéíóúÁÉÍÓÚ";
       
       especiales = [8,13, 32];
       tecla_especial = false
       for(var i in especiales){
        if(key == especiales[i]){
         tecla_especial = true;
          break;   
        }
       }
        if(letras.indexOf(tecla) == -1 && !tecla_especial){
        MostrarAlerta();
        return false;
    }
}  
</script>
<!-- script de función solo letras -->


<!-- script para mostrar un mensaje sweetAlert2 de error -->
<script src="../jsParaProyecto/MenSololetras.js"></script>


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


 <!--<script src="../jsParaProyecto/MenRegUsu.js"></script>-->            
</body>
</html>