@extends('layouts.app')

@section('title', 'Editar Categoría')

@section('content')
<section class="container mt-5">
<div class="row">
<div class="col-md-6 offset-md-3">
<h1>
<i class="fa fa-pencil"></i>
Editar Categoría
</h1>

<hr>

<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ url('categories') }}">Lista de Categorías</a></li>
<li class="breadcrumb-item active">Editar Categoría</li>
</ol>
@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show">
@foreach ($errors->all() as $message)
<li>{{$message}}</li>
@endforeach
<button type="button" class="close" data-dismiss="alert">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif
<form action="{{ url('categories/'.$categories->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="id" value="{{ $categories->id }}">
<label for=""></label>
<div class="form-group">
<input type="text" class="form-control  @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Nombre de Categoría" value={{ ($categories->name) }}>
</div>

 <div class="form-group">
 	<textarea class="form-control" id="" name="description" placeholder="Descripcion de la categoría" rows="3">{{ ($categories->description) }}</textarea>
</div>

<div class="form-group">
<button class="btn btn-success btn-lg">
<i class="fa fa-save"></i>
Guardar
</button>

<button class="btn btn-light btn-lg" type="reset">
<i class="fa fa-trash"></i>
Limpiar
</button>
</div>




</form>
</div>
</div>
</section>
@endsection
