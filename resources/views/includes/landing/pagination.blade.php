<nav aria-label="Page navigation">
    <ul class="pagination  justify-content-center pagination-alerta">

        <li class="page-item {{ $datos->currentPage() == 1 ? 'disabled' : '' }}">
            <a class="page-link arrow" href="{{$datos->path()}}?page={{$datos->currentPage()-1}}" tabindex="-1">
                <i class="fas fa-chevron-left"></i>
            </a>
        </li>


        @for ($i = 1; $i <= $datos->lastPage(); $i++)
            <li class="page-item"><a class="page-link {{ $datos->currentPage() == $i ? 'active' : ''}}" href="{{$datos->path()}}?page={{$i}}">{{$i}}</a></li>
        @endfor

        @if($datos->currentPage() < $datos->lastPage())
        <li class="page-item">
            <a class="page-link arrow" href="{{$datos->path()}}?page={{$datos->currentPage()+1}}">
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        @endif
    </ul>
</nav>