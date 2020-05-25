<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>materialize/js/datedropper.pro.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="<?php echo base_url() ?>materialize/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialize/css/style_video.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialize/css/style_video_1.css" rel="stylesheet" type="text/css"/>

        <style>
            /*            body{
                            margin: 0;
                            padding: 0;
                            text-align: center;
                            font-family: 'Roboto', sans-serif;
                            background-size: cover;
                            
                        }*/
            nav{
                margin: 0;
                padding: 0;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                background-size: cover;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                width: 60%;
                background-color: rgba(134,132,132, .568); 
                padding: 1.25rem 0;
                border-radius: 1.4375rem; 
            }
            li{

                list-style: none;
                display: inline-block;

            }
            a{
                display: block;
                font-size: 1.2rem;
                padding: .9375rem;
                text-decoration: none;
                color: #fff;
                font-weight: 800;
                text-transform: uppercase;
                margin: 0 .625rem;
                position: relative;
                transition: all ease 2s;

            }
            a:hover{
                color:#555;
                z-index: 1;
            }
            a::after{
                position: absolute;
                bottom: 0;
                left:0;
                right: 0;
                margin: 0;
                width: 0%;
                content: '';
                color: transparent;
                background: #fff;
                height: .0625rem;
                text-align: left;
                opacity: 0;
            }

        </style>
    </head>
    <body class="black">
        <nav>
            
            <form>
                <input placeholder="Registre su reservacion" id="outward-date" type="text"  data-dd-lock="from" data-dd-lang="es" data-dd-roundtrip="trip">
            </form>
            
        </nav>




        <script>
            $('input').dateDropper({

            });
        </script>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>materialize/js/custom.js"></script>
    </body>
</html>
