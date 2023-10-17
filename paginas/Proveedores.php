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
   

    <!-- libreria de sweetalert2 -->
    <link rel="stylesheet" href="../assets/dist/sweetalert2.min.css">
    <!-- libreria de sweetalert2 -->

    <!-- script para iconos de fontawesome -->
    <script src="https://kit.fontawesome.com/789fae9a0f.js" crossorigin="anonymous"></script>
    <!-- script para iconos de fontawesome -->
     
    <!--
      <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

      <!-- Buttons DataTables -->
	   <link rel="stylesheet" href="../cssDT/buttons.bootstrap.min.css">
      

    <title>SISCONI - Proveedores</title>
 
   <!-- <style>
     .table-responsive{
      height: 350px;
     } 
    </style> -->

</head>
<body>


<div class="container">
 
  <center>
    <h1>REGISTRO DE PROVEEDORES</h1>    
  </center> 
  </div> 
  
 
    <div class="container">
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#ModalIngresar">
    Agregar proveedor
    </button>  
    
    
    <div class="table-responsive">
      <table class="table table-hover ui celled table" id="myTable">
        <thead class="table" style="Background-color: #0d6efd; color:white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Tipo de proveedor</th>
          <th scope="col">Número</th>
          <th scope="col">Fecha de registro</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      
    </table>
  </div>
  
</div>    
  


<!-- Modal1 insertar usuario-->
<div class="modal fade" id="ModalIngresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa-solid fa-user fa-lg"></i> AGREGAR PROVEEDORES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  
      
  <!-- formulario de registro de proveedores

  "../controlador/controlador_RegistrarProve.php"
-->
  
  <form action="../controlador/controlador_RegistrarProve.php" method="post" id="formulario">
  <div class="mb-3">
    <label for="nombreProve2" class="form-label">Nombre del proveedor:</label>
    <input type="text" class="form-control" id="nombreProve2" placeholder="agregar nombre del proveedor" require name="Nombre" onkeypress="return SoloLetras(event);">
  </div>

  <div class="mb-3">
    <label for="TipoProve2" class="form-label">Tipo de proveedor:</label>
    <input type="text" class="form-control" id="TipoProve2" placeholder="agrega el tipo de proveedor" require name="TipoProveedor" onkeypress="return SoloLetras(event);">
  </div>

  <div class="mb-3">
    <label for="NumeroProve2" class="form-label">Número del proveedor:</label>
    <input type="number" class="form-control" id="NumeroProve2" placeholder="agrega el numero del proveedor" require name="Numero" min="0">
  </div>

  <div class="mb-3">
    <label for="FechaReg2" class="form-label">Fecha de registro</label>
    <input type="date" class="form-control" id="FechaReg2" placeholder="agrega la fecha de registro" require name="FechaRegistro">
  </div>


  <div class="mb-3">
   <label for="selectestado2">Estado</label>
   <select name="Estado" id="selectestado2">
     <option value=""></option>
     <option value="disponible">disponible</option>
     <option value="inactivo">inactivo</option>
   </select>
  </div>
  
  <!-- formulario de registro de proveedores-->
        
      </div>
      <div class="modal-footer">

      <!--
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      -->
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-success" id="enviar" name="RegistrarProveedor">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal1 usuario-->




<!-- Modal2 editar usuarios -->
<div class="modal fade" id="ModalEditarProveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-sharp fa-regular fa-pen-to-square fa-lg"></i> Editar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
<!-- formulario editar proveedor -->

<form action="../controlador/controlador_EditarProve.php" method="post" id="formulario2">

<input type="hidden" id="IDProveedor" name="IDProveedor" value="0">

   <div class="mb-3">
    <label for="NombreProve" class="form-label">Nombre del proveedor:</label>
    <input type="text" class="form-control" id="NombreProve" placeholder="agregar nombre del proveedor" require name="NombreE" onkeypress="return SoloLetras(event);">
  </div>

  <div class="mb-3">
    <label for="tipoProve" class="form-label">Tipo de proveedor:</label>
    <input type="text" class="form-control" id="tipoProve" placeholder="agrega el tipo de proveedor" require name="TipoProveedorE" onkeypress="return SoloLetras(event);">
  </div>

  <div class="mb-3">
    <label for="NumeroProve" class="form-label">Número del proveedor:</label>
    <input type="number" class="form-control" id="NumeroProve" placeholder="agrega el numero del proveedor" require name="NumeroE">
  </div>

  <div class="mb-3">
    <label for="fechaReg" class="form-label">Fecha de registro:</label>
    <input type="date" class="form-control" id="fechaReg" placeholder="agrega la fecha de registro" require name="FechaRegistroE">
  </div>


  <div class="mb-3">
   <label for="selectestadoE">Estado</label>
   <select name="EstadoE" id="selectestadoE">
     <option value="disponible">disponible</option>
     <option value="inactivo">inactivo</option>
    <!-- <option value="inactivo">inactivo</option> -->
   </select>
  </div>
            
      <!--
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="../paginas/Proveedores.php" class="btn btn-secondary" >REGRESAR</a>
      -->
    
  <!-- formulario editar proveedor -->
  
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
  <input type="submit" class="btn btn-success" id="enviar2" name="RegistrarProveedorE" value="Confirmar">
        <!--<button type="button" class="btn btn-primary">Save changes</button> -->
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal2  editar usuarios -->





<!-- Modal3  eliminar usuarios-->
<div class="modal fade" id="ModalEliminar>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa-solid fa-trash fa-lg"></i> ¿seguro que quieres eliminar?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" id="Eliminar_usuario">
      <input type="text" id="IDProveedorD" name="IDProveedor" value="0" disabled>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          
        </form>
        </div>
      </div>
  </div>
</div>
<!-- Modal3  eliminar usuarios -->




<!--script del sweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
        //alert("ingrese solo letras");
        MostrarAlerta();
        return false;
    }
}  
</script>
<!-- script de función solo letras -->

<!-- script para mostrar un mensaje sweetAlert2 de error -->
<script src="../jsParaProyecto/MenSololetras.js"></script>


<!--librerias para datatables-->
<script src="../jsDt/jquery-1.12.3.js"></script>
<!--
  -->
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <!--botones DataTables-->	
	<script src="../jsDt/dataTables.buttons.min.js"></script>
	<script src="../jsDt/buttons.bootstrap.min.js"></script>
	<!--Libreria para exportar Excel-->
	<script src="../jsDt/jszip.min.js"></script>
	<!--Librerias para exportar PDF-->
	<script src="../jsDt/pdfmake.min.js"></script>
	<script src="../jsDt/vfs_fonts.js"></script>
	<!--Librerias para botones de exportación-->
	<script src="../jsDt/buttons.html5.min.js"></script>
  
<script>
 // let table = new DataTable('#myTable');
$(document).on("ready", function(){
 listar();
});

var listar = function(){
 var table = $('#myTable').DataTable({
  "ajax":{
   "method": "POST",
   "url": "../controlador/listarProveedores.php" 
  },
  "columns":[
   {"data":"ID"}, 
   {"data":"Nombre"}, 
   {"data":"TipoProveedor"}, 
   {"data":"Numero"}, 
   {"data":"FechaRegistro"}, 
   {"data":"Estado"},
   {"defaultContent":" <button type='button' class='editar btn btn-primary' data-bs-toggle='modal' data-bs-target='#ModalEditarProveedor'><i class='fa-sharp fa-regular fa-pen-to-square fa-lg'></i></button>  <button type='button' class='eliminar btn btn-danger'> <i class='fa-solid fa-trash fa-lg'></i> </button>"}
  ],
  "language": idioma_espanol,
  "responsive":"true",
  "dom":"Bflrtip",
  "buttons":[
    {
     extend:'excelHtml5',
     text:'<i class="fa-sharp fa-solid fa-file-excel fa-2xl" style="color: #0a7e02;"></i>',
     titleAttr: 'Excel'
    },
    {
     extend:'pdfHtml5',
     text:'<i class="fa-solid fa-file-pdf fa-2xl" style="color: #fa0000;"></i>',
     titleAttr: 'PDF'
    },
    {
     text:'<a href="" onclick="window.print()"><i class="fa-sharp fa-solid fa-print fa-2xl" style="color: #007bff;"></i></a>',
     titleAttr: 'Imprimir'
    },
  ]
 });

 obtener_data_editar('#myTable tbody', table);
 Eliminar_registro('#myTable tbody', table);
}

var obtener_data_editar = function(tbody, table){
$(tbody).on("click", "button.editar",function(){
  var data = table.row($(this).parents("tr")).data();
   var ID = $('#IDProveedor').val(data.ID),
    Nombre = $('#NombreProve').val(data.Nombre),
    TipoProveedor = $('#tipoProve').val(data.TipoProveedor),
    Numero = $('#NumeroProve').val(data.Numero),
    FechaRegistro = $('#fechaReg').val(data.FechaRegistro),
    Estado = $('#selectestadoE').val(data.Estado);
});
}

var Eliminar_registro = function(tbody, table){
$(tbody).on("click", "button.eliminar",function(){
  var data = table.row($(this).parents("tr")).data();
  var id = data['ID'],
  Nombre = data['Nombre'],
  TipoProveedor = data['TipoProveedor'],
  Numero = data['Numero'],
  FechaRegistro = data['FechaRegistro'];
  Estado = data['Estado'];
   console.log('El ID de la fila seleccionada es: ' + id +" "+Nombre);
   alertaEliminar(id, Nombre, TipoProveedor, Numero, FechaRegistro, Estado);
});
}

function alertaEliminar(ID, nombre, TP, NP, FR, E){
 Swal.fire({
  title: 'estás seguro que deseas eliminar?',
  //text: "ID del proveedor: "+ ID + " Nombre del proveedor: "+ nombre,
  html: '<b>ID del proveedor:</b> '+ID +'<br>'+
        '<b>Nombre:</b> '+ nombre +'<br>'+
        '<b>Tipo de proveedor:</b> '+ TP +'<br>'+
        '<b>Número del proveedor:</b> '+ NP +'<br>'+        
        '<b>Fecha de Registro:</b> '+ FR +'<br>'+        
        '<b>Estado del proveedor:</b> '+ E +'<br>',        
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminar!'
}).then((result) => {
  if (result.isConfirmed) {
    eliminar_php(ID) 
  }
}) 
}

function eliminar_php(codigo){
 parametros = {ID: codigo};
 $.ajax({
  data: parametros,
  url: "../controlador/controlador_eliminarProve.php",
  type: "POST",
  beforeSend: function(){},
  success: function(){
   Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'operación realizada con éxito',
  showConfirmButton: false,
  timer: 1500
}).then((result)=>{
    window.location = "Proveedores.php"
    //"Eliminado", "la acción ha sido completada", "success"
   }) 
  }
 }) 
}



var idioma_espanol = {
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "not": "Diferente de",
                "after": "Después",
                "notEmpty": "No Vacío"
            },
            "number": {
                "between": "Entre",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de",
                "empty": "Vacío"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStartsWith": "No empieza con",
                "notEndsWith": "No termina con",
                "notEmpty": "No Vacío"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": {
            "0": "Dom",
            "1": "Lun",
            "2": "Mar",
            "4": "Jue",
            "5": "Vie",
            "3": "Mié",
            "6": "Sáb"
        },
        "next": "Próximo"
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro de que desea eliminar %d filas?",
                "1": "¿Está seguro de que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
        }
    },
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:",
            "scroller": "Posición de desplazamiento",
            "search": "Búsqueda",
            "searchBuilder": "Búsqueda avanzada"
        },
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado",
        "emptyError": "El nombre no puede estar vacío.",
        "removeConfirm": "¿Seguro que quiere eliminar %s?",
        "removeError": "Error al eliminar el Estado",
        "renameLabel": "Nuevo nombre para %s:"
    },
    "infoThousands": "."
} 
</script>

</body>
</html>