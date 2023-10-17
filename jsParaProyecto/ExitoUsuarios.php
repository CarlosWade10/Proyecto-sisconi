<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de aprobación</title>

    <!-- libreria de sweetalert2 -->
    <link rel="stylesheet" href="../assets/dist/sweetalert2.min.css">
    <!-- libreria de sweetalert2 -->

</head>
<body onload="MostrarAlerta(), setTimeout('redirecciónTimer()', 3000)">
    

<script src="MenRegUsu.js">   
</script>

<!--script del sweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--script del sweetAlert2-->

<script type="text/javascript">

   function redirecciónTimer(){
   window.location = "../paginas/Usuarios.php"
     }
   </script>

</body>
</html>