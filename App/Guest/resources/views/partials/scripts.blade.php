<script>
    $(function(){
        $('.carousel.carousel-slider').carousel({
            full_width: true
        });
        setInterval(function() {
            $('.carousel.carousel-slider').carousel('next');
        }, 5000);
        $('.modal.errors').modal({
            dismissible: true,
            opacity: .5
        }).modal('open');
    });
</script>