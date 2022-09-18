<div id="topbar-sociales"  class="topbar-white">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-sm-12 py-2 font-alerta">
                <a href="/"><img src="{{ asset('alertausil/img/logos/alerta-horizontal-verde.png') }}" alt="Alerta USIL" width="200"></a>
                <span class="ml-2 color-usil  ">Una señal a tiempo</span>
            </div>
            <div id="contacto" class="col-md-6 col-sm-12">
                <div class="row font12 align-items-center">
                    <div class="col offset-md-2 d-md-none d-lg-block text-center" >
                        <a href="https://www.facebook.com/alertausil" target="_blank" class="text-white text-decoration-none">
                            <i class="fab fa-facebook color-alerta" style="font-size:16px"></i>
                        </a>
                        <a href="https://twitter.com/AlertaUsil" target="_blank" class="text-white text-decoration-none">
                            <i class="fab fa-twitter color-alerta" style="font-size:16px"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCEmRsgGk-eGMsQmbX5XXUuQ" target="_blank" class="text-white text-decoration-none">
                            <i class="fab fa-youtube color-alerta" style="font-size:16px"></i>
                        </a>
                        <a href="https://www.instagram.com/alertausil2021" target="_blank" class="text-white text-decoration-none">
                            <i class="fab fa-instagram color-alerta" style="font-size:16px"></i>
                        </a>
                    </div>
                    <div class="col text-center" >
                        <a href="mailto:alertausil@usil.edu.pe" target="_blank" class="color-alerta text-decoration-none">
                            <i class="fas fa-envelope-square"></i> <small>alertausil@usil.edu.pe</small>
                        </a>
                    </div>
                    <div class="col" >
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                            </div>
                            <input 
                                id="search"
                                type="text" 
                                class="form-control" 
                                placeholder="Buscar" 
                                aria-label="Small" 
                                aria-describedby="inputGroup-sizing-sm"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var input = document.getElementById("search");
    input.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            if(input.value.length <= 2) return alert('Por favor, introduzca una palabra más larga en la búsqueda.')
            console.log('di click en enter', input.value)
            window.location.href="/buscar/" + input.value.trim()
        }
    });
</script>