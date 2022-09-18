@extends('layouts/landing')

@section('title', 'Artículos Científicos')
@push('styles')
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/fancybox.min.css') : secure_asset('alertausil/css/fancybox.min.css')}}">
@endpush
@section('content')
    <!-- Topbar -->
    @include('includes.internas.topbar')

    <!-- Menu -->
    @include('includes.landing.menu')
    
    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/expertos/banner.jpg', 
                                            'icon'=> '/alertausil/img/icons/expertos.png', 
                                            'message' => 'Artículos científicos'])
        
    <!-- Breadcrumbs -->

    
    <!-- Contenido -->
    @include('includes.internas.articulos-cientificos')


    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script src="{{ env('APP_ENV') === 'local' ?  asset('alertausil/js/fancybox.min.js') : secure_asset('alertausil/js/fancybox.min.js') }}"></script>

    @endpush
@endsection