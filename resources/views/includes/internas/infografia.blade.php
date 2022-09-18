<section id="videos-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container" style="margin: 2em auto 10em;">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="color-informacion text-center font-alerta">{{$infographic->title}}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 my-2">
                    <a href="{{ env('APP_ENV') === 'local' ? asset($infographic->file) : secure_asset($infographic->file) }}" data-fancybox>
                        <object data="{{ env('APP_ENV') === 'local' ? asset($infographic->file) : secure_asset($infographic->file) }}" style="min-height:800px; height:auto; width:100%"></object>
                    </a>
                </div>
                <div class="col-12 text-center my-5">
                  <a href="/categoria/{{$category->slug}}/infografias" class="btn-alerta rounded px-4 py-2 font-alerta">Regresar a infografías</a>
                </div>
            </div>

        </div>
    </div>
</section>