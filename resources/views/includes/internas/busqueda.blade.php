<section id="categoria-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="color-informacion text-center font-alerta"><strong>Artículos</strong></h1>
                    <small class="text-muted m-auto font-italic">Se {{ sizeof($articles) == 1 ? 'encontró' : 'encontraron' }} {{ sizeof($articles) }} {{ sizeof($articles) == 1 ? 'artículo relacionado' : 'artículos relacionados'  }}</small>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto ">
                @foreach($articles as $article)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/categoria/{{$article->category_slug}}/articulos/{{$article->id}}">
                        <img src="{{ isset($article->image) ? asset($article->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/categoria/{{$article->category_slug}}/articulos/{{$article->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1" style="height: 5em; display: flex; align-items: center; text-align:left"> 
                        <span class="m-auto">{{ cutString($article->title, 90) }}</span>
                        </h3>
                    </a>
                </div>
                @endforeach
            </div>
            <hr style="background: #DFF2F2;">
            <div class="row">
                <div class="col text-center">
                    <h1 class="color-informacion text-center font-alerta"><strong>Videos</strong></h1>
                    <small class="text-muted m-auto font-italic">Se {{ sizeof($videos) == 1 ? 'encontró' : 'encontraron' }} {{ sizeof($videos) }} {{ sizeof($videos) == 1 ? 'video relacionado' : 'videos relacionados'  }}</small>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto ">
                @forelse($videos as $video)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/multimedia/videos/{{$video->id}}">
                        <img src="{{ isset($video->image) ? asset($video->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/multimedia/videos/{{$video->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1" style="height: 5em; display: flex; align-items: center; text-align:left"> 
                        <span class="m-auto">{{ cutString($video->title, 90) }}</span>
                        </h3>
                    </a>
                </div>
                @empty
                <div class="col-md-12 my-4 px-3 text-center">
                    <span class="text-muted">No hay videos disponibles</span>
                </div>
                @endforelse
                <div class="col-sm-12 text-center">
                    <a href="/multimedia/videos" class="btn-alerta rounded font-alerta px-4 py-2">
                        Ver más videos
                    </a>
                </div>
            </div>
            <hr style="background: #DFF2F2;">
            <div class="row">
                <div class="col text-center">
                    <h1 class="color-informacion text-center font-alerta"><strong>Infografías</strong></h1>
                    <small class="text-muted m-auto font-italic">Se {{ sizeof($infographics) == 1 ? 'encontró' : 'encontraron' }} {{ sizeof($infographics) }} {{ sizeof($infographics) == 1 ? 'infografía relacionada' : 'infografías relacionadas'  }}</small>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto ">
                @forelse($infographics as $infographic)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/multimedia/infografias/{{$infographic->id}}">
                        <img src="{{ isset($infographic->image) ? asset($infographic->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/multimedia/infografias/{{$infographic->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1" style="height: 5em; display: flex; align-items: center; text-align:left"> 
                        <span class="m-auto">{{ cutString($infographic->title, 90) }}</span>
                        </h3>
                    </a>
                </div>
                @empty
                <div class="col-md-12 my-4 px-3 text-center">
                    <span class="text-muted">No hay infografías disponible</span>
                </div>
                @endforelse
                <div class="col-sm-12 text-center">
                    <a href="/multimedia/infografias" class="btn-alerta rounded font-alerta px-4 py-2">
                        Ver más infografías
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>