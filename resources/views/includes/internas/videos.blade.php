<section id="videos-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container" style="margin: 2em auto 10em;">
            <div class="row">
                <div class="col">
                    <h1 class="color-informacion text-center font-alerta">Videos</h1>
                </div>
            </div>

            <div id="grilla-videos" class="row justify-content-center w-75 m-auto">
               
                @foreach($videos as $video)

                <div class="col-md-4 my-4 ">
                    <a href="/multimedia/videos/{{ $video->id }}">
                      <img src="{{ isset($video->image) ? asset($video->image) : asset('/alertausil/img/multimedia/video_default.png') }}" alt="" class="w-100 zoom-image">
                    </a>
                    
                    <a href="/multimedia/videos/{{ $video->id }}">
                      <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
                          <span class="m-auto">{{ cutString($video->title, 90) }}</span>
                      </h3>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('alertausil/img/multimedia/covid.jpg') }}" alt="Video" width="100%">
      </div>
    </div>
  </div>
</div>