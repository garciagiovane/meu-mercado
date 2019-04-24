<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title><?php print $PAGE_TITLE; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Escolha os produtos que quer no conforto de sua casa">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″ />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="../style/datatables.min.js"></script> -->
    <script type="text/javascript" src="../style/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="../style/jquery.tablesorter.widgets.js"></script>
    <script>
        $(function() {
            $("#dtHorizontalExample").tablesorter();
        });
        /*
        $(document).ready(function() {
            $('#dtHorizontalExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });*/
    </script>
    <style>
        /*.row {
            width: 100%;

        }*/

        #iconeExclusao,
        #iconeAlteracao,
        #iconeCompra {
            width: 30px;
            height: 30px;
        }

        @media (max-width: 991.98px) {
            .container {
                width: 100%;
                padding: 3px;
            }

            .jumbotron {
                width: 100%;
                padding: 0;
            }
        }

        @media (max-width: 767.98px) {
            .container {
                width: 100%;
                padding: 3px;
            }

            .jumbotron {
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>