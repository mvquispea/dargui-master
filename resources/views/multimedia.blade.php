@extends('layouts/landing')

@section('title', 'Multimedia Covid 19')

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
    @include('includes.internas.banner', ['image'=> 'alertausil/img/multimedia/podcasts.jpg', 
                                            'icon'=> '/alertausil/img/icons/multimedia.png',
                                            'message' => 'Multimedia Covid 19'])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.multimedia')

    <!-- Footer -->
    @include('includes.landing.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection