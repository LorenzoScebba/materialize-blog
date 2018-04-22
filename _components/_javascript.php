<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('.preloader-background').fadeOut('slow');
        $('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
    });
</script>
<script about="Get Carousel and load it">

    M.AutoInit();
    var elem = document.querySelector('.carousel');
    var instance = M.Carousel.init(elem, {
        indicators: true,
        noWrap: true,
    });


    //elem = document.querySelector('.materialboxed');
    //instance = M.Materialbox.init(elem, options);

</script>
