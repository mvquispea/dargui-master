@extends('layouts/admin/admin')

@section('title', 'Videos - Alerta USIL')

@section('content')

<!-- Basic Tables -->
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
    <div class="card-header border-bottom p-1">
        <div class="head-label">
            <h6 class="mb-0">Listado de todos los videos</h6>
        </div>
        <div class="dt-action-buttons text-right">
            <div class="dt-buttons flex-wrap d-inline-flex"> 
                
                <a href="/videos/nuevo" class="btn create-new btn-primary" 
                    tabindex="0"  
                    type="button">
                    <span>
                        <i data-feather="plus"></i> Nuevo video
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
              <th>Estado</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($videos as $video)

            <tr>
              <td>
                <a href="#!" class="font-weight-bold">{{ $video->title }}</a>
              </td>
              <td>{{ $video->created_at->format('d/m/Y') }}</td>
              <td>
                <span class="badge badge-pill badge-info mr-1">
                    {{ $video->visibility ? 'Publicado' : 'No publicado' }}
                </span>
              </td>
              
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                    <i data-feather="more-vertical"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/videos/{{ $video->id }}/editar">
                      <i data-feather="edit-2" class="mr-50"></i>
                      <span>Editar</span>
                    </a>
                    <button class="dropdown-item" onclick="deleteVideo({{ $video->id }})">
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

<script>
    if(window.location.search === '?created=true'){
      document.getElementById('message').innerHTML = 'Video creado correctamente.'
      $('.toast').toast('show');
    }
    if(window.location.search === '?updated=true'){
      document.getElementById('message').innerHTML = 'Video actualizado correctamente.'
      $('.toast').toast('show');
    }
    if(window.location.search === '?deleted=true'){
      document.getElementById('message').innerHTML = 'Video eliminado correctamente.'
      $('.toast').toast('show');
    }
    function deleteVideo(id){
      if(!confirm('¿Está seguro de  eliminar este video?')) return
      $.ajax({
        url: `/videos/${id}`,
        type: "DELETE",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
          if(data.success){
            window.location='/videos?deleted=true'
          } else {
            alert("Por favor vuelva a intentarlo.");
          }
        },
        error: function() {
          alert("No se ha podido enviar la información");
        }
      });
    }

</script>
@endsection
