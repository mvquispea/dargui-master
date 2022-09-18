@extends('layouts/landing')

@section('title', 'Noticias')

@section('content')
    <!-- Topbar -->
    @include('includes.internas.topbar')
    
    <!-- Menu -->
    @include('includes.landing.menu')

    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/banners/noticias.jpg'])


    <!-- Contenido -->
    @include('includes.internas.noticias')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection