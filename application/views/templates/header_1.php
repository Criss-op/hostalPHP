<!DOCTYPE html>
<html>

    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Impotaciones-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>materialize/css/materialize.min.css"  media="screen,projection"/>

        <link href="<?php echo base_url() ?>materialize/css/style_particulas.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialize/css/style_video.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialize/css/style_video_1.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo base_url() ?>materialize/css/Main.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>materialize/js/datedropper.pro.min.js"></script>

<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <!--   <script>
                    $(document).ready(function () {
                        $(window).scroll(function () {
                            if ($(window).scrollTop() > 600) {
                                $('nav').addClass()('white');
                                
                                
                            } else {
                                $('nav').removeClass('white');
                            }
                        });
                    });
                </script>-->

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
                top: 85%;
                left: 66%;
                transform: translate(-50%,-50%);
                width: 60%;
                background-color: rgba(255,255,255, 0.8); 
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
                color:#fff;
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
                color: #fff;
                background: #fff;
                height: .0625rem;
                text-align: left;
                opacity: 0;
            }

        </style>


        <!--    <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Hostal</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a id="nav1"href="#">Mision</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">¿Quienes Somos?</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </div>
            </nav>
        
            <style>
                nav{
                    position: fixed;
                    background: rgba(0, 0, 0, 0.5);
                    padding: 0px 20px;
                }
                nav li a:hover{
                    background: red;
                }
            </style>-->

        <style>

            /*            body {
                                            background: url('<?php echo base_url() ?>images/Hotel3.jpg');
                                            font-family: 'Roboto Condensed', sans-serif;  
                                            font-size: 16px;
                                            overflow: hidden;
                            text-transform: uppercase;
                            font-weight: bold;
                            font-size: 13px;
                            letter-spacing: 1px;
                            height: 100vh;
                            background-size: cover;
                            background-position: center;
                        }*/
            .menu {
                height: 70px;
                width: 70px;
                right: 70px;
                top: 20px;
                text-align: center;
                position: absolute;
                background: #fff;
                overflow: hidden;
                transition: all 0.2s ease;
                z-index: 999;
            }
            .menu.active {
                width: calc(100% - 140px);
            }
            .menu.active .menuContent * {
                opacity: 1;
            }
            .menu.active span i:nth-child(1) {
                transform: rotate(-45deg) translate(-50%, -50%);
                top: 50%;
            }
            .menu.active span i:nth-child(2) {
                transform: translateX(-100px);
                opacity: 0;
            }
            .menu.active span i:nth-child(3) {
                transform: rotate(45deg) translate(-50%, -50%);
                top: 50%;
            }
            .menu span {
                width: 70px;
                height: 70px;
                position: absolute;
                right: 0;
                cursor: pointer;
                background: #fff;
                z-index: 1;
            }
            .menu span i {
                position: absolute;
                transform-origin: 50% 50%;
                width: 45%;
                height: 2px;
                left: 0;
                right: 0;
                margin: auto;
                background-color: #ccc;
                transition: transform 0.3s ease, opacity 0.1s ease 0.1s;
            }
            .menu span i:nth-child(1) {
                top: 40%;
            }
            .menu span i:nth-child(2) {
                top: 50%;
            }
            .menu span i:nth-child(3) {
                top: 60%;
            }
            .menu .menuContent {
                position: absolute;
                width: 100%;
                height: 100%;
                line-height: 40px;
                right: 0px;
                text-align: center;
            }
            .menu .menuContent * {
                opacity: 0;
            }
            .menu .menuContent ul li {
                display: inline-block;
                margin-left: 50px;
                margin-right: 50px;
                color: #2d3235;
                transition: opacity 0.3s ease 0.3s;
                cursor: pointer;
                position: relative;
            }
            .menu .menuContent ul li:hover:before {
                opacity: 0.8;
                top: 13px;
                left: 20px;
            }
            .menu .menuContent ul li:hover:after {
                opacity: 0.8;
                bottom: 13px;
                left: -20px;
            }
            .menu .menuContent ul li:before, .menu .menuContent ul li:after {
                content: "";
                position: absolute;
                width: 20px;
                height: 2px;
                background: #ccc;
                transition: all 0.3s ease;
            }
            .menu .menuContent ul li:before {
                transform: rotate(-55deg);
                left: 60px;
                top: -30px;
                opacity: 0;
                right: 0;
                margin: auto;
            }
            .menu .menuContent ul li:after {
                transform: rotate(-55deg);
                left: -60px;
                bottom: -30px;
                opacity: 0;
                right: 0;
                margin: auto;
            }




        </style>

    </head>

    <body class="white">
        <nav>

            <li> <a href="#" data-hver="Blog">Blog</a></li>
            <li> <a href="#" data-hver="Services">Services</a></li>
            <li>  <a href="#" data-hver="About">About</a></li>
            <li> 

                <form>
                    <input placeholder="Registre su reservacion" id="outward-date" type="text"  data-dd-lock="from" data-dd-lang="es" data-dd-roundtrip="trip">
                </form> 

            </li>
            <li>  <a href="#" data-hver="Contact">Contact</a></li>

        </nav>
        <div>
        </div>