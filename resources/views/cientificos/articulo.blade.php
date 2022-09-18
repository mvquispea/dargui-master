@extends('layouts/landing')

@section('title', $article->title .' - Artículo científico')

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
                                            'message' => 'Artículos científicos'])

    <!-- Breadcrumbs -->
    @include('includes.internas.breadcrumbs', [ 
                                                'breadcrumbs' => [
                                                                    ['link'=>"/articulos-cientificos",'name'=>'Artículos científicos'],
                                                                    ['name' => $article->title]
                                                                ]
                                                ])

    <!-- Contenido -->
    @include('includes.internas.articulo-cientifico')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection