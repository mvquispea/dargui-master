<section id="videos-content" class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container" style="margin: 2em auto 10em;">
            <div class="row">
                <div class="col-12">
                    <h1 class="color-informacion text-center font-alerta mb-5">Video {{$video->title}}</h1>
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe width="560" height="315" src="{{$video->url}}&&output=embed" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe width="420" height="315" src="{{ str_contains($video->url, 'https://youtu.be/') ? getYoutubeDefault($video->url,'https://youtu.be/') : $video->url }}" frameborder="0" allowfullscreen></iframe>
                            <!-- https://youtu.be/ros5bIDqMJM -->
                            <!-- https://www.youtube.com/embed/ros5bIDqMJM -->
                    </div>
                </div>
                <div class="col-12 text-center my-5">
                  <a href="/multimedia/videos" class="btn-alerta rounded px-4 py-2 font-alerta">Regresar a videos</a>
                </div>
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