@extends('layouts/admin/admin')

@section('title', 'Administrar Alerta USIL')

@section('content')

<!-- Page layout -->
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Nuevas entradas 📝</h4>
  </div>
  <div class="card-body">
    <div class="card-text">
      <p>
        Agregue nuevas entradas a las categorías
      </p>
      <ul>
        @foreach($categories as $category)
        <li>{{ $category->name }}</li>
        @endforeach
      </ul>
      <div class="alert alert-primary" role="alert">
        <div class="alert-body">
          <a class="text-primary" href="/articulos" >
            Ver artículos
          </a>
          <a class="text-primary ml-4" href="/articulos/nuevo">
            Agregar artículo
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h4 class="card-title">Multimedia 🚀</h4>
  </div>
  <div class="card-body">
    <div class="card-text">
      <ul>
        <li>
          Agregue nuevos videos a multimedia.
        </li>
        <li>
          Agregue nuevas infografías a multimedia.
        </li>
      </ul>
      <div class="alert alert-primary" role="alert">
        <div class="alert-body">
          <a class="text-primary" href="/videos" >
            Ver videos
          </a>
          <a class="text-primary ml-4" href="/videos/nuevo">
            Agregar video
          </a>
        </div>
      </div>
      <div class="alert alert-primary" role="alert">
        <div class="alert-body">
          <a class="text-primary" href="/infografias" >
            Ver infografías
          </a>
          <a class="text-primary ml-4" href="/infografias/nuevo">
            Agregar infografía
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--/ Page layout -->
@endsection
