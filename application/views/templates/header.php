<!DOCTYPE html>
<html>

    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Impotaciones-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>materialDesign/css/materialize.min.css"  media="screen,projection"/>-->-->

        <link href="<?php echo base_url() ?>materialDesign/css/style_particulas.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialDesign/css/style_video.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialDesign/css/style_galeryImages.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>materialDesign/css/style_reservacion.css" rel="stylesheet" type="text/css"/>
        
        <!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">-->
        <script src="https://kit.fontawesome.com/9e1cbbfb67.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>materialDesign/js/datedropper.pro.min.js"></script>

        <!--Style navbar Principal-->
        <style>

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

