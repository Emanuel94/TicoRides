<!DOCTYPE html>
<html lang="en">
    <head> 
         <!-- Fonts -->
         <link rel="stylesheet" href="../public/css/style.css">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--  /* boostrap*/ -->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tico Rides</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/docs/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--     <script src="../bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>
 -->    <title>Tico Rides</title>
    </head>
 <body>
    @extends('layouts.app')
    @section('content')
    <div class="panel-body">   
     <table  id="myTable">
     <THEAD>
        <th>My Ride</th>
        <th>Start</th>
        <th>End</th>
        <th>Activo</th>
     </THEAD>
       <tbody>  
        <tr>    
          <td>pop</td>
          <td> Dulce Nombre</td>
          <td>Cedral</td>
        </tr>
       </tbody> 
     </table>
</div>
     <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" ></script>
     <script>   
     $(document).ready(function(){
    $('#myTable').DataTable();

        "processing":true,
        "serverSide":true,
         "ajax":"/api/animals",


     });
     </script>

     script type="text/javascript">
                 $(document).ready(function(){
                     $('#animals').DataTable({

                        "processing":true,
                        "serverSide":true,
                        "ajax":"/api/animals",
                        "columns":[
                            {data: 'idUser'},
                            {data: 'idFarm'},
                            {data: 'animalNumber'},                            
                            {data: 'name'},
                            {data: 'breed'},
                            {data: 'gender'},
                        ],
                        "language": {
                            "lengthMenu": "Visualizar _MENU_ registros por página",
                            "zeroRecords": "No hay resultados - ",
                            "info": "Viendo página _PAGE_ de _PAGES_",
                            "search":         "Buscar:",
                            "loadingRecords": "Cargando...",
                            "processing":     "Procesando...",
                            "infoEmpty": "Registro no disponibles",
                            "infoFiltered": "(Filtrar _MAX_ total registros)",
                             "paginate": {
                                "first":      "Primero",
                                "last":       "último",
                                "next":       "Siguiente",
                                "previous":   "Anterior"
                            },
                        }
                     });
                 });
             </script>

 </body>
</html>
   @endsection

<!--      <script> type="text/javascript" src="assets/js/bootstrap.js"></script>
 -->
     
     


