@extends('layouts-custom.app')

@section('title', 'Consultar Usuario')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1>
					<i class="fa fa-plus"></i>
					Consultar Usuario
				</h1>

				<hr>

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
					<li class="breadcrumb-item active">Consultar Usuario</li>
				</ol>
				<table class="table table-striped table-bordered table-dark table-hover">
					<tr>
						<th>Nombre Usuario:</th>
						<td>{{ $user->username }}</td>
					</tr>
					<tr>
						<th>Nombre Completo</th>
						<td>{{ $user->fullname }}</td>
					</tr>
					<tr>
						<th>Correo Electrónico</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Fecha de Nacimiento</th>
						<td>{{ $user->birthdate }}</td>
					</tr>
					<tr>
						<th>Género</th>
						<td>
							@if ($user->gender == "Female")
								<i class="fa fa-female"></i> Femenino
							@elseif ($user->gender == "Male")
							    <i class="fa fa-male"></i> Masculino
							@endif
						</td>
					</tr>
					<tr>
						<th>Foto</th>
						<th><img src="{{ asset($user->photo) }}" class="img-thumbnail" width="200px" alt=""></th>
					</tr>
					<tr>
						<th>Rol</th>
						<th>{{ $user->role }}</th>
					</tr>

				</table>