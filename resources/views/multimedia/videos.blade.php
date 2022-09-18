@extends('layouts/landing')

@section('title', 'Videos - Multimedia')
@push('styles')
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/fancybox.min.css') : secure_asset('alertausil/css/fancybox.min.css')}}">
@endpush

@section('content')
    <!-- Topbar Admin -->
    @auth
        @include('includes.admin.topbar')
    @endauth
    
    <!-- Topbar -->
    @include('includes.internas.topbar')
    
    <!-- Menu -->
    @include('includes.landing.menu')

    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/multimedia/podcast.jpg', 
                                            'icon'=> '/alertausil/img/icons/multimedia.png',
                                            'message' => 'Multimedia Covid 19'])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.videos')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script src="{{ env('APP_ENV') === 'local' ?  asset('alertausil/js/fancybox.min.js') : secure_asset('alertausil/js/fancybox.min.js') }}"></script>
    @endpush
@endsection