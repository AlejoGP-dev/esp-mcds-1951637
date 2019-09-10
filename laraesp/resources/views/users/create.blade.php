@extends('layouts-custom.app')

@section('title', 'Crear Nuevo Usuario')

@section('content')
	<section class="container mt-4">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1><i class="fa fa-plus"></i>
					Crear Usuario
				</h1>
				<hr>
				<form action="{{ url('user') }}" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Nombre de usuario" required>
					</div>
					<div class="form-group">
						<input type="text" name="fullname" class="form-control" placeholder="Nombre y Apellidos" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
					</div>
					<div class="form-group">
						<input type="date" name="birthdate" class="form-control" placeholder="Fecha nacimiento" required>
					</div>
					<div class="form-group">
						<select name="gender" class="form-control">
							<option value="#">Seleccione Género...</option>
							<option value="F">Femenino</option>
							<option value="M">Masculino</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="photo" class="form-control" accept="image/*" required>
					</div>
					<div class="form-group">
						<button class="btn btn-success btn-lg">
								<i class="fa fa-save"></i>
								Guardar
						</button>
						<button type="reset" class="btn btn-light btn-lg">
								<i class="fa fa-trash"></i>
								Limpiar
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection