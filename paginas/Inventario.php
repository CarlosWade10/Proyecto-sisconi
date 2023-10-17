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
      

    <title>SISCONI - Inventario</title>
 
   
</head>
<body>


<div class="container">
 
  <center>
    <h1>Inventario</h1>    
  </center> 
  </div> 
  
  <div class="container">       
    <div class="table-responsive">
      <table class="table table-hover ui celled table" id="myTable">
        <thead class="table" style="Background-color: #0d6efd; color:white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre del producto</th>
          <th scope="col">Existencia</th>
          <th scope="col">Precio compra</th>
          <th scope="col">Precio venta</th>
          <th scope="col">Imagen</th>
        </tr>
      </thead>
      
    </table>
  </div>
  
</div>    
  



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
  "ajax": {
    "method": "POST",
   "url": "../controlador/pruebaInventario.php"
  },
                "columns": [
                    { "data": "id" },
                    { "data": "np" },
                    { "data": "exis" },
                    { "data": "PC" },
                    { "data": "PV" },
                    { "data": "Imagen" }
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