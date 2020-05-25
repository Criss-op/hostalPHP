<!-- NavBar Principal-->
<div class='menu'>
    <span class='toggle'>
        <i></i>
        <i></i>
        <i></i>
    </span>
    <div class='menuContent'>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>Testimonial</li>
            <li>Configuration</li>
            <li>About us</li>
        </ul>
    </div>
</div>

<!--Particulas-->
<!--<div id="particles-js"></div>-->

<!--Video Principal-->
<video id="video_principal" src="<?php echo base_url() ?>images/video.mp4" autoplay loop muted></video>
<br>
<br>

<style >
    .container{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;

        position: relative;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 1000px;
        transform-style: preserve-3d;

        .box{
            position: relative;
            width: 300px;
            height: 400px;
            margin: 20px 0;
            /*            perspective: 1000px;*/
            overflow: hidden;
            transform-style: preserve-3d;
        }
        .container .box .imgBx{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-origin: top;
            transform-style: preserve-3d;
            transition: 0.5s;
            transition-delay: 0.2s;
        }
        .container .box:hover .imgBx{
            transform: rotateX(-90deg);
            opacity: 0;
            transition-delay: 0s;
        }
        .container .box .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;

        }
        .container .box:hover .contentBx{
            transform: rotateX(0deg);
            opacity: 1;
            transition-delay: 0.2s;

        }
        .container .box .contentBx{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            transform-origin: bottom;
            transform-style: preserve-3d;
            transition: 0.5s;
            transform: rotateX(90deg);
            opacity: 0;

        }


    }
</style>
<div class="container">

    <div class="box">

        <div class="imgBx">
            <img src="<?php echo base_url() ?>images/Hotel.jpg">

        </div>
        <div class="contentBx">
            <div>
                <h2>Post Title</h2>
                <p>
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                </p>
            </div>


        </div>
    </div>
    <div class="box">
        <div class="imgBx">
            <img src="<?php echo base_url() ?>images/Hotel.jpg">

        </div>
        <div class="contentBx">
            <div>
                <h2>Post Title</h2>
                <p>
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                </p>
            </div>
        </div>


    </div>
    <div class="box">
        <div class="imgBx">
            <img src="<?php echo base_url() ?>images/Hotel.jpg">

        </div>
        <div class="contentBx">
            <div>
                <h2>Post Title</h2>
                <p>
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                    Blaa blaa bla
                </p>
            </div>
        </div>


    </div>



</div>
<br>
<br>
<!--<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url() ?>images/Hotel3.jpg"></div>
</div>
<div class="section with">
    <div class="row container">
        <h3 class="header gray-text">Hostal Gonzalez</h3>
        <p class="grey-text lighten-3-3 lighten-3">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url() ?>images/pieza.jpg"></div>
</div>
<div class="section with">
    <div class="row container">
        <h3 class="header gray-text">Hostal Gonzalez</h3>
        <p class="grey-text lighten-3-3 lighten-3">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url() ?>images/pieza2.jpg"></div>
</div>
<div class="section with">
    <div class="row container">
        <h3 class="header gray-text">Hostal Gonzalez</h3>
        <p class="grey-text lighten-3-3 lighten-3">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url() ?>images/pieza3.jpg"></div>
</div>-->


<script src="<?php echo base_url() ?>materialize/js/particles.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>materialize/js/stats.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>materialize/js/app.js" type="text/javascript"></script>


<!--<script>

    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>-->

<!--<script
    src="https://code.jquery.com/jquery-3.3.1.js"
></script>-->
<script>
    $('.toggle').on('click', function () {
        $('.menu').toggleClass('active');
    });
</script>
<script>
    $('input').dateDropper({

    });


</script>
