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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de dataTable</title>
   <!-- <link rel="stylesheet" href="../cssDt/bootstrap.min.css">
	<link rel="stylesheet" href="../cssDt/dataTables.bootstrap.min.css">
	<!-- Buttons DataTables 
	<link rel="stylesheet" href="../cssDt/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="../cssDt/font-awesome.min.css">-->

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>
<body>

 <div class="container">
  <center>
    <h1>Prueba dataTable</h1>
  </center>  
 </div>   
 <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
</table>

<script src="../jsDt/jquery-1.12.3.js"></script>
<!--<script src="../jsDt/bootstrap.min.js"></script>
	<script src="../jsDt/jquery.dataTables.min.js"></script>
	<script src="../jsDt/dataTables.bootstrap.js"></script>
	<!--botones DataTables	
	<script src="../jsDt/dataTables.buttons.min.js"></script>
	<script src="../jsDt/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel
	<script src="../jsDt/jszip.min.js"></script>
	<!--Librerias para exportar PDF
	<script src="../jsDt/pdfmake.min.js"></script>
	<script src="../jsDt/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación
	<script src="../jsDt/buttons.html5.min.js"></script>-->

  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
 // let table = new DataTable('#myTable');

$(document).on("ready", function(){
 listar();
});

var listar = function(){
 var table = $('#myTable').DataTable({
  "ajax":{
   "method": "POST",
   "url": "../controlador/listarDataTable.php" 
  },
  "columns":[
   {"data":"ID"}, 
   {"data":"Nombre"}, 
   {"data":"apellidoPat"}, 
   {"data":"apellidoMat"} 
  ]
 });
}

</script>
</body>
</html>