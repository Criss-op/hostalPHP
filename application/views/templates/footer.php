
<!--      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<!--Script JS-->
<script src="<?php echo base_url() ?>materialDesign/js/particles.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>materialDesign/js/stats.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>materialDesign/js/app.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url() ?>materialDesign/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>materialDesign/js/custom.js"></script>

<!--Script parallax-->
<script>

    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });
</script>

<!--<script
    src="https://code.jquery.com/jquery-3.3.1.js"
></script>-->

<!--Script Navbar Pribcipal-->
<script>
    $('.toggle').on('click', function () {
        $('.menu').toggleClass('active');
    });
</script>
<!--Script datePickers-->
<script>
    $('input').dateDropper({

    });
</script>

</body>

</html>