
<?php
include("../modelo/conexion.php");

if(isset($_POST['RegistrarProveedor'])){
    if(strlen($_POST['Nombre'])>=1 && 
    strlen($_POST['TipoProveedor'])>=1 && 
    strlen($_POST['Numero'])>=1 &&
    strlen($_POST['FechaRegistro'])>=1 &&
    strlen($_POST['Estado'])>=1 ){

      $Nombre = $_POST['Nombre'];
      $TipoProveedor = $_POST['TipoProveedor'];
      $Numero = $_POST['Numero'];
      $FechaRegistro = $_POST['FechaRegistro'];
      $Estado = $_POST['Estado'];

      $Insertar = "INSERT INTO proveedores(Nombre, TipoProveedor, Numero, FechaRegistro, Estado) VALUES ('$Nombre','$TipoProveedor','$Numero','$FechaRegistro','$Estado')";
      $resultado = mysqli_query($conexion, $Insertar);
       
      if($resultado){       
       # header('location: ../paginas/Proveedores.php');
       header('location: ../jsParaProyecto/mensajeExito.php');
        #echo "<div class='alert alert-success'>Registro exitoso</div>";    
       
      } else{
        header('location: ../paginas/Proveedores.php');    
        #echo "<div class='alert alert-danger'>Ha ocurrido un error</div>";
        
      }

     }
       else{  
        header('location: ../jsParaProyecto/mensajeVacío.php');          
        #echo "<div class='alert alert-info'>campos vacíos, por favor llenelos</div>";  
     }
    
} 
?>

 <!--
  <script type="text/javascript">
   function redirecciónTimer(){
   window.location = "../paginas/Proveedores.php"
     }
   </script>
      <body onload="setTimeout('redirecciónTimer()', 5000)">      
      </body>
      -->