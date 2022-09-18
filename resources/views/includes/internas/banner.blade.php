<main id="banner">
    <div id="carousel" class="carousel slide" >
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ isset($image) ? asset($image) : asset('/alertausil/img/slider/categorias/medicina.jpeg') }}" alt="First slide">
            </div>
            <div class="overlay d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-4 offset-md-2 ">
                            <div class="d-none d-lg-block">
                            @if(isset($icon))
                                <img src="{{isset($icon) ? $icon : ''}}" 
                                    alt="{{$message}}"
                                    width="80">
                            @endif
                            </div>
                            @if(isset($message))
                            <h1 class="h2 text-white font-alerta" style="word-wrap: break-word;">
                                {{$message}}
                            </h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</main>
