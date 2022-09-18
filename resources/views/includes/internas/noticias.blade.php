<section id="categoria-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="color-informacion text-center font-alerta"><strong>Noticias</strong></h1>
                </div>
            </div>
           
            <div class="row w-75 my-4 mx-auto ">
                @forelse($notices as $notice)
                <div class="col-sm-12 col-md-6 text-center px-4 my-4">
                    <a href="/noticias/{{$notice->id}}" >
                        <img src="{{ isset($notice->image) ? asset($notice->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid mb-2">
                    </a>
                    <a href="/noticias/{{$notice->id}}">
                        <h3 class="h5 color-informacion font-alerta minh-4 px-1" style="height: 5em; display: flex; align-items: center;"> 
                        <span style="margin: 0 auto;" >{{$notice->title}}</span>
                        </h3>
                    </a>
                    <p class="text-muted center-justified">
                    {{
                        cutString($notice->description, 200)
                    }}
                    
                    </p>
                </div>

                @empty
                <div class="col-sm-12 col-md-12 text-center px-4 my-4">
                    <p class="text-muted center-justified">
                    No hay noticias por mostrar
                    </p>
                </div>

                @endforelse
               
                <!-- PAGINACION -->
                
                <div class="col-md-12">
                    @include('includes.landing.pagination', [
                    'datos' => $notices])
                </div>
            </div>
        </div>
    </div>
</section>
