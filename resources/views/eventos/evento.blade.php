@extends('layouts/landing')

@section('title', $event->title .' - Evento')

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
    @include('includes.internas.banner', ['image'=> 'alertausil/img/expertos/banner.jpg', 
                                            'icon'=> '/alertausil/img/icons/expertos.png', 
                                            'message' => 'Evento'])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.evento')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection