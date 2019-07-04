<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
    <title>Datas para marcações de renovação de CC</title>

  </head>
  <body>
    <div class="container">
        <h1>Datas para marcações de CC</h1>

        <table id="cc-data-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Distrito</th>
                    <th>Concelho</th>
                    <th>Local</th>
                    <th style="width: 100px;">Data</th>
                </tr>
            </thead>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cc-data-table').DataTable( {
                "pageLength": 50,
                "ajax": {
                    url: "https://tomahock.com/cenas/agendamento-irn/data.json?<?=date("Ymdhi")?>",
                    dataSrc: ''
                },
                "columns": [
                    { "data": "distrito" },
                    { "data": "concelho" },
                    { "data": "local" },
                    { "data": "data" }
                ]
            } );
        } );
    </script>
  </body>
</html>