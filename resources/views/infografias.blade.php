@extends('layouts/landing')

@section('title', $category->name . ' - Infografías')

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
    @include('includes.internas.banner', ['image'=> $category->banner, 
                                            'icon'=> $category->icon,
                                            'message' => $category->name])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.infografias_categoria')
    

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection