<nav class="navbar navbar-expand-lg navbar-light menu py-2" >

    <div>
        <div class="d-inline-block">
        <a href="/" id="logoMobile" class="my-3 ml-3"><img src="{{ asset('alertausil/img/logos/alerta-horizontal-verde.png') }}" alt="Alerta USIL" width="200"></a>
        </div>
        <div class="logoMsg">
            <span class="color-usil font-alerta">Una señal a tiempo</span>
        </div>
    </div>
    <button id="btnMenu" class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu" style="background: #029F98">
        <ul class="navbar-nav ">
        <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item {{isset($menuActive) && $menuActive == 'medicina' ? 'active' : ''}}">
            <a class="nav-link" href="/categoria/medicina">MEDICINA Y SALUD</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'alimentacion' ? 'active' : ''}}">
            <a class="nav-link" href="/categoria/alimentacion">ALIMENTACIÓN Y NUTRICIÓN</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'actividad' ? 'active' : ''}}">
            <a class="nav-link" href="/categoria/actividad">ACTIVIDAD FÍSICA</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'bienestar' ? 'active' : ''}}">
            <a class="nav-link" href="/categoria/bienestar">BIENESTAR EMOCIONAL</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'articulos-cientificos' ? 'active' : ''}}">
            <a class="nav-link" href="/articulos-cientificos">ARTÍCULOS CIENTÍFICOS</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'noticias' ? 'active' : ''}}">
            <a class="nav-link" href="/noticias">NOTICIAS</a>
        </li>
        <li class="nav-item {{isset($menuActive) && $menuActive == 'eventos' ? 'active' : ''}}">
            <a class="nav-link" href="/eventos">EVENTOS </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="https://respiraperu.com.pe/" target="_blank">RESPIRA PERÚ</a>
        </li>
        
        </ul>
        <div id="redesMenuMobile" class="my-4 text-white">
            <a href="https://www.facebook.com/alertausil" target="_blank" class="text-decoration-none mr-3">
                <i class="fab fa-facebook" style="font-size:2em"></i>
            </a>
            <a href="https://twitter.com/AlertaUsil" target="_blank" class="text-decoration-none mr-3">
                <i class="fab fa-twitter" style="font-size:2em"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCEmRsgGk-eGMsQmbX5XXUuQ" target="_blank" class="text-decoration-none mr-3">
                <i class="fab fa-youtube" style="font-size:2em"></i>
            </a>
            <a href="https://www.instagram.com/alertausil2021" target="_blank" class="text-decoration-none mr-3">
                <i class="fab fa-instagram" style="font-size:2em"></i>
            </a>
            <a href="mailto:alertausil@usil.edu.pe" target="_blank" class="text-decoration-none">
                <i class="fas fa-envelope" style="font-size:2em"></i>
            </a>
        </div>
    </div>
</nav>
