<section id="infografias-content" class="interna-section bg-dg-celeste">
<div class="bg-textura-celeste">
    <div class="container" style="margin: 2em auto 10em;">
        <div class="row">
            <div class="col">
                <h1 class="color-informacion text-center font-alerta">Infografías</h1>
            </div>
        </div>

        <div id="grilla" class="row w-75 my-4 mx-auto ">

        @foreach($infographics as $infographic)

            <div class="col-sm-12 col-md-6 col-lg-4 my-4 px-4">
                <a href="/multimedia/infografias/{{$infographic->id}}">
                    <img src="{{ isset($infographic->image) ? asset($infographic->image) : asset('/alertausil/img/multimedia/video_default.png') }}" alt="Infografía" class="img-fluid d-block mb-4 zoom-image">
                </a>
                
                <a href="/multimedia/infografias/{{$infographic->id}}">
                    <h3 class="h6 color-informacion font-alerta minh-4 px-1 text-center" style="height: 5em; display: flex; align-items: center;"> 
                    <span class="m-auto">
                        {{ cutString($infographic->title,90) }}
                    </span>
                    </h3>
                </a>
            </div>

        @endforeach

            
            <!-- <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/alimentacion_y_sistema_inmune.jpg') : secure_asset('alertausil/files/infografia/alimentacion_y_sistema_inmune.jpg') }}" 
                data-fancybox="gallery" class="btn btn-alerta  btn-block px-4">
                    <span class="m-auto">{{ cutString('La alimentación como aliado de nuestro Sistema Inmunológico',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Circuito_de_ejercicios.pdf') : secure_asset('alertausil/files/infografia/Circuito_de_ejercicios.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta  btn-block px-4">
                    <span class="m-auto">{{ cutString('Circuito de ejercicios',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Como_evitar_infectarme_de_Covid19.pdf') : secure_asset('alertausil/files/infografia/Como_evitar_infectarme_de_Covid19.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('¿Cómo evitar infectarme de Covid 19?',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Estas_por_salir_de_casa.pdf') : secure_asset('alertausil/files/infografia/Estas_por_salir_de_casa.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('¿Estás por salir de casa?',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Lavado_de_manos_alerta_usil.pdf') : secure_asset('alertausil/files/infografia/Lavado_de_manos_alerta_usil.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Lavado de manos',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/MEDIDAS_DE_HIGIENE_CORONAVIRUS.pdf') : secure_asset('alertausil/files/infografia/MEDIDAS_DE_HIGIENE_CORONAVIRUS.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Medidas de Higiene Coronavirus',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Somos_una_familia_y_debemos_cuidarnos.pdf') : secure_asset('alertausil/files/infografia/Somos_una_familia_y_debemos_cuidarnos.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Somos una familia y debemos cuidarnos',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Habitos-saludables-marzo-2021.pdf') : secure_asset('alertausil/files/infografia/Habitos-saludables-marzo-2021.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Hábitos saludables',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Recomendaciones-nutricionales-saludables-marzo-2021.pdf') : secure_asset('alertausil/files/infografia/Recomendaciones-nutricionales-saludables-marzo-2021.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Recomendaciones nutricionales saludables para la cuarentena',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/4_Aliados_naturales_de_la_Felicidad.pdf') : secure_asset('alertausil/files/infografia/4_Aliados_naturales_de_la_Felicidad.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('4 Aliados naturales de la Felicidad',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/Vitamica_C_y_complementos_saludables_para_el_almuerzo.pdf') : secure_asset('alertausil/files/infografia/Vitamica_C_y_complementos_saludables_para_el_almuerzo.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Vitamina C y complementos saludables para el almuerzo',90) }}</span>
                </a>
            </div>
            <div class="col-lg-4 text-center my-2">
                <a href="{{ env('APP_ENV') === 'local' ? asset('alertausil/files/infografia/La_obesidad_aumenta_el_riesgo_de_enfermedades_por_covid.pdf') : secure_asset('alertausil/files/infografia/La_obesidad_aumenta_el_riesgo_de_enfermedades_por_covid.pdf') }}" 
                data-fancybox="gallery" class="btn btn-alerta btn-block px-4">
                    <span class="m-auto">{{ cutString('Obesidad y covid-19',90) }}</span>
                </a>
            </div> -->
        </div>
    </div>
</div>

</section>