@extends('layouts-custom.app')

@section('title', 'Editar Usuario')

@section('content')
	<section class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1>
					<i class="fa fa-pencil"></i>
					Editar Usuario
				</h1>

				<hr>

				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ url('users') }}">Lista de Usuarios</a></li>
					<li class="breadcrumb-item active">Editar Usuario</li>
				</ol>
				<form action="{{ url('users/'.$user->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<label for=""></label>
					<div class="form-group">
						<input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Nombre de Usuario">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="fullname" value="{{ $user->fullname }}" placeholder="Nombres y Apellidos">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Correo Electronico">
					</div>

					<div class="form-group">
						<input type="date" class="form-control" value="{{ $user->birthdate }}" name="birthdate" placeholder="Fecha de Nacimiento">
					</div>

					<div class="form-group">
						<select name="gender" class="form-control">
							<option value="{{ $user->gender }}">
								@if ($user->gender == "Female")
									Femenino
								@elseif ($user->gender == "Male")	
									Masculino
								@endif
							</option>
							<option value="Female">Femenino</option>
							<option value="Male">Masculino</option>
						</select>
					</div>

					<div class="form-group">
						<img src="{{ asset($user->photo) }}" class="img-thumbnail" width="200px" alt=""><br>	
						<input type="file" accept="image/*" name="photo" class="form-control-file">
					</div>
					
					<div class="form-group">
						<button class="btn btn-success btn-lg">
							<i class="fa fa-save"></i>
							Guardar cambios
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
