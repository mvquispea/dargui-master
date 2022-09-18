<section id="categoria-content" class="interna-section bg-dg-celeste">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="color-informacion text-center font-alerta"><strong>Videos</strong></h1>
            </div>
        </div>

        <div id="grilla" class="row w-75 my-4 mx-auto ">

        @foreach($category->videos as $video)
            <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-4">
                <a href="/categoria/{{$category->slug}}/videos/{{$video->id}}">
                      <img src="{{ isset($video->image) ? asset($video->image) : asset('/alertausil/img/multimedia/video_default.png') }}" alt="" class="w-100 zoom-image">
                </a>
                <a href="/categoria/{{$category->slug}}/videos/{{$video->id}}">
                      <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
                          <span class="m-auto">{{ cutString($video->title, 90) }}</span>
                      </h3>
                </a>
            </div>
        @endforeach

            <div class="col-12 text-center">
                <a href="/categoria/{{$category->slug}}" class="btn-alerta rounded font-alerta px-4 py-2">
                    Regresar
                </a>
            </div>

        </div>

    </div>
</section>