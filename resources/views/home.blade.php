@extends('layouts/landing')

@section('title', 'Alerta USIL')

@push('styles')
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/animate.min.css') : secure_asset('alertausil/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/fancybox.min.css') : secure_asset('alertausil/css/fancybox.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/slick/slick.css') : secure_asset('alertausil/css/slick/slick.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/slick/slick-theme.css') : secure_asset('alertausil/css/slick/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/chat.css') : secure_asset('alertausil/css/chat.css') }}"/>

@endpush

@section('content')
    
    @if(session()->has('success_consulted'))

        <div class="alert alert-info alert-dismissible fade show text-center m-0 font-alerta" role="alert">
            <i class="fa fa-check" aria-hidden="true"></i> {{ session()->get('success_consulted') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<!-- Topbar Admin -->
@auth
    @include('includes.admin.topbar')
@endauth

<!-- Topbar -->
@include('includes.internas.topbar')

<!-- Menu -->
@include('includes.landing.menu')

<!-- Slider -->
@include('includes.landing.slider')

<!-- Bienvenida -->
@include('includes.landing.bienvenida')

<!-- Expertos -->
@include('includes.landing.expertos2')

<!-- Categorías -->
<!-- @include('includes.landing.categorias') -->

<!-- ABC -->
@include('includes.landing.abc')

<!-- Información Actualizada -->

<!-- Multimedia -->

<!-- Chat flotante -->
@include('includes.landing.chat')

<!-- Footer -->
@include('includes.internas.footer')

<!--/ Page layout -->
    @push('scripts')
        <script src="{{ env('APP_ENV') === 'local' ?  asset('alertausil/js/fancybox.min.js') : secure_asset('alertausil/js/fancybox.min.js') }}"></script>
        <script src="{{ env('APP_ENV') === 'local' ?  asset('alertausil/js/slick/slick.min.js') : secure_asset('alertausil/js/slick/slick.min.js') }}"></script>
        <script>
        $(document).ready(function(){
            $('.single-item').slick({
                dots:true
            })
            $('.multiple-items').slick(
                {
                    dots: true,
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 3,
                    responsive: [
                        {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                        }
                    ]
                }
            );

            
        });
        </script>
        
        <script>
            (function($) {
                $(document).ready(function() {
                    var $chatbox = $('.chatbox'),
                        $chatboxTitle = $('.chatbox__title'),
                        $chatboxTitleClose = $('.chatbox__title__close'),
                        $chatboxCredentials = $('.chatbox__credentials');
                    $chatboxTitle.on('click', function() {
                        $chatbox.toggleClass('chatbox--tray');
                    });
                    $chatboxTitleClose.on('click', function(e) {
                        e.stopPropagation();
                        $chatbox.addClass('chatbox--closed');
                    });
                    $chatbox.on('transitionend', function() {
                        if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
                    });
                    
                });
            })(jQuery);
        </script>
    @endpush
@endsection
