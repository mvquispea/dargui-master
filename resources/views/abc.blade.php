@extends('layouts/landing')

@section('title', 'A-B-C Covid-19')

@section('content')
    <!-- Topbar -->
    @include('includes.internas.topbar')
    
    <!-- Menu -->
    @include('includes.landing.menu')

    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/abc/banner.jpg', 
                                            'icon'=> '/alertausil/img/icons/abc.png',
                                            'message' => 'A-B-C Covid-19'])

    <!-- Breadcrumbs -->


    <!-- Contenido -->
    @include('includes.internas.abc')

    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection