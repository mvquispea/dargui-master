
<div class="d-flex flex-row-reverse py-2 text-white" style="background: #029F99; font-size: 12px">
    <div class="px-4">
        <a href="{{ url('/logout') }}" class="text-decoration-none text-white">
            <i class="fas fa-power-off"></i> Cerrar Sesión
        </a>
    </div>  
    <div class="px-4">
        <span><i class="far fa-user"></i> {{ Auth::user()->name .' '.Auth::user()->lastname}}</span>
    </div>
    <div class="px-4">
        <a href="/admin" class="text-decoration-none text-white">Administrar</a>
    </div>
</div>
