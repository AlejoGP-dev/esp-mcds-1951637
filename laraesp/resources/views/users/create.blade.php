@extends('layouts-custom.app')

@section('title', 'Crear Usuario')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1>
					<i class="fa fa-plus"></i>
					Crear Usuario
				</h1>

				<hr>

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
					<li class="breadcrumb-item active">Crear Usuario</li>
				</ol>
				<form action="{{ url('users') }}" method="post" enctype="multipart/form-data">
					@csrf
					
					<label for=""></label>
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Nombre de Usuario">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="fullname" placeholder="Nombres y Apellidos">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Correo Electronico">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Contraseña">
					</div>

					<div class="form-group">
						<input type="date" class="form-control" name="birthdate" placeholder="Fecha de Nacimiento">
					</div>

					<div class="form-group">
						<select name="gender" class="form-control">
							<option value="">Seleccione Genero</option>
							<option value="Female">Femenino</option>
							<option value="Male">Masculino</option>
						</select>
					</div>

					<div class="form-group">
						<input type="file" accept="image/*" name="photo" class="form-control-file">
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
