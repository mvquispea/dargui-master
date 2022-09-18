@extends('layouts/landing')

@section('title', 'Fotos - Multimedia')

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
    @include('includes.internas.breadcrumbs', [ 
                                                'breadcrumbs' => [
                                                                    ['link'=>"/multimedia",'name'=>"Multimedia"],
                                                                    ['name' => "Fotos"]
                                                                ]
                                                ])

    <!-- Contenido -->
    @include('includes.internas.fotos')

    <!-- Footer -->
    @include('includes.landing.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection