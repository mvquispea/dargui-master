@extends('layouts/landing')

@section('title', $video->title .' - Video de '.$category->name)

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
    @include('includes.internas.banner', ['image'=> null, 
                                            'icon'=> $category->icon,
                                            'message' => $category->name])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.video')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection