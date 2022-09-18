@extends('layouts/admin/admin')

@section('title', 'Nueva noticia')

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
        <strong>Crear nuevo evento:</strong> Complete los campos obligatorios del formulario para guardar el evento.
      </div>
    </div>
  </div>
</div>

<div class="blog-edit-wrapper">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- <div class="media">
            <div class="avatar mr-75">
              <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" width="38" height="38" alt="Avatar" />
            </div>
            <div class="media-body">
              <h6 class="mb-25">Chad Alexander</h6>
              <p class="card-text">May 24, 2020</p>
            </div>
          </div> -->
          <form class="mt-2" >
          {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="title">Título: <span class="text-warning">*</span></label>
                  <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control"
                    maxlength="191"
                    required
                    value=""
                  />
                </div>
              </div>

              <div class="col-md-6 col-12">
                <div class="form-group mb-2">
                  <label for="visibility">Estado: <span class="text-warning">*</span></label>
                  <select class="form-control" id="visibility" name="visibility" disabled>
                    <option value="1">Publicado</option>
                    <option value="0">No publicado</option>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group mb-2">
                  <label>Descripción: <span class="text-warning">*</span></label>
                  <div id="blog-editor-wrapper">
                    <div id="blog-editor-container">
                      <div class="editor">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="border rounded p-2">
                  <h4 class="mb-1">Imagen miniatura para video</h4>
                  <div class="media flex-column flex-md-row">
                    <img
                      src="{{asset('/alertausil/img/multimedia/video_default.png')}}"
                      id="blog-feature-image"
                      class="rounded mr-2 mb-1 mb-md-0"
                      width="170"
                      height="110"
                      alt="Blog Featured Image"
                    />
                    <div class="media-body">
                      <h5 class="mb-0">Se aconseja:</h5>
                      <small class="text-muted">Sugerido resolución 480x360, tamaño máximo 250 KB.</small>
                      <p class="my-50">
                      </p>
                      <div class="d-inline-block">
                        <div class="form-group mb-0">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                            <label class="custom-file-label" for="blogCustomFile">Elegir archivo</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 mt-50">
                <button type="submit" id="send_form" class="btn btn-primary mr-1" ><i data-feather="save"></i> Guardar noticia</button>
                <a href="/lista-eventos" class="btn btn-outline-secondary">Cancelar</a>
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
<script src="{{ env('APP_ENV') === 'local' ? asset('js/admin/event-create.js') : secure_asset('js/admin/event-create.js') }}"></script>
@endsection