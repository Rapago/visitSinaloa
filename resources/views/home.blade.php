@extends('header')

@section('header')
    @parent
        <!-- Slider main container -->
        <div class="swiper-container">
            <div class="slide-div-main">
                <div class="slide-div-logo">
                    <img src="{{asset('img/vive-sinaloa-logo.png')}}" alt="logo-vive-sinaloa" class="imgslide-div-logo">
                </div>
                <div class="slide-div-content">
                    <p class="pslide-div-content">Conoce todas las maravillas que hay en el 
                       estado de Sinaloa, en cada lugar encontrará
                       una experiencia extraordinaria.</p>
                    <button class="btnslide-div-content">¡CONTÁCTANOS!</button>
                </div>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="{{asset('img/01-header.jpg')}}" alt="logo-menu"></div>
                <div class="swiper-slide"><img src="{{asset('img/01-header.jpg')}}" alt="logo-menu"></div>
                <div class="swiper-slide"><img src="{{asset('img/01-header.jpg')}}" alt="logo-menu"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <script src="{{asset('js/swiper.js')}}"></script> 
        <script>
        var mySwiper = new Swiper ('.swiper-container', {
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
