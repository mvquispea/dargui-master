@extends('layouts/admin/admin')

@section('title', 'Editar artículo científico')

@section('vendor-style')
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/forms/select/select2.min.css')) : secure_asset(mix('vendors/css/forms/select/select2.min.css')) }}" />
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/editors/quill/katex.min.css')) : secure_asset(mix('vendors/css/editors/quill/katex.min.css')) }}" />
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) : secure_asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}" />
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/editors/quill/quill.snow.css')) : secure_asset(mix('vendors/css/editors/quill/quill.snow.css')) }}" />
@endsection

@section('page-style')
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/base/plugins/forms/form-quill-editor.css')) : secure_asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}" />
  <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/base/pages/page-blog.css')) : secure_asset(mix('css/base/pages/page-blog.css')) }}" />
@endsection


@section('content')
<div class="row">
  <div class="col-12">
    <div class="alert alert-primary" role="alert">
      <div class="alert-body">
        <strong>Editar artículo científico:</strong> Complete los campos obligatorios del formulario para actualizar el artículo.
      </div>
    </div>
  </div>
</div>

@if ($message = Session::get('error'))
  <div class="alert alert-warning px-1">
      <p>{{ $message }}</p>
  </div>
@endif

<div class="blog-edit-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="media">
            <div class="avatar mr-75">
              <img src="{{asset('/alertausil/img/samples/usil.jpg')}}" width="38" height="38" alt="Avatar" />
            </div>
            <div class="media-body">
              <h6 class="mb-25">{{ $article->user_name }} {{ $article->user_lastname }}</h6>
              <p class="card-text">Creado {{ $article->created_at->format('d/m/Y') }}</p>
            </div>
          </div>
          <form action="/cientificos/{{ $article->id }}" method="POST" class="mt-2" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="row">
              <div class="col-12">
                <div class="form-group mb-2">
                  <label for="title">Título <span class="text-warning">*</span></label>
                  <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{ $article->title }}"
                    required
                  />
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="customFile">Archivo de artículo científico: <small class="text-warning">Ya existe un archivo cargado. Puede reemplazarlo.</small></label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="articleFile" name="articleFile">
                    <label class="custom-file-label" for="customFile">Seleccione archivo PDF</label>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="visibility">Estado <span class="text-warning">*</span></label>
                  <select class="form-control" id="visibility" name="visibility" required >
                    <option value="1" {{ $article->visibility == 1 ? 'selected' : '' }}>Publicado</option>
                    <option value="0" {{ $article->visibility == 0 ? 'selected' : '' }}>No publicado</option>
                  </select>
                </div>
              </div>

              <div class="col-12 mb-2">
                <div class="border rounded p-2">
                  <h4 class="mb-1">Imagen para infografía</h4>
                  <div class="media flex-column flex-md-row">
                    <img
                      src="{{$article->image ? asset($article->image) : asset('/alertausil/img/multimedia/video_default.png')}}"
                      id="blog-feature-image"
                      class="rounded mr-2 mb-1 mb-md-0"
                      width="170"
                      height="110"
                      alt="Blog Featured Image"
                    />
                    <div class="media-body">
                      <small class="text-warning">Tamaño máximo 500 KB. Se sugiere resolución 480X360.</small>
                      <p class="my-50">
                      </p>
                      <div class="d-inline-block">
                        <div class="form-group mb-0">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="articleImage" name="articleImage" accept="image/*" />
                            <label class="custom-file-label" for="articleImage">Elegir imagen</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-50">
                <button type="submit" id="send_form" class="btn btn-primary mr-1" >
                  <i data-feather="save"></i> Actualizar artículo científico
                </button>
                <a href="/cientificos" class="btn btn-outline-secondary">Cancelar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('vendor-script')
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/forms/select/select2.full.min.js')) : secure_asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/editors/quill/katex.min.js')) : secure_asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/editors/quill/highlight.min.js')) : secure_asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/editors/quill/quill.min.js')) : secure_asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
@endsection

@section('page-script')
<script>
  var articleId = {{ $article->id}}
</script>
<script src="{{ env('APP_ENV') === 'local' ? asset('js/admin/articulo-cientifico-create.js') : secure_asset('js/admin/articulo-cientifico-create.js') }}"></script>

@endsection