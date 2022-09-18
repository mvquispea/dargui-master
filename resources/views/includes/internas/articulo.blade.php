<style>
    .ql-texto img{
        max-width: 100%;
    }
    .ql-align-center{
        text-align: center;
    }
    .ql-align-right{
        text-align: right;
    }
    .ql-align-left{
        text-align: left;
    }
</style>
<section class="interna-section bg-dg-celeste">
    <div class="bg-textura-celeste">
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-md-9">
                    <h1 class="h1 color-alerta text-center font-alerta">
                        {{ $article->title }}
                    </h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- <div class="col h-25 d-inline-block">
                    <img src="{{ asset('alertausil/img/medicina/higiene.jpg') }}" alt="Higiene" width="100%">
                </div> -->
                <div class="col-md-9 color-informacion font-alerta mb-2 text-center" >
                    {!! $article->bajada !!}
                </div>
                <div class="col-md-9 text-muted font-alerta my-2" >
                    {!! $article->cita !!}
                </div>
                <div class="col-md-9 text-muted ql-texto my-2 text-justify" >
                    {!! $article->text !!}
                    <br><br>
                </div>
                <div class="col-12 text-center">
                <a href="/categoria/{{$category->slug}}" class="btn-alerta rounded px-4 py-2 font-alerta">Regresar a Artículos</a>
                </div>
            </div>
        </div>
    </div>
    
</section>