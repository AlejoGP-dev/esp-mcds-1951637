@extends('layouts.app')

@section('title', 'Consultar Categoría')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1> 
					<i class="fa fa-search"></i> 
					Consultar Categoría
				</h1>
				<hr>
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item">
			    	<a href="{{ url('categories') }}">Lista de Categorías</a>
			    </li>
			    <li class="breadcrumb-item active">
			    	Consultar Categoría
			    </li>
			  </ol>
			  <table class="table table-striped table-bordered table-hover">
			  	<tr>
			  		<th>Nombre Categoría:</th>
			  		<td>{{ $category->name }}</td>
			  	</tr>
			  	<tr>
			  		<th>Descripción:</th>
			  		<td>{{ $category->description }}</td>
			  	</tr>
			  {{-- 	<tr>
			  		<th>Fecha de Creación:</th>
			  		<td>{{ $category->created_at }}</td>
			  	</tr>
			  	<tr>
			  		<th>Fecha Modificación:</th>
			  		<td>{{ $category->updated_at }}</td>
			  	</tr> --}}
			  </table>
		</div>
	</div>
</section>
@endsection
