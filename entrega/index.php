<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
    <title>Datas para agendamento de entrega de CC</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="/">Datas de Renovação/Entrega de CC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Consultar Datas de Renovação <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/entrega">Consultar Datas de Entrega</a>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container">
        
        <h2>Datas para agendamento de entrega de CC</h2>

        <div class="datatable-container mt-5">
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cc-data-table').DataTable( {
                "pageLength": 50,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese.json"
                },
                "ajax": {
                    url: "https://tomahock.com/cenas/agendamento-irn/data-entrega.json?<?=date("Ymdh")?>",
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-143298329-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-143298329-1');
    </script>

  </body>
</html>