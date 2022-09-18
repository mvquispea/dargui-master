<section id="cientificos-content" class="interna-section bg-dg-celeste">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="color-informacion text-center font-regular font-italic">Artículos <strong>científicos</strong></h1>
            </div>
        </div>
        
        <div id="grilla" class="row w-75 my-4 mx-auto ">

            @foreach($articles as $article)
                <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-4">
                    <img src="{{ isset($article->image) ? asset($article->image) : asset('alertausil/img/multimedia/video_default.png') }}" alt="Articulo" class="img-fluid d-block mb-4">

                    
                    <!-- <a href="{{ env('APP_ENV') === 'local' ? asset($article->file) : secure_asset($article->file) }}" 
                    data-fancybox="gallery" > -->
                    <!-- </a> -->
                    <a href="/articulos-cientificos/{{$article->id}}" class="">
                        <h3 class="h6 color-informacion font-alerta minh-4 px-1" style="height: 6em; display: flex; align-items: center; text-align:left"> 
                            <span class="m-auto">{{ cutString($article->title,100) }}</span>
                        </h3>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>