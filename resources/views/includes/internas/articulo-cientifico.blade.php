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
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <h1 class="h3 color-informacion text-center font-italic">
                        {{ $article->title }}
                    </h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 my-2">
                    <embed src="{{ env('APP_ENV') === 'local' ? asset($article->file) : secure_asset($article->file) }}" type="application/pdf" width="100%" height="800px">
                </div>
                <br><br>

                <div class="col-md-9 text-muted ql-texto my-2">
                    <a href="/articulos-cientificos" class="btn-alerta-outline rounded px-4 py-2 font-alerta">Regresar a artículos</a>
                </div>
            </div>
        </div>
    </div>
    
</section>