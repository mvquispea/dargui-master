<section id="categoria-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="color-informacion text-center font-alerta"><strong>Eventos</strong></h1>
                </div>
            </div>
           
            <div class="row w-75 my-4 mx-auto ">
                
                @forelse($events as $event)

                <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <a href="/eventos/{{$event->id}}">
                            <img src="{{ isset($event->image) ? asset($event->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">
                            {{ $event->title }}
                            </p>
                            <a href="/eventos/{{$event->id}}" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div>

                @empty
                <div class="col-sm-12 col-md-12 text-center px-4 my-4">
                    <p class="text-muted center-justified">
                    No hay eventos por mostrar
                    </p>
                </div>
                @endforelse

                <!-- <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <img src="{{asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <img src="{{asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <img src="{{asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <img src="{{asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 text-center px-2 my-4">
                    <div class="card card-eventos">
                        <img src="{{asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text font-alerta" style="font-size: 0.9em">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn-evento px-5 py-2 font-regular font-weight-bold" style="font-size: 0.7em">ENTRAR</a>
                        </div>
                    </div>
                </div> -->

                <!-- PAGINACION -->

                <div class="col-md-12">
                    @include('includes.landing.pagination', [
                    'datos' => $events])
                </div>
            </div>

        </div>
    </div>
</section>