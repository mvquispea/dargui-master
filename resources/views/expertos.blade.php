@extends('layouts/landing')

@section('title', 'Expertos USIL')

@section('content')
    <!-- Topbar -->
    @include('includes.internas.topbar')

    <!-- Menu -->
    @include('includes.landing.menu')
    
    <!-- Banner -->
    @include('includes.internas.banner', ['image'=> 'alertausil/img/expertos/banner.jpg', 
                                            'icon'=> '/alertausil/img/icons/expertos.png', 
                                            'message' => 'Nuestros Expertos'])
        
    <!-- Breadcrumbs -->

    
    <!-- Contenido -->
    @include('includes.internas.expertos')


    <!-- Footer -->
    @include('includes.internas.footer')

    <!--/ Page layout -->
    @push('scripts')
        <script>

        </script>
    @endpush
@endsection