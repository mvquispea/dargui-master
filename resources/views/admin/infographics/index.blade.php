@extends('layouts/admin/admin')

@section('title', 'Infografías - Alerta USIL')

@push('styles')
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/fancybox.min.css') : secure_asset('alertausil/css/fancybox.min.css')}}">
@endpush

@section('content')

@if ($message = Session::get('success'))
  <div class="alert alert-success px-1">
      <p>{{ $message }}</p>
  </div>
@endif

<!-- Basic Tables -->
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
    <div class="card-header border-bottom p-1">
        <div class="head-label">
            <h6 class="mb-0">Listado de todas las infografías</h6>
        </div>
        <div class="dt-action-buttons text-right">
            <div class="dt-buttons flex-wrap d-inline-flex"> 
                
                <a href="/infografias/nuevo" class="btn create-new btn-primary" 
                    tabindex="0"  
                    type="button">
                    <span>
                        <i data-feather="plus"></i> Nueva infografía
                    </span>
                </a> 
            </div>
        </div>
    </div>

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Título</th>
              <th>Creado</th>
              <th>Categoría</th>
              <th>Estado</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($infographics as $infographic)
          <tr>
            <td>
              <a href="{{ env('APP_ENV') === 'local' ? asset($infographic->file) : secure_asset($infographic->file) }}" 
                 data-fancybox="gallery" class="font-weight-bold">
                 {{ $infographic->title }}
              </a>
            </td>
            <td>{{ $infographic->created_at->format('d/m/Y') }}</td>
            <td>{!! isset($infographic->category_name) ? '<span class="badge badge-pill badge-light-primary mr-1">'. $infographic->category_name.'</span>' : '<span>Sin categoría</span>' !!}</td>
            <td>
              <span class="badge badge-pill badge-info mr-1">
                  {{ $infographic->visibility ? 'Publicado' : 'No publicado' }}
              </span>
            </td>
            
            <td>
              <div class="dropdown">
                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                  <i data-feather="more-vertical"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/infografias/{{ $infographic->id }}/editar">
                    <i data-feather="edit-2" class="mr-50"></i>
                    <span>Editar</span>
                  </a>
                  <button class="dropdown-item" onclick="deleteInfographic({{ $infographic->id }})">
                    <i data-feather="trash" class="mr-50"></i>
                    <span>Eliminar</span>
                  </button>
                </div>
              </div>
            </td>
          </tr>

          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->

<!-- Toast de articulo guardado -->
<div
  class="toast toast-basic hide position-fixed bg-success text-white"
  role="alert"
  aria-live="assertive"
  aria-atomic="true"
  data-delay="5000"
  style="top: 1rem; right: 1rem"
>
  <div class="toast-header " >
    <strong class="mr-auto">Alerta USIL</strong>
    <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div id="message" class="toast-body">
  </div>
</div>
<!-- Basic toast ends -->


@endsection


@section('page-script')
<script src="{{ env('APP_ENV') === 'local' ? asset('js/scripts/components/components-bs-toast.js') : secure_asset('js/scripts/components/components-bs-toast.js') }}"></script>
<script src="{{ env('APP_ENV') === 'local' ?  asset('alertausil/js/fancybox.min.js') : secure_asset('alertausil/js/fancybox.min.js') }}"></script>
<script>
    if(window.location.search === '?created=true'){
      document.getElementById('message').innerHTML = 'Infografía creada correctamente.'
      $('.toast').toast('show');
    }
    if(window.location.search === '?updated=true'){
      document.getElementById('message').innerHTML = 'Infografía actualizada correctamente.'
      $('.toast').toast('show');
    }
    if(window.location.search === '?deleted=true'){
      document.getElementById('message').innerHTML = 'Infografía eliminada correctamente.'
      $('.toast').toast('show');
    }
    function deleteInfographic(id){
      if(!confirm('¿Está seguro de  eliminar este infografía?')) return
      $.ajax({
        url: `/infografias/${id}`,
        type: "DELETE",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
          if(data.success){
            window.location='/infografias?deleted=true'
          } else {
            alert("Por favor vuelva a intentarlo.");
          }
        },
        error: function() {
          alert("No se ha podido eliminar la información");
        }
      });
    }

</script>
@endsection