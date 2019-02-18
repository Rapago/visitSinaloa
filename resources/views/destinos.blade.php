@extends('header')

@section('header')
    @parent
    <div class="swiper-container slider-size">
            <div class="slide-div-contenido">
                <div class="slide-div-content-destinos">
                    <p class="parrafo-slide-div-content">Destinos Turísticos</p>
                </div>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><div class="cho-25"></div></div>
                <div class="swiper-slide"><div class="fue-3"></div></div>
                <div class="swiper-slide"><div class="bad-2"></div></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <script src="{{asset('js/swiper.js')}}"></script> 
        <script>
        var SliderDestinos = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            effect: 'fade',
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },
            autoplay: {
                delay: 5000,
            },
        })
        </script>
    
</body>
</html>
@endsection