<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col text-uppercase text-muted">
                <a href="/" style="text-decoration: none; color: inherit">
                    <span>INICIO</span>
                </a>
                @foreach ($breadcrumbs as $breadcrumb)
                    @if(isset($breadcrumb['link']))
                    <i class="fas fa-chevron-right fa-sm"></i>
                    <a href="{{ $breadcrumb['link'] }}" class="text-decoration-none text-reset">
                        <span>{{ $breadcrumb['name'] }}</span>
                    </a>
                    @else
                    <i class="fas fa-chevron-right fa-sm"></i>
                    <span class="text-underline">{{ $breadcrumb['name'] }}</span>
                    @endif                
                @endforeach

                
            </div>
        </div>
    </div>
</section>