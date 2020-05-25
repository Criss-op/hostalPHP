<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

<!--        <link href="<?php echo base_url() ?>materialize/css/Main.css" rel="stylesheet"/>-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>materialize/js/datedropper.pro.min.js"></script>
    </head>
    <body>

<!--        <input type="text" data-dd-default-date="24/05/2020" data-dd-large="true" data-dd-lock="from" data-dd-lang="es" data-dd-translate="true">-->
        <input placeholder="Registre su reservacion" id="outward-date" type="text"  data-dd-lock="from" data-dd-lang="es" data-dd-roundtrip="trip">



        <script>
            $('input').dateDropper({

            });


        </script>
    </body>
</html>
