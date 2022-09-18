<section id="categoria-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="color-informacion text-center font-alerta"><strong>Artículos</strong></h1>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto" style="border-bottom: 1px solid #DFF2F2; padding-bottom: 4rem !important;">
                @foreach($category->articles->take(3) as $article)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/categoria/{{$category->slug}}/articulos/{{$article->id}}">
                        <img src="{{ isset($article->image) ? asset($article->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/categoria/{{$category->slug}}/articulos/{{$article->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
                        <span class="m-auto">{{ cutString($article->title, 90) }}</span>
                        </h3>
                    </a>
                </div>
                @endforeach
                <div class="col-sm-12 text-center" >
                    <a href="/categoria/{{$category->slug}}/articulos" class="btn-alerta rounded font-alerta px-4 py-2">
                        Ver más artículos
                    </a>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="color-informacion text-center font-alerta"><strong>Videos</strong></h1>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto" style="border-bottom: 1px solid #DFF2F2; padding-bottom: 4rem !important;">
                @forelse($category->videos->take(3) as $video)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/categoria/{{$category->slug}}/videos/{{$video->id}}">
                        <img src="{{ isset($video->image) ? asset($video->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/categoria/{{$category->slug}}/videos/{{$video->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
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
                    <!-- <a href="/multimedia/videos" class="btn-alerta rounded font-alerta px-4 py-2"> -->
                    <a href="/categoria/{{$category->slug}}/videos" class="btn-alerta rounded font-alerta px-4 py-2">
                        Ver más videos
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="color-informacion text-center font-alerta"><strong>Infografías</strong></h1>
                </div>
            </div>
            <div class="row w-75 my-4 mx-auto ">
                @forelse($category->infographics->take(3) as $infographic)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-3">
                    <a href="/categoria/{{$category->slug}}/infografias/{{$infographic->id}}">
                        <img src="{{ isset($infographic->image) ? asset($infographic->image) : asset('/alertausil/img/slider/slide1.jpg') }}" alt="Articulo" class="img-fluid">
                    </a>
                    <a href="/categoria/{{$category->slug}}/infografias/{{$infographic->id}}">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
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
                    <!-- <a href="/multimedia/infografias" class="btn-alerta rounded font-alerta px-4 py-2"> -->
                    <a href="/categoria/{{$category->slug}}/infografias" class="btn-alerta rounded font-alerta px-4 py-2">
                        Ver más infografías
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>