@extends('layouts/landing')

@section('title', 'Búsqueda de '.$busqueda)

@section('content')
    <!-- Topbar -->
    @include('includes.internas.topbar')
    
    <!-- Menu -->
    @include('includes.landing.menu')

    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/abc/banner.jpg', 
                                            'icon'=> '/alertausil/img/icons/abc.png',
                                            'message' => 'Búsqueda de '.$busqueda])

    <!-- Breadcrumbs -->
    @include('includes.internas.breadcrumbs', [
                                                'breadcrumbs' => [['name' => "Búsqueda de ".$busqueda]]
                                                ])

    <!-- Contenido -->
    @include('includes.internas.busqueda')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection